(function(app){function isGivenLayout(layoutName){if(app.sideDrawer&&app.sideDrawer.isOpen()){return app.sideDrawer._components[0].name===layoutName;}
return app.controller.layout&&app.controller.layout.name===layoutName;}
function getView(component,hierarchyPath){while(component&&hierarchyPath.length){component=component.getComponent(hierarchyPath.shift());}
return component;}
function getPreview(){var previewCmpPath=['sidebar','preview-pane','preview'];return getView(app.drawer,['create'].concat(previewCmpPath))||getView(app.sideDrawer,['record'].concat(previewCmpPath))||getView(app.controller.layout,previewCmpPath);}
function _getPreviewPane(){var previewCmpPath=['sidebar','preview-pane'];return getView(app.drawer,['create'].concat(previewCmpPath))||getView(app.sideDrawer,['record'].concat(previewCmpPath))||getView(app.controller.layout,previewCmpPath);}
function _getSpecificLayoutPosition(path,layout){const component=path?path._components:[];for(var i=0;i<component.length;i++){if(component[i].label===layout||component[i].name===layout){return i;}}
return-1;}
function _getNonHintPreview(){var previewPane=_getPreviewPane();var componentIndex=_getSpecificLayoutPosition(previewPane,'preview');if(componentIndex>=0){return previewPane._components[componentIndex];}}
function _getHintPreview(){var previewPane=_getPreviewPane();var componentIndex=_getSpecificLayoutPosition(previewPane,'Hint-Tab');if(componentIndex>=0){return previewPane._components[componentIndex];}}
function addViewToPanelMeta(preview,cmp,type){var component={context:{forceNew:true}};component[type||'view']=cmp;preview._componentsMeta.push(component);}
function isEnrichedModel(model){var enrichedModules=['Leads','Contacts','Accounts'];return _.contains(enrichedModules,model.module);}
function isTriggeredOnSubpanel(model){var hasModelFromSubpanel=false;var recordModel=app.sideDrawer&&app.sideDrawer.isOpen()?app.sideDrawer._components[0].model:app.controller.layout.model;var moduleLink=model.link&&model.link.name;if(moduleLink&&isGivenLayout('record')&&recordModel){var relatedCollection=recordModel.getRelatedCollection(moduleLink);var relatedModel=relatedCollection&&relatedCollection.get(model.cid);hasModelFromSubpanel=!!relatedModel;}
return hasModelFromSubpanel;}
function isTriggeredOnListview(preview){return isGivenLayout('records')&&!isInMergeView(preview);}
function isInMergeView(preview){return preview.options.type==='merge-duplicates-preview';}
function isCreateLayout(){return!!(getView(app.drawer,['create'])||isGivenLayout('create'));}
function isEnrichedRecordView(model){var isEnrichedRecord=isGivenLayout('record')&&isEnrichedModel(model);var dashBoardHeaderPath=['sidebar','dashboard-pane','dashboard','dashboard-headerpane'];var recordLayout=app.sideDrawer&&app.sideDrawer.isOpen()?app.sideDrawer._components[0]:app.controller.layout;var dashBoardHeader=getView(recordLayout,dashBoardHeaderPath);if(isEnrichedRecord&&dashBoardHeader){var dashboardTitle=_.findWhere(dashBoardHeader.fields,{type:'hint-dashboardtitle'});isEnrichedRecord=dashboardTitle&&dashboardTitle.getHintState(dashboardTitle.hintStateKey);}
return isEnrichedRecord;}
function isHintPreview(preview,model){var doesHintApply=false;var shouldHintBeDisplayed=app.hint.isSugarProSpecialCase()||app.hint.isHintUser();if(isEnrichedModel(model)){doesHintApply=isCreateLayout()||isGivenLayout('search')||isTriggeredOnListview(preview)||isTriggeredOnSubpanel(model)||isEnrichedRecordView(model);}
return doesHintApply&&shouldHintBeDisplayed;}
function shouldShowRelatedContacts(model){return model.module==='Accounts'&&isGivenLayout('records');}
function addHintPreviewComponents(preview,model,collection){preview._componentsMeta=[];addViewToPanelMeta(preview,'hint-preview-header');preview._componentsMeta.push({view:'stage2-preview',});if(app.hint.isHintUser()){if(!isCreateLayout()){if(shouldShowRelatedContacts(model)){addViewToPanelMeta(preview,{type:'hint-panel-header',icon:'user',title:'LBL_HINT_CONTACTS_TITLE'});addViewToPanelMeta(preview,'stage2-related-contacts');}
addViewToPanelMeta(preview,'hint-news-panel','layout');addViewToPanelMeta(preview,{type:'hint-panel-header',icon:'history',title:'LBL_HINT_HISTORY_TITLE'});addViewToPanelMeta(preview,'stage2-history');}}}
function doesSugerHaveTabbedDashlets(){return app.hint.versionCompare()>=0;}
function _tabViewValidationCheck(model){var validModules=['Accounts','Contacts','Leads'];return _.contains(validModules,model.module)&&doesSugerHaveTabbedDashlets();}
function addDefaultPreviewComponents(modelName,preview){preview._componentsMeta=app.metadata.getLayout(modelName,'preview').components;}
function _editStyles(){var $navTabs;var $tabbableClass;var tabbable=App.sideDrawer&&App.sideDrawer.isOpen()?App.sideDrawer._components[0]._components[0]:App.controller.layout._components[0];var self=tabbable._components[2];var hintTabsHidden=tabbable.$(tabbable.$('.tabbable.hide-tabs.preview-active'));var hintLabelTitle=tabbable.$(tabbable.$('.nav-item'));var hintLabelNonHidden=tabbable.$(tabbable.$('.nav.nav-tabs.related-tabs.preview-pane-tabs'));var hintLabelHidden=tabbable.$(tabbable.$('.nav.nav-tabs.related-tabs.hide.preview-pane-tabs'));var hintPreviewPosition=_getSpecificLayoutPosition(_getPreviewPane(),'Hint-Tab')+1;self.$(hintLabelTitle[hintPreviewPosition]).addClass('hint-nav-tab');if(hintLabelHidden.length){hintLabelHidden.removeClass('hide');hintLabelTitle[hintPreviewPosition].children[0].innerText=app.lang.get('LBL_HINT_PANEL');}else if(hintLabelNonHidden.length){hintLabelTitle[hintPreviewPosition].children[0].innerText=app.lang.get('LBL_HINT_PANEL');}
if(hintTabsHidden.length){hintTabsHidden.removeClass('hide-tabs');}
self.$('a[data-toggle="tab"]').on('shown.bs.tab',function(e){var tabName=$(e.target.parentElement).data('tab-name');$navTabs=$(e.target).parents('.nav-tabs');$tabbableClass=$(e.target).parents('.tabbable');$navTabs.addClass('preview-pane-tabs',tabName==='preview');$tabbableClass.addClass('preview-active',tabName==='preview');});}
function _editStylesHintUndo(){var tabbable=App.sideDrawer&&App.sideDrawer.isOpen()?App.sideDrawer._components[0]._components[0]:App.controller.layout._components[0];var hintTabs=tabbable.$(tabbable.$('.tabbable.preview-active'));var hintLabel=tabbable.$(tabbable.$('.nav.nav-tabs.related-tabs.preview-pane-tabs'));if(hintLabel.length){hintLabel.addClass('hide');}
if(hintTabs.length){hintTabs.addClass('hide-tabs');}
if(tabbable._components){var self=tabbable._components[2];var previewPosition=_getSpecificLayoutPosition(_getPreviewPane(),'preview');var hintPreviewPosition=_getSpecificLayoutPosition(_getPreviewPane(),'Hint-Tab');if(previewPosition>=0&&self){var nonHintSubmodulePreview=self.$(self.$('li')[previewPosition]).hasClass('active');var nonHintSubmodulePreview2=self.$(self.$('.tab-pane')[previewPosition]).hasClass('active');if(!nonHintSubmodulePreview&&!nonHintSubmodulePreview2){self.$(self.$('li')[previewPosition]).addClass('active');self.$(self.$('.tab-pane')[previewPosition]).addClass('active');}}
if(hintPreviewPosition>=0){var hintPreviewChosen=self.$(self.$('li')[hintPreviewPosition]).hasClass('active');var hintPreviewChosen2=self.$(self.$('.tab-pane')[hintPreviewPosition]).hasClass('active');if(hintPreviewChosen&&hintPreviewChosen2){self.$(self.$('li')[hintPreviewPosition]).removeClass('active');self.$(self.$('.tab-pane')[hintPreviewPosition]).removeClass('active');}}}}
function _editStylesPreviewUndo(){var tabbable=App.sideDrawer&&App.sideDrawer.isOpen()?App.sideDrawer._components[0]._components[0]:App.controller.layout._components[0];var hintTabs=tabbable.$(tabbable.$('.tabbable.preview-active'));var hintLabel=tabbable.$(tabbable.$('.nav.nav-tabs.related-tabs.preview-pane-tabs'));if(hintLabel.length){hintLabel.addClass('hide');}
if(hintTabs.length){hintTabs.addClass('hide-tabs');}
var self=tabbable._components[2];var previewPosition=_getSpecificLayoutPosition(_getPreviewPane(),'preview');var hintPreviewPosition=_getSpecificLayoutPosition(_getPreviewPane(),'Hint-Tab');if(hintPreviewPosition>=0){var nonHintSubmodulePreview=self.$(self.$('li')[hintPreviewPosition]).hasClass('active');var nonHintSubmodulePreview2=self.$(self.$('.tab-pane')[hintPreviewPosition]).hasClass('active');if(!nonHintSubmodulePreview&&!nonHintSubmodulePreview2){self.$(self.$('li')[hintPreviewPosition]).addClass('active');self.$(self.$('.tab-pane')[hintPreviewPosition]).addClass('active');}}
if(previewPosition>=0){var hintPreviewChosen=self.$(self.$('li')[previewPosition]).hasClass('active');var hintPreviewChosen2=self.$(self.$('.tab-pane')[previewPosition]).hasClass('active');if(hintPreviewChosen&&hintPreviewChosen2){self.$(self.$('li')[previewPosition]).removeClass('active');self.$(self.$('.tab-pane')[previewPosition]).removeClass('active');}}}
function _removeExtraStyles(){var tabbable=App.sideDrawer&&App.sideDrawer.isOpen()?App.sideDrawer._components[0]._components[0]:App.controller.layout._components[0];var hintLabel=tabbable.$(tabbable.$('.nav.nav-tabs.related-tabs')[3]);var addHideClassOnce=tabbable.$(tabbable.$('.nav.nav-tabs.related-tabs.hide')[3]).hasClass('hide');if(hintLabel.length&&!(addHideClassOnce)){hintLabel.addClass('hide');}}
function togglePreview(model,collection){var preview;var modelName=model.module;if(app.hint.isHintUser()){var isRecordViewlayoutType=SUGAR.App.sideDrawer&&SUGAR.App.sideDrawer.isOpen()?SUGAR.App.sideDrawer._components[0].type==='record':SUGAR.App.controller.layout.type==='record';var hintViewInTab=app.hint.shouldUseOldHintPreview(modelName);if(_tabViewValidationCheck(model)&&!isRecordViewlayoutType){_editStyles();preview=_getHintPreview();}else if(_tabViewValidationCheck(model)&&hintViewInTab){_editStyles();preview=_getHintPreview();}else if(_tabViewValidationCheck(model)&&!hintViewInTab){_editStylesPreviewUndo();preview=_getHintPreview();}else if(doesSugerHaveTabbedDashlets()){_editStylesHintUndo();preview=_getNonHintPreview();}else{_removeExtraStyles();preview=getPreview();}}else if(app.hint.isSugarProSpecialCase()){_editStyles();preview=_getHintPreview();}else{_editStylesHintUndo();preview=_getNonHintPreview();}
if(!preview||!preview._isActive()){return;}
var hasComponents=!_.isEmpty(preview._components);var isSameModel=model==preview.context.get('model');var modelChanged=preview.context.get('module')!==modelName;if(!isSameModel&&(!hasComponents||modelChanged)){if(isHintPreview(preview,model)){addHintPreviewComponents(preview,model,collection);}else{addDefaultPreviewComponents(modelName,preview);}}}
app.events.on('preview:render',togglePreview);})(SUGAR.App);