(function(app){app.events.on("app:init",function(){Handlebars.registerHelper('moduleIconLabel',function(module){return app.lang.getModuleIconLabel(module);});Handlebars.registerHelper('moduleIconToolTip',function(module){return app.lang.getModuleName(module);});Handlebars.registerHelper('getDDLabel',function(value,key){return app.lang.getAppListStrings(key)[value]||value;});Handlebars.registerHelper('subViewTemplate',function(key,data,options){var frame,template;template=app.template.getView(key,options.hash.module);frame=_.extend(Handlebars.createFrame(options.data||{}),options.hash);return template?template(data,{data:frame}):'';});Handlebars.registerHelper('subFieldTemplate',function(fieldName,view,data,options){var frame,template;template=app.template.getField(fieldName,view,options.hash.module);frame=_.extend(Handlebars.createFrame(options.data||{}),options.hash);return template?template(data,{data:frame}):'';});Handlebars.registerHelper('subLayoutTemplate',function(key,data,options){var frame,template;template=app.template.getLayout(key,options.hash.module);frame=_.extend(Handlebars.createFrame(options.data||{}),options.hash);return template?template(data,{data:frame}):'';});Handlebars.registerHelper('buildUrl',function(options){return new Handlebars.SafeString(app.utils.buildUrl(options.hash.url));});Handlebars.registerHelper('loading',function(str,options){str=app.lang.get(str);var cssClass=['loading'];if(_.isString(options.hash.cssClass)){cssClass=_.unique(cssClass.concat(Handlebars.Utils.escapeExpression(options.hash.cssClass).split(' ')));}
return new Handlebars.SafeString('<div class="'+cssClass.join(' ')+'">'
+Handlebars.Utils.escapeExpression(str)
+'<i class="l1">&#46;</i><i class="l2">&#46;</i><i class="l3">&#46;</i>'
+'</div>');});Handlebars.registerHelper('decoratedField',function(type,view,options){var def={type:type,field:this};var field=app.view.createField({type:type,def:def,viewDefs:def,view:view,model:options.hash.model,viewName:options.hash.template,});if(options.hash.parent&&_.isArray(options.hash.parent.fields)){options.hash.parent.fields.push(field);}
return field.getPlaceholder();});Handlebars.registerHelper('timeAgo',function(str,options){return moment?moment.utc(str).fromNow():str;});Handlebars.registerHelper('or',function(){for(let i=0;i<arguments.length-1;i++){if(!!arguments[i]){return true;}}
return false;});Handlebars.registerHelper('times',function(n,block){let accum='';for(let i=0;i<n;i++){accum+=block.fn(i);}
return accum;});Handlebars.registerHelper('buildIcon',function(iconClass){return iconClass.includes('sicon')?`sicon ${iconClass}`:`fa ${iconClass}`;});Handlebars.registerHelper('moduleLabel',function(module,size,options){let contents='';let attributes=_.clone(options.hash)||{};attributes.class=attributes.class?`${attributes.class} label label-module`:'label label-module';size=_.contains(['sm','lg'],size)?size:'sm';attributes.class+=` label-module-size-${size}`;let moduleMeta=app.metadata.getModule(module)||{};let color=moduleMeta.color||'ocean';attributes.class+=` label-module-color-${color}`;if(moduleMeta.display_type==='abbreviation'){contents=app.lang.getModuleIconLabel(module);}else{let icon=moduleMeta.icon||'sicon-default-module-lg';attributes.class+=` sicon ${icon}`;}
attributes=_.reduce(attributes,function(string,value,key){return`${string} ${key}="${value}"`;},'');return new Handlebars.SafeString(`<span ${attributes.trim()}>${contents.trim()}</span>`);});Handlebars.registerHelper('moduleLabelContainer',function(module,size){let moduleMeta=app.metadata.getModule(module)||{};let color=moduleMeta.color||'ocean';size=_.contains(['sm','lg'],size)?size:'sm';return`label label-module label-module-size-${size} label-module-color-${color}`;});Handlebars.registerHelper('reportField',function(view,options){const parentModel=options.hash.model;const index=options.hash.index;const html=options.hash.html;const model=parentModel.get(index);let self=this;try{self=app.utils.deepCopy(this);}catch(e){}
if(_.isEmpty(model.get('id'))&&self.link){self.type='text';self.link=false;}
if(self.type==='currency'){self.showTransactionalAmount=false;self.skip_preferred_conversion=true;}
const field=SUGAR.App.view.createField({def:self,viewDefs:self,view:view,model:model,viewName:options.hash.template});if(options.hash.parent&&_.isArray(options.hash.parent.fields)){options.hash.parent.fields.push(field);}
if(html){if(field.type==='enum'){if(_.has(self,'options')){field.items=app.lang.getAppListStrings(self.options);}else if(_.has(self,'function')&&!_.isUndefined(view.data.functionOptions)&&!_.isUndefined(view.data.functionOptions[self.function])){field.items=view.data.functionOptions[self.function];}}
field.render();if(field.type==='image'&&field.value){field.resizeWidget();}
return field.$el.html();}
return field.getPlaceholder();});});})(SUGAR.App);