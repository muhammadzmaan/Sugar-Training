(function(app){app.events.on('app:init',function(){app.plugins.register('HistoricalSummary',['view'],{onAttach:function(component,plugin){this.on('init',function(){this.context.on('button:historical_summary_button:click',this.historicalSummaryClicked,this);});},historicalSummaryClicked:function(){let context=this.context.getChildContext({name:'history',module:this.module,model:this.model});app.drawer.open({layout:'history-summary',context:context});},onDetach:function(component,plugin){this.context.off('button:historical_summary_button:click',this.auditClicked,this);}});});})(SUGAR.App);