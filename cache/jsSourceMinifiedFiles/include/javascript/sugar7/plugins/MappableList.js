(function register(app){app.events.on('app:init',function init(){app.plugins.register('MappableList',['view'],{listMapView:null,onAttach:function(component,plugin){this.on('init',function registerActionrRunner(){this._injectMapButtons();return true;});},onDetach:function(){if(_.has(this,'layout')&&this.layout&&_.isFunction(this.layout.off)){this.layout.off('list:massmapdraw:fire',null,this);this.layout.off('list:massdirectionsfromuserdraw:fire',null,this);this.layout.off('list:massdirectionsfromrecorddraw:fire',null,this);}},delegateListFireEvents:function(){if(_.has(this,'layout')&&this.layout&&_.isFunction(this.layout.on)){this.layout.on('list:massmapdraw:fire',_.bind(this.handleDrawMap,this));this.layout.on('list:massdirectionsfromuserdraw:fire',_.bind(this.handleDrawDirectionsFromUser,this));this.layout.on('list:massdirectionsfromrecorddraw:fire',_.bind(this.handleDrawDirectionsFromRecord,this));}},handleDrawMap:function(e){const selectedRecords=_.extend({},this.context.get('mass_collection').models);this.listMapView.createMap(selectedRecords);},handleDrawDirections:function(startPoint){const selectedRecords=_.extend({},this.context.get('mass_collection').models);this.listMapView.createMap(selectedRecords,{directions:{startPoint:startPoint,},});},handleDrawDirectionsFromUser:function(e){this.handleDrawDirections({module:'Users',id:app.user.id});},handleDrawDirectionsFromRecord:function(record){this.handleDrawDirections({module:record.module,id:record.get('id')});},_injectMapButtons:function(){if(!app.user.hasMapsLicense()){return false;}
if(!_.has(app.config,'maps')){return false;}
if(!_.has(app.config.maps,'enabled_modules')){return false;}
const enabledModulesKey='enabled_modules';const allowedModules=app.config.maps[enabledModulesKey];const directionButton={name:'drawdirections_button',label:'LBL_MAP_DIRECTIONS_FROM_USER',events:{click:'list:massdirectionsfromuserdraw:fire',},type:'button',};const mapButton={name:'drawmap_button',label:'LBL_MAP_MAP',events:{click:'list:massmapdraw:fire',},type:'button',};this.listMapView=this._getListMapComponent(this.layout);if(!this.listMapView||!this.meta||!_.contains(allowedModules,this.module)){return;}
this.meta.selection.actions.push(mapButton);this.meta.selection.actions.push(directionButton);this.delegateListFireEvents();if(this.type==='recordlist'){let insertAtIdx=this.meta.rowactions.actions.findIndex(function find(btn){return btn.name==='delete_button'||btn.name==='unlink_button';});if(insertAtIdx===-1){insertAtIdx=this.meta.rowactions.actions.length;}
const listDirectionButton=_.extend(app.utils.deepCopy(directionButton),{label:'LBL_MAP_DIRECTIONS_FROM_RECORD',events:{click:'list:massdirectionsfromrecorddraw:fire',},});this.meta.rowactions.actions.splice(insertAtIdx,0,{type:'divider'});this.meta.rowactions.actions.splice(insertAtIdx+1,0,listDirectionButton);this.meta.rowactions.actions.splice(insertAtIdx+2,0,{type:'divider'});}},_getListMapComponent:function(layout){if(layout){return layout.getComponent('list-map')||this._getListMapComponent(layout.layout);}
return false;}});});})(SUGAR.App);