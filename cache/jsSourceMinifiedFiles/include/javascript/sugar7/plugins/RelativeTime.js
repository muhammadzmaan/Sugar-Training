(function(app){if(!$.fn.liverelativedate){return;}
app.events.on('app:init',function(){app.plugins.register('RelativeTime',['view','field'],{onAttach:function(component){component.on('render',function(){component.$('[datetime]').liverelativedate();});},_render:function(){this.$('[datetime]').liverelativedate('destroy');Object.getPrototypeOf(this)._render.call(this);},onDetach:function(component){component.$('[datetime]').liverelativedate('destroy');}});});})(SUGAR.App);