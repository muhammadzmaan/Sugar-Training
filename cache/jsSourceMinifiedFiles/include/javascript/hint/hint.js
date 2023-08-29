(function(app){var hint=(function(){var getPanelDefinitionFieldsByName;setDefaultValuesForFields=function(field,module){switch(field.name){case'hint_account_website':return'www.example.net';case'account_name':return'Example Corp';case'full_name':return'Jon Doe';case'title':return'President';default:return field.label;}};getPanelDefinitionFieldsByName=function(module,panelName){var fields=[];var viewName=module.toLowerCase()==='accounts'?'stage2-account-preview':'stage2-preview';var refPanels=app.metadata.get(module).views[viewName].meta.panels;var panels=JSON.parse(JSON.stringify(refPanels));_.each(panels,function(panel){if(panel.name!==panelName){return;}
_.each(panel.fields,function(field){field.label=app.lang.get(field.label,module);field.value=setDefaultValuesForFields(field,module);if(field.label){fields.push(field);}});});return fields;};return{getAllFieldsForView:function(module){var fields={};var allFields=this.getModuleFieldsAvailableForSelection(module);_.each(allFields,function(field){field.value=setDefaultValuesForFields(field,module);fields[field.name]=field;});return fields;},getModuleFieldsAvailableForSelection:function(module){var fields=[];var refPanels=App.metadata.getModule(module).views.record.meta.panels;var panels=JSON.parse(JSON.stringify(refPanels));_.each(panels,function(panel){_.each(panel.fields,function(field){if(typeof(field.readonly)!=='undefined'&&field.readonly){return;}
if(!field.label||field.label===''){console.log('Missing field for label: '+field.name);return;}
field.label=app.lang.get(field.label,module);fields.push(field);});});if(module=='Accounts'){var allDefaultFields=this.getAccountDefaultBasicPanelFields().concat(this.getAccountDefaultExpandedPanelFields());}else{var allDefaultFields=this.getPeopleDefaultBasicPanelFields(module).concat(this.getPeopleDefaultExpandedPanelFields(module));}
var allFieldsWithDups=_.union(fields,allDefaultFields);fields=_.uniq(allFieldsWithDups,false,function(item){return item.name;});fields=_.sortBy(fields,function(f){return f.label;});return fields;},getPanelFieldsFromConfiguration:function(module,panelType,defaultPanel,otherPanel){var metdata=app.modules.metadata.getModule(module);if(metdata&&metdata.config&&typeof(metdata.config.hintConfig)!=='undefined'&&typeof(metdata.config.hintConfig[panelType])!=='undefined'){var panelFields=[];var fieldDefinitions=this.getAllFieldsForView(module);var savedFields=metdata.config.hintConfig[panelType];for(var $x=0;$x<savedFields.length;$x++){var fieldName=savedFields[$x];var existsInBasicPanel=_.find(defaultPanel,function(field){return field.name==fieldName;});if(existsInBasicPanel){panelFields.push(existsInBasicPanel);continue;}
var existsInOtherPanel=_.find(otherPanel,function(field){return field.name==fieldName;});if(existsInOtherPanel){panelFields.push(existsInOtherPanel);continue;}
if(fieldDefinitions[fieldName]){panelFields.push(fieldDefinitions[fieldName]);}}
if(module=='Accounts'){var allDefaultFields=this.getAccountDefaultBasicPanelFields().concat(this.getAccountDefaultExpandedPanelFields());var allDefaultFieldsByKey={};_.each(allDefaultFields,function(field){allDefaultFieldsByKey[field.name]=field;});var attributesToCopy=['person_name','person_label'];_.each(panelFields,function(field){var fieldDefaultPanelDefinition=allDefaultFieldsByKey[field.name];if(fieldDefaultPanelDefinition){for(var x=0;x<attributesToCopy.length;x++){var key=attributesToCopy[x];if(typeof(fieldDefaultPanelDefinition[key])!=='undefined'){field[key]=fieldDefaultPanelDefinition[key];}}}});}
if(panelType==='expanded'){var excludedFields=['name','website'];panelFields=_.reduce(excludedFields,function(fields,fieldName){return _.without(fields,_.findWhere(fields,{name:fieldName}));},panelFields);}
return panelFields;}else{return defaultPanel;}},getFieldDefinitionFromDefaultPanel:function(module,fieldName){var refAccountMetadata=app.metadata.getView(null,'stage2-account-preview').panels;var refPeopleMetadata=app.metadata.getView(null,'stage2-preview').panels;var accountMetadata=JSON.parse(JSON.stringify(refAccountMetadata));var peopleMetadata=JSON.parse(JSON.stringify(refPeopleMetadata));var metadataToParse=module=='Accounts'?accountMetadata:peopleMetadata;var result=false;_.every(metadataToParse,function(panel){result=_.find(panel.fields,function(field){return field.name&&field.name==fieldName;});return!result;});return result;},getPanelMetadata:function(module){var originalModule=SUGAR.App.sideDrawer&&SUGAR.App.sideDrawer.isOpen()?SUGAR.App.sideDrawer._components[0].module:SUGAR.App.controller.layout.model.module;var isPersonOrientedModule=!_.includes(['Accounts','Administration'],originalModule);var panelToMapping={'company_info':this.getAccountBasicPanelFields(),'company_extended':this.getAccountExpandedPanelFields(),'contacts_basic':this.getPeopleBasicPanelFields(module),'contacts_extended':this.getPeopleExpandedPanelFields(module)};var refAccountMetadata=app.metadata.getView(null,'stage2-account-preview').panels;var refPeopleMetadata=app.metadata.getView(null,'stage2-preview').panels;var accountMetadata=JSON.parse(JSON.stringify(refAccountMetadata));var peopleMetadata=JSON.parse(JSON.stringify(refPeopleMetadata));var metdataToParse=module=='Accounts'?accountMetadata:peopleMetadata;for(var x=0;x<metdataToParse.length;x++){var tmpPanel=metdataToParse[x];if(panelToMapping[tmpPanel.name]){tmpPanel.fields=panelToMapping[tmpPanel.name];if(module=='Contacts'||module=='Leads'){var phoneWorkFieldIndex=_.findIndex(tmpPanel.fields,function(f){return f.name=='phone_work';});var educationIndex=_.findIndex(tmpPanel.fields,function(f){return f.name=='hint_education';});var secondEducationIndex=_.findIndex(tmpPanel.fields,function(f){return f.name=='hint_education_2';});if(educationIndex>=0&&secondEducationIndex<0){tmpPanel.fields.splice(++educationIndex,0,this.getFieldDefinitionFromDefaultPanel(module,'hint_education_2'));}
if(tmpPanel.name=='company_extended'||tmpPanel.name=='company_info'){_.each(tmpPanel.fields,function(field){if(typeof(field.person_name)!=='undefined'){field.name=field.person_name;}
if(field.name==='annual_revenue'&&isPersonOrientedModule){field.name='hint_account_annual_revenue';}
if(typeof(field.person_label)!=='undefined'){field.label=field.person_label;}});}}
_.each(tmpPanel.fields,function(field){if(field.name==='sic_code'&&originalModule==='Accounts'){field.name='hint_account_sic_code_label';}});}}
return metdataToParse;},getPeopleDefaultBasicPanelFields:function(module){var fields=getPanelDefinitionFieldsByName(module,'contacts_basic');return this.filterPersonPanelFields(fields);},getPeopleDefaultExpandedPanelFields:function(module){var fields=getPanelDefinitionFieldsByName(module,'contacts_extended');return this.filterPersonPanelFields(fields);},getAccountDefaultBasicPanelFields:function(){return getPanelDefinitionFieldsByName('accounts','company_info');},getAccountDefaultExpandedPanelFields:function(){return getPanelDefinitionFieldsByName('accounts','company_extended');},getAccountBasicPanelFields:function(){var module='Accounts';var panelType='basic';var defaultPanel=this.getAccountDefaultBasicPanelFields();var otherPanel=this.getAccountDefaultExpandedPanelFields();return this.getPanelFieldsFromConfiguration(module,panelType,defaultPanel,otherPanel);},getAccountExpandedPanelFields:function(){var module='Accounts';var panelType='expanded';var defaultPanel=this.getAccountDefaultExpandedPanelFields();var otherPanel=this.getAccountDefaultBasicPanelFields();return this.getPanelFieldsFromConfiguration(module,panelType,defaultPanel,otherPanel);},getPeopleExpandedPanelFields:function(module){var panelType='expanded';var defaultPanel=this.getPeopleDefaultExpandedPanelFields(module);var otherPanel=this.getPeopleDefaultBasicPanelFields(module);var fields=this.getPanelFieldsFromConfiguration(module,panelType,defaultPanel,otherPanel);return this.filterPersonPanelFields(fields);},getPeopleBasicPanelFields:function(module){var panelType='basic';var defaultPanel=this.getPeopleDefaultBasicPanelFields(module);var otherPanel=this.getPeopleDefaultExpandedPanelFields(module);var fields=this.getPanelFieldsFromConfiguration(module,panelType,defaultPanel,otherPanel);return this.filterPersonPanelFields(fields);},filterPersonPanelFields:function(fields){fields=_.without(fields,_.findWhere(fields,{name:'hint_phone_1'}));fields=_.without(fields,_.findWhere(fields,{name:'hint_phone_2'}));return _.without(fields,_.findWhere(fields,{name:'hint_education_2'}));},getVisibleFieldsFromAllPannelsForDefaultSelection:function(module){var basicFields=[];var extendedFields=[];switch(module.toLowerCase()){case'accounts':basicFields=app.hint.getAccountBasicPanelFields();extendedFields=app.hint.getAccountExpandedPanelFields();break;default:basicFields=app.hint.getPeopleBasicPanelFields(module);extendedFields=app.hint.getPeopleExpandedPanelFields(module);}
return basicFields.concat(extendedFields);},getBasicViewDefaultFields:function(module){var panelMapping={'Accounts':{view:'stage2-account-preview',panelFields:['company_extended','company_info','company_header']},'Contacts':{view:'stage2-preview',panelFields:['panel_header','contacts_basic','contacts_extended']},'Leads':{view:'stage2-preview',panelFields:['panel_header','contacts_basic','contacts_extended']},};var fields=[];var panelName=panelMapping[module].view;var refPanels=app.metadata.get(module).views[panelName].meta.panels;var panels=JSON.parse(JSON.stringify(refPanels));if(panelName&&panels){_.each(panels,function(panel){if(_.contains(panelMapping[module].panelFields,panel.name)){fields=fields.concat(panel.fields);}});}
return fields;},getPanelsForHintEnrichFields:function(module){var panelMapping={'Accounts':{view:'stage2-account-preview',panelFields:['company_extended','company_info','company_header']},'Contacts':{view:'stage2-preview',panelFields:['panel_header','contacts_basic','contacts_extended']},'Leads':{view:'stage2-preview',panelFields:['panel_header','contacts_basic','contacts_extended']},};var fields=[];var results=[];var allfields=this.getModuleFieldsAvailableForSelection(module);var panelName=panelMapping[module].view;var refPanels=app.metadata.get(module).views[panelName].meta.panels;var panels=JSON.parse(JSON.stringify(refPanels));_.each(panels,function(panel){if(panel.fields){fields=fields.concat(panel.fields);}});for(let i=0;i<allfields.length;i++){if(allfields[i].name==='picture'){results.push(allfields[i]);}
for(var j=0;j<fields.length;j++){if(allfields[i].name===fields[j].name){results.push(allfields[i]);}}}
return results;},versionCompare:function(validSugarVersion,shouldDisplayLicenseErrMessage,sugarVersion){validSugarVersion=validSugarVersion||'9.1.0';sugarVersion=sugarVersion||app.metadata.getServerInfo().version;var isCreateDrawerOpen=app.drawer;if(!shouldDisplayLicenseErrMessage&&isCreateDrawerOpen&&!_.isEmpty(isCreateDrawerOpen._events.render[0].ctx._components)){return-1;}
if(validSugarVersion===sugarVersion){return 0;}
if(sugarVersion){var versionLimit=validSugarVersion.split('.');var currentSugarVerion=sugarVersion.split('.');var len=Math.min(versionLimit.length,currentSugarVerion.length);for(var i=0;i<len;i++){if(parseInt(versionLimit[i])>parseInt(currentSugarVerion[i])){return-1;}
if(parseInt(versionLimit[i])<parseInt(currentSugarVerion[i])){return 1;}}
if(versionLimit.length>currentSugarVerion.length){return-1;}
if(versionLimit.length<currentSugarVerion.length){return 1;}
return 1;}
return-1;},shouldUseOldHintPreview:function(modelName){var layout=SUGAR.App.sideDrawer&&SUGAR.App.sideDrawer.isOpen()?SUGAR.App.sideDrawer._components[0]:SUGAR.App.controller.layout;if(layout&&modelName){var isRecordViewlayoutType=layout.type==='record';var mainLayoutModuleName=layout.model.module;var modelName=modelName;if(!isRecordViewlayoutType){return true;}
return isRecordViewlayoutType&&(modelName!==mainLayoutModuleName);}},isSugarProSpecialCase:function(){var sugarFlavor=SUGAR.App.metadata.getServerInfo().flavor;return this.versionCompare('10.3.0',true)>=0&&sugarFlavor==='PRO';},deepFreeze:function(objToFreeze){var self=this;Object.keys(objToFreeze).forEach(function(prop){if(typeof objToFreeze[prop]==='object'&&!Object.isFrozen(objToFreeze[prop])){self.deepFreeze(objToFreeze[prop]);}});return Object.freeze(objToFreeze);},isHintUser:function(){return app.user.hasLicense('HINT');},isListView:function(){var layout=app.controller.layout;var isCreateDrawerActive=app.drawer.isActive();if((layout.type==='search')&&isCreateDrawerActive&&(this.versionCompare()<0)){return true;}
return false;},isDarkMode:function(){if(app.utils.isDarkMode()){return app.utils.isDarkMode();}
return false;},isEnrichedModel:function(module){var enrichedModules=['Leads','Contacts','Accounts'];return _.contains(enrichedModules,module);},};})();app.hint=hint;})(SUGAR.App);