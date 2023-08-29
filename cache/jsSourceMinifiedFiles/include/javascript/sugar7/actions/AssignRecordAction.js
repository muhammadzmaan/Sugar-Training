(function register(app){app.events.on('app:init',function init(){function AssignRecord(def){this.def=def;}
AssignRecord.prototype.fetchAndApplyChanges=function(model,updatedFields){let changes=model.changedAttributes();changes=_.omit(changes,_.keys(updatedFields));changes=_.omit(changes,['date_modified']);model.fetch({complete:function reapplyChanges(){model.set(changes);}});},AssignRecord.prototype.run=function(opts,currentExecution){let actionDef=this.def;let newUserId=actionDef.properties.id;let useUserName=actionDef.properties.name;let recordModel=opts.recordModel;if(!this.hasEditAccess(opts.recordModel)){app.alert.show('alert_no_access',{level:'error',title:app.lang.get('ERR_NO_VIEW_ACCESS_TITLE'),messages:app.lang.get('ERR_NO_VIEW_ACCESS_ACTION'),autoClose:true,autoCloseDelay:5000});currentExecution.nextAction();return;};let updatedFields={assigned_user_id:newUserId,assigned_user_name:useUserName};let patchModel=app.data.createBean(recordModel.module,_.assign({id:recordModel.get('id'),},updatedFields));patchModel.save({},{showAlerts:true,success:_.bind(function successSave(){this.fetchAndApplyChanges(recordModel,updatedFields);currentExecution.nextAction();},this),error:_.bind(function errorSave(){this.fetchAndApplyChanges(recordModel,updatedFields);currentExecution.nextAction();},this)});};AssignRecord.prototype.hasEditAccess=function(model){let hasAccess=app.acl.hasAccessToModel('edit',model)&&app.acl.hasAccessToModel('edit',model,'assigned_user_id')&&app.acl.hasAccessToModel('edit',model,'assigned_user_name');return hasAccess;};app.actions=app.actions||{};app.actions=_.extend(app.actions,{AssignRecord:AssignRecord});});})(SUGAR.App);