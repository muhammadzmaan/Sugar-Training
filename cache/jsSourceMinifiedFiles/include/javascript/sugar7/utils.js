(function(app){app.events.on("app:init",function(){var tooltipTemplate=Handlebars.compile('<div class="tooltip">'+'<div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>');var $tooltipTemplate=$(tooltipTemplate());function setParentAttributes(model,parent){var fields=app.metadata.getModule(model.module,'fields');var modules;var name;modules=_.chain(app.lang.getAppListStrings(fields.parent_type.options)).keys().filter(function(module){return app.acl.hasAccess('list',module);}).value();if(!_.contains(modules,parent.module)){return;}
function setAttributes(parent){model.set('parent',_.extend({type:parent.module},parent.toJSON()));model.set('parent_type',parent.module);model.set('parent_id',parent.get('id'));model.set('parent_name',parent.get('name'));}
if(_.isEmpty(parent.get('id'))){return;}
if(_.isEmpty(parent.get('name'))&&!app.utils.isNameErased(parent)){name=app.utils.getRecordName(parent);if(!_.isEmpty(name)){parent.set('name',name);setAttributes(parent);}else{parent.fetch({showAlerts:false,success:setAttributes,fields:['name']});}}else{setAttributes(parent);}}
function prepopulateEmailWithCase(email,aCase){var config;var keyMacro='%1';var caseMacro;var subject;var contacts;if(aCase.module!=='Cases'){return;}
config=app.metadata.getConfig();caseMacro=config.inboundEmailCaseSubjectMacro;subject=caseMacro+' '+aCase.get('name');subject=subject.replace(keyMacro,aCase.get('case_number'));email.set('name',subject);if(email.get('to_collection').length===0){contacts=aCase.getRelatedCollection('contacts');contacts.fetch({relate:true,success:function(data){var records=data.map(function(record){var parentName=app.utils.getRecordName(record);return app.data.createBean('EmailParticipants',{_link:'to',parent:_.extend({type:record.module},app.utils.deepCopy(record.attributes)),parent_type:record.module,parent_id:record.get('id'),parent_name:parentName});});email.get('to_collection').add(records);},fields:['id','name','email']});}}
function prepopulateEmailForCreate(email,data){var fields=app.metadata.getModule('Emails','fields');var fieldNames=_.keys(fields);var fieldMap={attachments:'attachments_collection',from:'from_collection',to:'to_collection',cc:'cc_collection',bcc:'bcc_collection'};var nonFieldData={};_.each(data,function(value,fieldName){var fieldDefs;fieldName=fieldMap[fieldName]||fieldName;fieldDefs=fields[fieldName]||{};if(fieldName==='related'){if(data.skip_prepopulate_with_case!==true){prepopulateEmailWithCase(email,value);}
setParentAttributes(email,value);}else if(fieldDefs.type==='collection'){if(value instanceof app.BeanCollection){value=value.models;}
email.get(fieldName).add(value);}else if(_.contains(fieldNames,fieldName)){email.set(fieldName,value);}else{nonFieldData[fieldName]=value;}});return nonFieldData;}
app.utils=_.extend(app.utils,{convertCompToDashletView:function(comp){var dashletConfigs=comp.view.dashletConfig;dashletConfigs=_.isArray(dashletConfigs)?dashletConfigs:[dashletConfigs];return _.map(dashletConfigs,function(dashletConfig){var metadata={component:'external-app-dashlet',config:{customConfig:true,src:comp.view.src,dashletConfig:comp.view.dashletConfig,},customDashletMeta:comp,description:comp.view.description,label:comp.view.name,dashletType:dashletConfig.type,type:'external-app-dashlet'};return{description:comp.view.description,metadata:metadata,title:comp.view.name,type:'external-app-dashlet'};});},getMfeDashletViews:function(context){var isMultiLine=context&&context.parent&&context.parent.get('layout')==='multi-line';var parentModule=isMultiLine?context.parent.get('module'):app.controller.context.get('module');var parentView=isMultiLine?'record':app.controller.context.get('layout');var dashletView=parentView==='records'?'list-dashlet':'record-dashlet';var dashletMeta=app.metadata.getLayout(parentModule,dashletView);if(!dashletMeta){return[];}
return _(dashletMeta.components).chain().map(function(comp){try{return app.utils.convertCompToDashletView(comp);}catch(err){return[];}}).flatten().value();},hideForecastCommitStageField:function(panels){var config=app.metadata.getModule('Forecasts','config'),isSetup=(config&&config.is_setup);if(!isSetup){_.each(panels,function(panel){_.every(panel.fields,function(field,index){if(field.name=='commit_stage'){panel.fields[index]={'name':'spacer','label':field.label,'span':6,'readonly':true};return false;}
return true;},this);},this);}},createHistoryLog:function(oldestModel,newestModel,isRepWorksheet){var labels=[];if(_.isEmpty(oldestModel)){oldestModel=new Backbone.Model({best_case:0,likely_case:0,worst_case:0,date_entered:''});labels.push('LBL_COMMITTED_HISTORY_SETUP_FORECAST');}else{labels.push('LBL_COMMITTED_HISTORY_UPDATED_FORECAST');}
var fields=['worst','likely','best'],final=[],num_shown=0,config=app.metadata.getModule('Forecasts','config'),aclModule=(isRepWorksheet)?config.forecast_by:newestModel.module;_.each(fields,function(field){var fieldName=field+'_case';if(config['show_worksheet_'+field]&&app.acl.hasAccess('view',aclModule,null,fieldName)){var diff=this.getDifference(oldestModel,newestModel,fieldName);num_shown++;if(diff!=0){var direction=this.getDirection(diff);final.push(this.gatherLangArgsByParams(direction,this.getArrowDirectionSpan(direction),diff,newestModel,fieldName));labels.push('LBL_COMMITTED_HISTORY_'+field.toUpperCase()+'_CHANGED');}else{final.push([]);labels.push('LBL_COMMITTED_HISTORY_'+field.toUpperCase()+'_SAME');}}},this);var lang_string_key='LBL_COMMITTED_HISTORY_'+num_shown+'_SHOWN',hb=Handlebars.compile('{{{str key module args}}}');final=this.parseArgsAndLabels(final,labels);var text=hb({'key':lang_string_key,'module':'Forecasts','args':final});return{'text':new Handlebars.SafeString(text),'text2':app.date(newestModel.get('date_modified')).formatUser(false,app.user)};},gatherLangArgsByParams:function(dir,arrow,diff,model,attrStr){return{'direction':new Handlebars.SafeString(app.lang.get(dir,'Forecasts')+arrow),'from':app.currency.formatAmountLocale(Math.abs(diff)),'to':app.currency.formatAmountLocale(model.get(attrStr))};},getArrowDirectionSpan:function(directionClass){return directionClass=='LBL_UP'?'&nbsp;<i class="sicon sicon-arrow-up font-green"></i>':directionClass=='LBL_DOWN'?'&nbsp;<i class="sicon sicon-arrow-down font-red"></i>':'';},getForecastType:function(isManager,showOpps){return(!showOpps&&isManager)?'Rollup':'Direct';},parseArgsAndLabels:function(argsArray,labels){var retArgs={},argsKeys=['first','second','third'],hb=Handlebars.compile('{{{str key module args}}}');if((argsArray.length+1)!=labels.length){var msg='ForecastsUtils.parseArgsAndLabels() :: '+'argsArray and labels params are not the same length';app.logger.error(msg);return null;}
retArgs.intro=hb({'key':_.first(labels),'module':'Forecasts','args':[]});labels=_.last(labels,labels.length-1);_.each(labels,function(label,index){retArgs[argsKeys[index]]=hb({'key':label,'module':'Forecasts','args':argsArray[index]});});return retArgs;},getDifference:function(oldModel,newModel,attr){return(app.math.isDifferentWithPrecision(newModel.get(attr),oldModel.get(attr)))?app.math.getDifference(newModel.get(attr),oldModel.get(attr)):0;},getDirection:function(difference){return difference>0?'LBL_UP':(difference<0?'LBL_DOWN':'');},getSubpanelList:function(module){var list={},subpanels=app.metadata.getModule(module),comps;if(subpanels&&subpanels.layouts){subpanels=subpanels.layouts.subpanels;if(subpanels&&subpanels.meta){if(subpanels.meta.dynamic){comps=this.getDynamicSubpanelList(module);if(comps&&comps.meta){comps=comps.meta.components||[];}}else{comps=subpanels.meta.components||[];}}}
if(comps){_.each(comps,function(comp){if(comp.context&&comp.context.link){list[comp.label]=comp.context.link;}else{app.logger.warning("Subpanel's subpanels.meta.components "
+"has component with no context or context.link");}});}
return list;},getDynamicSubpanelList:function(module){var dSubpanels=this.getDynamicSubpanelMetadata(module);return{meta:dSubpanels};},getDynamicSubpanelMetadata:function(module){var rels=app.metadata.get().relationships,fields=app.metadata.getModule(module).fields,modules=app.metadata.getModules(),comps=[],self=this;_.each(fields,function(fDefs,fName){var relModule,relDefName,spLabel;if(fDefs.type&&fDefs.type==='link'&&fDefs.relationship){relDefName=fDefs.relationship;if(self.hasDynamicSubpanelDef(rels,relDefName,module)){relModule=rels[relDefName].lhs_module;if(modules[relModule]){var layoutName='subpanel';if(modules[relModule].additionalProperties&&modules[relModule].additionalProperties.dynamic_subpanel_name){layoutName=modules[relModule].additionalProperties.dynamic_subpanel_name;}
comps.push({context:{link:fDefs.name},label:self.getDynamicSubpanelLabel(module,relModule),layout:layoutName});}}}});return{components:comps};},getDynamicSubpanelLabel:function(module,relModule){var lIndex='LBL_'+relModule.toUpperCase()+'_SUBPANEL_TITLE';var stackDef=[{key:'LBL_DEFAULT_SUBPANEL_TITLE',mod:relModule},{key:lIndex,mod:module},{key:lIndex,mod:relModule},{key:'LBL_MODULE_NAME',mod:relModule}];var label;for(var i in stackDef){if(label=app.lang.getModString(stackDef[i].key,stackDef[i].mod)){return label;}}
return relModule;},hasDynamicSubpanelDef:function(rels,relDefName,module){return rels[relDefName]&&rels[relDefName].dynamic_subpanel&&rels[relDefName].lhs_module&&rels[relDefName].rhs_module&&rels[relDefName].rhs_module===module;},isRequiredLink:function(module,link){var relatedFields=app.data.getRelateFields(module,link),requiredField=_.some(relatedFields,function(field){return field.required===true;},this);return requiredField;},_tableColumnsConfigKeyMapManager:{'likely_case':'show_worksheet_likely','likely_case_adjusted':'show_worksheet_likely','best_case':'show_worksheet_best','best_case_adjusted':'show_worksheet_best','worst_case':'show_worksheet_worst','worst_case_adjusted':'show_worksheet_worst'},_tableColumnsConfigKeyMapRep:{'likely_case':'show_worksheet_likely','best_case':'show_worksheet_best','worst_case':'show_worksheet_worst'},getColumnVisFromKeyMap:function(key,viewName){var moduleMap={'forecastsWorksheet':'rep','forecastsWorksheetTotals':'rep','forecastsWorksheetManager':'mgr','forecastsWorksheetManagerTotals':'mgr'},whichKeyMap,keyMap,returnValue;whichKeyMap=moduleMap[viewName];keyMap=(whichKeyMap==='rep')?this._tableColumnsConfigKeyMapRep:this._tableColumnsConfigKeyMapManager;returnValue=app.metadata.getModule('Forecasts','config')[keyMap[key]];if(!_.isUndefined(returnValue)){returnValue=returnValue==1}else{returnValue=true;}
return returnValue;},getSelectedUsersReportees:function(selectedUser,context){if(selectedUser.is_manager){if(_.isUndefined(selectedUser.reportees)){selectedUser.reportees=[];}
var url=app.api.buildURL('Users','filter'),post_args={"filter":[{'reports_to_id':selectedUser.id,'status':'Active'}],'fields':'full_name','max_num':1000},options={};options.success=_.bind(function(resp,status,xhr){_.each(resp.records,function(user){selectedUser.reportees.push({id:user.id,name:user.full_name});});this.set({selectedUser:selectedUser,forecastType:app.utils.getForecastType(selectedUser.is_manager,selectedUser.showOpps)});},context);app.api.call("create",url,post_args,options);}else{context.set({selectedUser:selectedUser,forecastType:app.utils.getForecastType(selectedUser.is_manager,selectedUser.showOpps)});}},checkForecastConfig:function(){var forecastConfigOK=true,cfg=app.metadata.getModule('Forecasts','config')||{},salesWonVals=cfg.sales_stage_won,salesLostVals=cfg.sales_stage_lost,salesWonLostVals=cfg.sales_stage_won.concat(cfg.sales_stage_lost),domVals=app.lang.getAppListStrings('sales_stage_dom');if(salesWonVals.length==0||salesLostVals.length==0||_.isEmpty(domVals)){forecastConfigOK=false;}else{forecastConfigOK=_.every(salesWonLostVals,function(val){return(val!=''&&_.has(domVals,val));},this);}
return forecastConfigOK;},isTouchDevice:function(){return Modernizr.touch;},customBuildRoute:function(moduleOrContext,id,action,inBwc){var module,moduleMeta;if(_.isEmpty(moduleOrContext)){return'';}
if(_.isString(moduleOrContext)){module=moduleOrContext;}else{module=moduleOrContext.get('module');}
if(_.isEmpty(module)||!app.bwc){return'';}
moduleMeta=app.metadata.getModule(module)||{};if(inBwc===false||(_.isUndefined(inBwc)&&!moduleMeta.isBwcEnabled)){return'';}
return app.bwc.buildRoute(module,id,app.bwc.getAction(action));},addIframeMark:function(url){var parts=url.split('?');if(parts[1]&&parts[1].indexOf('bwcFrame=1')!=-1)return url;return parts[0]+'?'+(parts[1]?parts[1]+'&bwcFrame=1':'bwcFrame=1');},rmIframeMark:function(url){var parts=url.split('?');if(!parts[1]){return url;}
return parts[0]+'?'+_.reduce(parts[1].split('&'),function(acc,item){if(item=='bwcFrame=1'){return acc;}else{return acc?acc+'&'+item:item;}},'');},getSubpanelCollection:function(ctx,module){var retCollection=undefined,mdl=_.find(ctx.children,function(child){return(child.get('module')==module);});if(mdl&&_.has(mdl.attributes,'collection')){retCollection=mdl.get('collection');}
return retCollection;},getRecordName:function(model){var metadata=app.metadata.getModule(model.module)||{};var format;var name;if(!_.isEmpty(metadata.nameFormat)){format=app.user.getPreference('default_locale_name_format')||'s f l';name=app.utils.formatNameModel(model.module,model.attributes,format);}else if(model.module==='Documents'&&model.has('document_name')){name=model.get('document_name');}
return name||model.get('full_name')||model.get('name')||'';},getEmailAddress:function(model,options){var addresses;options||(options={});addresses=model.get('email');return _.chain(addresses).findWhere(options).pick('email_address').values().first().value()||'';},getPrimaryEmailAddress:function(model){return app.utils.getEmailAddress(model,{primary_address:true,invalid_email:false})||app.utils.getEmailAddress(model,{invalid_email:false});},resolve409Conflict:function(error,model,callback){app.drawer.open({layout:'resolve-conflicts',context:{dataInDb:error.payload.record,modelToSave:model}},callback);},getForecastNotSetUpMessage:function(isAdmin){var langKey=(isAdmin)?'LBL_DASHLET_FORECAST_NOT_SETUP_ADMIN':'LBL_DASHLET_FORECAST_NOT_SETUP',msg=app.lang.get(langKey,'Forecasts');if(isAdmin){var linkText=app.lang.get('LBL_DASHLET_FORECAST_CONFIG_LINK_TEXT','Forecasts');msg+='  <a href="#Forecasts/config">'+linkText+'</a>';}
return msg;},getFieldLabels:function(moduleName,fields){var moduleMeta=app.metadata.getModule(moduleName);var labels=[];_.each(_.flatten(fields),function(fieldName){var fieldMeta=moduleMeta.fields[fieldName];if(fieldMeta){labels.push(app.lang.get(fieldMeta.vname,moduleName));}});return labels;},getReadableFileSize:function(size){var i=-1;var units=['K','M','G','T'];if(_.isEmptyValue(size)||size<1){size=0;}else if(size<1000){size=1000;}
do{size=Math.round(size / 1000);i++;}while(size>=1000&&i<(units.length-1));return size+units[i];},getWindowLocationParameterByName:function(name,queryString){name=name.replace(/[\[]/,'\\[').replace(/[\]]/,'\\]');var regex=new RegExp('[\\?&]'+name+'=([^&#]*)','g'),matchResults=queryString.match(regex);if(matchResults&&matchResults.length>0){var results=regex.exec(matchResults[matchResults.length-1]);}
return(results===undefined||results===null)?'':decodeURIComponent(results[1].replace(/\+/g,' '));},isTruthy:function(value){if(_.isString(value)){value=value.toLowerCase();}
return value===true||value==='true'||value===1||value==='1'||value==='on'||value==='yes';},getFullnameFieldComponents:function(model,format){var components=[];var nameDef=model.fields.name;if(!nameDef){return components;}
if(nameDef.type==='fullname'){format=format||app.user.getPreference('default_locale_name_format');var metadata=app.metadata.getModule(model.module)||{fields:{}};var formatMap=metadata.nameFormat||{};if(_.isEmpty(formatMap)){return['name'];}
_.each(format.split(''),function(letter){if(formatMap[letter]){components.push(formatMap[letter]);}});return components;}else if(nameDef.fields){return nameDef.fields;}
return['name'];},isNameErased:function(model){var erasedFields=model.get('_erased_fields');if(_.isEmpty(erasedFields)){return false;}
var nameComponents=this.getFullnameFieldComponents(model);var anyNameFieldErased=_.some(nameComponents,function(field){return _.contains(erasedFields,field);});return anyNameFieldErased&&_.every(nameComponents.concat('name'),function(field){return!model.get(field);});},openEmailCreateDrawer:function(layout,data,onClose){var context={create:true,module:'Emails'};data=data||{};if(data.model&&data.model instanceof app.Bean&&data.model.module===context.module){context.model=data.model;}else{context.model=app.data.createBean(context.module);}
data=_.omit(data,'model');data=prepopulateEmailForCreate(context.model,data);context=_.extend(data,context);app.drawer.open({layout:layout,context:context},onClose);},getLinksBetweenModules:function(primaryModule,relatedModule){var fields=app.metadata.getModule(primaryModule).fields;return _.chain(fields).filter(function(field){return field.type&&field.type==='link';}).filter(function(link){return app.data.getRelatedModule(primaryModule,link.name)===relatedModule;},this).value();},getSiteUrl:function(){var origin;if(app.config.siteUrl){return app.config.siteUrl;}
if(window.location.origin){origin=window.location.origin;}else{origin=window.location.protocol+'//'+
window.location.hostname+
(window.location.port?':'+window.location.port:'');}
return origin+window.location.pathname;},getProbabilityBySalesStage:function(salesStage){var cfg=app.metadata.getModule('Forecasts','config');var salesProb=0;if(!cfg.is_setup){return salesProb;}
salesProb=app.lang.getAppListStrings('sales_probability_dom');return salesProb[salesStage];},getCommitStageBySalesStage:function(salesStage){var cfg=app.metadata.getModule('Forecasts','config');var stage='';if(!cfg.is_setup){return stage;}
var probability=app.utils.getProbabilityBySalesStage(salesStage);var ranges=cfg[cfg.forecast_ranges+'_ranges'];_.find(ranges,function(range,index){if(probability>=range.min&&probability<=range.max){stage=index;return true;}
return false;});return stage;},isPasswordRuleSet:function(passwordRule){if(_.isString(passwordRule)){return(!isNaN(passwordRule)&&parseInt(passwordRule,10)>0)?true:false;}
return passwordRule;},validatePassword:function(password){var passwordSetting=app.config.passwordsetting||{};var invalidPassword={isValid:false,error:'',};if(password&&passwordSetting){if(app.utils.isPasswordRuleSet(passwordSetting.maxpwdlength)&&password.length>passwordSetting.maxpwdlength){invalidPassword.error+='<li>'+app.utils.formatString(app.lang.get('LBL_PASSWORD_MAX_LENGTH'),[passwordSetting.maxpwdlength])+'</li>';}
if(app.utils.isPasswordRuleSet(passwordSetting.minpwdlength)&&password.length<passwordSetting.minpwdlength){invalidPassword.error+='<li>'+app.utils.formatString(app.lang.get('LBL_PASSWORD_MIN_LENGTH'),[passwordSetting.minpwdlength])+'</li>';}
if(app.utils.isPasswordRuleSet(passwordSetting.onenumber)&&!(/\d+/).test(password)){invalidPassword.error+='<li>'+app.lang.get('LBL_PASSWORD_ONE_NUMBER')+'</li>';}
if(app.utils.isPasswordRuleSet(passwordSetting.onelower)&&!(/[a-z]/).test(password)){invalidPassword.error+='<li>'+app.lang.get('LBL_PASSWORD_ONE_LOWERCASE')+'</li>';}
if(app.utils.isPasswordRuleSet(passwordSetting.oneupper)&&!(/[A-Z]/).test(password)){invalidPassword.error+='<li>'+app.lang.get('LBL_PASSWORD_ONE_UPPERCASE')+'</li>';}
if(app.utils.isPasswordRuleSet(passwordSetting.onespecial)&&!(/[~!@#$%^&*()_+\-={}|]/).test(password)){invalidPassword.error+='<li>'+app.lang.get('LBL_PASSWORD_ONE_SPECIAL_CHAR')+'</li>';}
if(_.isString(passwordSetting.customregex)&&passwordSetting.customregex.length>0){var regex=new RegExp(passwordSetting.customregex);if(regex.test(password)){invalidPassword.error+='<li>'+app.utils.formatString(app.lang.get('LBL_PASSWORD_REGEX_REQUIREMENT'),[passwordSetting.customregex])+'</li>';}}
if(invalidPassword.error){invalidPassword.error='<ul>'+invalidPassword.error+'</ul>';return invalidPassword;}}
return{isValid:true,error:''};},createUserSrn:function(userId){let srnParts=app.config.tenant.split(':').slice(0,5);srnParts.splice(3,1,'');srnParts.push('user',userId);return srnParts.join(':');},getUnderscoreToCamelCaseString:function(str){return str.replace(/_(\D)/g,function(a,b){return b.toUpperCase();});},kebabToCamelCase:function(str){str=str.split('-').map(_.bind(function(a,i){return i===0?a:this.capitalize(a);},this)).join('');return str;},maps:{arrayToObject:function(array){if(!_.isArray(array)||_.isEmpty(array)){return{};}
return array.reduce(function reduceArray(obj,item){const fieldName=Object.keys(item).pop();obj[fieldName]=item[fieldName];return obj;});},isMapsModuleEnabled:function(module){if(!_.has(app.config,'maps')){return false;}
if(!_.has(app.config.maps,'enabled_modules')){return false;}
const allowedModules=app.config.maps.enabled_modules;return _.contains(allowedModules,module);}},reports:{getDataSeries:function(dataSeries){if(!_.isString(dataSeries)){return false;}
const dataSeriesParts=dataSeries.split(':');if(!dataSeriesParts||dataSeriesParts.length<=1){return false;}
const groupFunction=dataSeriesParts.pop();let fieldName;let tableKey;if(groupFunction==='count'){fieldName='id';}else{fieldName=dataSeriesParts.pop();}
tableKey=dataSeriesParts.join(':');return{fieldName,tableKey,groupFunction,};},hasAccessToAllReport:function(model,typeOfAction='view'){if(!_.isObject(model)){return true;}
let hasAccess=true;const content=model.get?model.get('content'):model.content;const reportDef=app.utils.tryParseJSONObject(content);if(!reportDef){return hasAccess;}
if(!app.acl.hasAccess(typeOfAction,reportDef.module)){hasAccess=false;return hasAccess;}
const displayColumnsKey='display_columns';const summaryColumnsKey='summary_columns';const tableListKey='full_table_list';const tableKey='table_key';const tables=reportDef[tableListKey];const displayColumns=reportDef[displayColumnsKey]||[];const summaryColumns=reportDef[summaryColumnsKey]||[];if(!tables){return hasAccess;}
const fields=displayColumns.concat(summaryColumns);_.each(fields,function checkACL(fieldData){const tableName=fieldData[tableKey];const fieldName=fieldData.name;const module=tables[tableName].module;const bean=app.data.createBean(module);const accessToField=app.acl.hasAccessToModel(typeOfAction,bean,fieldName);const accessToModule=app.acl.hasAccess(typeOfAction,module);if(!accessToField||!accessToModule){hasAccess=false;}},this);return hasAccess;},},isFieldAlwaysReadOnly:function(fieldDef,viewDef){if(_.isUndefined(viewDef)||_.isUndefined(viewDef.readonly)){return app.utils.isTruthy(fieldDef.readonly)&&_.isUndefined(fieldDef.readonly_formula);}else{return app.utils.isTruthy(viewDef.readonly);}},updatePendoMetadata:function(addCustomFieldToVisitor,addCustomFieldToAccount){var pendoObject=app.analytics.connectors.Pendo.getPendoMetadata();var updatedVisitorObject=addCustomFieldToVisitor?_.extend(pendoObject.visitor,addCustomFieldToVisitor):pendoObject.visitor;var updatedAccountObject=addCustomFieldToAccount?_.extend(pendoObject.account,addCustomFieldToAccount):pendoObject.account;pendo.updateOptions({visitor:updatedVisitorObject,account:updatedAccountObject});},openFocusDrawer:function(focusDrawer,module,modelId){if(focusDrawer&&module&&modelId){var context={layout:'row-model-data',context:{layout:'focus',module:module,modelId:modelId}};if(focusDrawer.isOpen()&&_.isEqual(context,focusDrawer.currentContextDef)){return;}
focusDrawer.open(context,null,focusDrawer.isOpen());}},deleteFileFromField:function(field,data,shouldRender){callbacks={success:function(){field.model.set(data.field,'');field.model.save({},{showAlerts:{'process':true,'success':{messages:app.lang.get('LBL_FILE_DELETED')}},fields:[data.field]});if(self.disposed){return;}
if(shouldRender){field.render();}},error:function(data){app.error.handleHttpError(data,{});}};app.api.file('delete',data,null,callbacks,{htmlJsonFormat:false});},isRliFieldValidForCascade:function(model,fieldName,attrs){const getValue=fieldName=>{if(attrs&&attrs[fieldName]){return attrs[fieldName];}
return model.get(fieldName);};if(fieldName==='service_start_date'){return app.utils.isTruthy(getValue('service'));}
if(['service_duration_value','service_duration_unit'].includes(fieldName)){return app.utils.isTruthy(getValue('service'))&&_.isEmpty(getValue('add_on_to_id'))&&!app.utils.isTruthy(getValue('lock_duration'));}
if(fieldName==='commit_stage'){if(!app.acl.hasAccess('access','Forecasts')){return false;}
let forecastConfig=app.metadata.getModule('Forecasts','config');let closedSalesStages=[...forecastConfig.sales_stage_won,...forecastConfig.sales_stage_lost];return!closedSalesStages.includes(getValue('sales_stage'));}
return true;},DocumentMerge:{openHelpDocumentation:function(module){const serverInfo=app.metadata.getServerInfo();const version=encodeURIComponent(serverInfo.version);const edition=encodeURIComponent(serverInfo.flavor);const lang=encodeURIComponent(app.lang.getLanguage());const products=app.user.getProductCodes().join(',');const key=encodeURIComponent(App.metadata.getConfig().uniqueKey);const devStatus=encodeURIComponent(this.getVersionStatus(version));const url=`http://www.sugarcrm.com/crm/product_doc.php?edition=${edition}&
                    version=${version}&lang=${lang}&module=${module}&products=${products}
                    &status=${devStatus}&key=${key}&help_action=`;window.open(url);},getVersionStatus:function(version){const matches=version.match('/^[\d\.]+?([a-zA-Z]+?)[\d]*?$/si');if(_.isArray(matches)&&!_.isEmpty(matches)){return(matches[1]).toUpperCase();}else{return'GA';}},TagBuilderFactory:function(type,name,attributes){this.type=type;this.name=name;this.attributes=attributes;this.getTagBuilder=function getTagBuilder(type){this.type=type||this.type;let tagBuilder=null;switch(this.type){case'base':tagBuilder=new BaseTagBuilder();break;case'collection':tagBuilder=new CollectionTagBuilder();break;case'directive':tagBuilder=new DirectiveTagBuilder();break;case'conditional':tagBuilder=new ConditionalTagBuilder();break;}
return tagBuilder;};function TagFactory(){this.getTag=function getTag(type){let tag=null;switch(type){case'base':tag=new Tag();break;case'directive':tag=new DirectiveTag();break;case'conditional':tag=new ConditionalTag();break;case'collection':tag=new CollectionTag();break;}
return tag;};};function Tag(){this.type=null;this.name=null;this.attributes=[];this.tagValue='';this.setName=function setName(baseName,relateName){this.name=baseName;if(relateName){this.name+='.'+relateName;}
return this;};this.setAttributes=function setAttributes(attributes){this.attributes=attributes;return this;};this.setAttribute=function setAttribute(attribute){_.extend(this.attributes,attribute);return this;};this.setTagValue=function(tagValue){this.tagValue=tagValue;return this;};this.getTagValue=function(){return this.tagValue;};this.getName=function(){return this.name;};this.getAttributes=function(){return this.attributes;};this.removeAttribute=function(attrName){delete this.attributes[attrName];};this.compile=function compile(){let attributes=this.getAttributes();let name=this.getName();let eachAttributes='';for(let attributeIndex in attributes){let attributeValue=attributes[attributeIndex];eachAttributes+=' '+attributeIndex+'=\''+attributeValue+'\'';}
this.setTagValue('{'+name+eachAttributes+'}');return this;};};function CollectionTag(){Tag.call(this);this.compile=function compile(){let attributes=this.getAttributes();let name=this.getName();let eachAttributes='';let fieldTags=this.getFields()||'';for(let attributeIndex in attributes){let attributeValue=attributes[attributeIndex];eachAttributes+=' '+attributeIndex+'=\''+attributeValue+'\'';}
let startingCollectionTag=`{#${name} ${eachAttributes}}`;let endingCollectionTag=`{/${name}}`;this.setCollectionTags(startingCollectionTag,endingCollectionTag);this.setTagValue(startingCollectionTag+fieldTags+endingCollectionTag);return this;};this.setCollectionTableFields=function(fieldName,fieldLabel){let field={name:`{${fieldName}}`,label:fieldLabel,};this.collectionTags.fields=this.collectionTags.fields||[];this.collectionTags.fields.push(field);return this;};this.setCollectionTags=function(startingCollectionTag,endingCollectionTag){this.fieldTags={};this.collectionTags={startingCollectionTag:startingCollectionTag,endingCollectionTag:endingCollectionTag,};return this;};this.getCollectionTags=function(){return this.collectionTags;};this.setFields=function setFields(fields){this.fieldTags='';for(let field of fields){this.fieldTags=this.fieldTags+'{'+field+'}';}
return this;};this.getFields=function getFields(){return this.fieldTags;};};function DirectiveTag(){Tag.call(this);this.compile=function compile(){let attributes=this.getAttributes();let name=this.getName();let eachAttributes='';for(let attributeIndex in attributes){let attributeValue=attributes[attributeIndex];eachAttributes+=' '+attributeIndex+'=\''+attributeValue+'\'';}
this.setTagValue('{!'+name+eachAttributes+'}');return this;};};function ConditionalTag(){Tag.call(this);this.compile=function compile(){let attributes=this.getAttributes();let tag='';for(let key in attributes){if(key==='if'||key==='else'){let data=attributes[key];tag+='{'+key+' '+data.condition+'}'+data.result;}
if(key==='elseifs'){for(let elseif of attributes[key]){tag+='{elseif '+elseif.condition+'}'+elseif.result;}}}
this.setTagValue(tag+'{endif}');return this;};};function BaseTagBuilder(name,attributes){this.name=name;this.attributes=attributes||{};this.tag=null;this.type=this.type||'base';this.newTag=function newTag(){let tagFactory=new TagFactory();this.tag=tagFactory.getTag(this.type);return this;};this.setName=function setName(name){this.tag.setName(name);return this;};this.setAttribute=function setAttribute(attribute){this.tag.setAttribute(attribute);return this;};this.setAttributes=function setAttributes(attributes){this.tag.setAttributes(attributes);return this;};this.get=function get(){return this.tag;};};function CollectionTagBuilder(name,attributes){BaseTagBuilder.call(this,name,attributes);this.type='collection';this.collectionTags={startingCollectionTag:'',endingCollectionTag:'',fields:[]};this.setName=function(name){this.tag.setName('#'+name);return this;};};function DirectiveTagBuilder(name,attributes){this.type='directive';this.setName=function(name){this.tag.setName('!'+name);return this;};BaseTagBuilder.call(this,name,attributes);};function ConditionalTagBuilder(name,attributes){BaseTagBuilder.call(this,name,attributes);this.type='conditional';};},},isDarkMode:function(parent=false){let bodyHasDarkModeClass=null;if(app.utils.isTruthy(parent)){bodyHasDarkModeClass=window.parent.document.body.classList.contains('sugar-dark-theme');}else{bodyHasDarkModeClass=document.body.classList.contains('sugar-dark-theme');}
return bodyHasDarkModeClass||localStorage.getItem('last_appearance_preference')==='dark';},isWhiteColor:function(color){color=color.substring(1);var rgb=parseInt(color,16);var r=(rgb>>16)&0xff;var g=(rgb>>8)&0xff;var b=(rgb>>0)&0xff;var luma=0.2126*r+0.7152*g+0.0722*b;if(luma<100){return false;}
return true;},tryParseJSONObject:function(jsonString){try{const response=JSON.parse(jsonString);if(response&&_.isObject(response)){return response;}}
catch(e){}
return false;},});});})(SUGAR.App);