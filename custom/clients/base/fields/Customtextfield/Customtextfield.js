({
    
    extendsFrom: "TextField",
  
    initialize: function (options) {
      this._super("initialize", [options]);
      
      if (app.user.attributes.type === "admin") {
        this.def.readonly = false;
      } else {
        this.def.readonly = true;
      }
    },
  
});