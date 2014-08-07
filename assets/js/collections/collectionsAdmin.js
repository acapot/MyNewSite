var CollectionsAdmin = Backbone.Collection.extend({

   model: ModelAdmin,
   url: 'http://alexiscapot.se/portfolio/json',
   //url: 'http://localhost/portfolio/json',

   sortAttribute: "year",
   sortDirection: 1,

   sortPortfolio: function (attr) {
      this.sortAttribute = attr;
      this.sort();
   },

   comparator: function(a, b) {
    //console.log("entra comparator");
      var a = a.get(this.sortAttribute),
          b = b.get(this.sortAttribute);

      if (a == b) return 0;

      if (this.sortDirection == 1) {
       // console.log("sale comparator");
         return a > b ? 1 : -1;
      } else {
        //console.log("sale comparator");
         return a < b ? 1 : -1;
      }
      //console.log("sale comparator");
   }
   //console.log("sale de ini");
});
