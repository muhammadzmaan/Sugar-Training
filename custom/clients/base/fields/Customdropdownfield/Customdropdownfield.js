({
    
    extendsFrom: "EnumField",
  
    initialize: function (options) {
      this._super("initialize", [options]);
      this.type = 'enum';
      
      
    },
    loadEnumOptions: function(fetch, callback) {

        var self = this,
    
        meta = app.metadata.getModule(this.module, 'fields'),
    
        fieldMeta = meta && meta[this.name] ? meta[this.name] : this.def,
    
        request;
    
        this.isFetchingOptions = true;
        
        
        var myoptions = {"":""};
    
        myoptions['option1'] = "My Option 1";
        myoptions['option2'] = "My Option 2";
        myoptions['option3'] = "My Option 3";
        myoptions['option4'] = "My Option 4";
        this.items = myoptions;
    
        callback.call(this);
    
    
    }
  
});