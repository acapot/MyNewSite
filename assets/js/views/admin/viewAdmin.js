var ViewAdmin = Backbone.View.extend({

   _portfolioRowViews: [],

   tagName: 'table',
   template: null,

   //sortUpIcon: 'ui-icon-triangle-1-n',
   //sortDnIcon: 'ui-icon-triangle-1-s',

   sortUpIcon: 'glyphicon-chevron-up',
   sortDnIcon: 'glyphicon-chevron-down',

   events: {
      "click th": "headerClick"
   },

   initialize: function() {
      //console.log("entra");
      this.template = _.template( $('#portfolio-table').html() );
      this.listenToOnce(this.collection, "reset", this.updateTable);
      this.listenTo(this.collection, "sort", this.updateTable);
   },

   render: function() {

      this.$el.html(this.template());

      // Setup the sort indicators
      this.$('th div')
             .append($('<span>'))
             .closest('thead')
             .find('span')
               .addClass('glyphicon icon-none')
               .end()
             .find('[column="'+this.collection.sortAttribute+'"] span')
               .removeClass('icon-none').addClass(this.sortUpIcon);

      this.updateTable();

      return this;
   },

   headerClick: function( e ) {
      var $el = $(e.currentTarget),
          ns = $el.attr('column'),
          cs = this.collection.sortAttribute;

      if (ns == cs) {
         this.collection.sortDirection *= -1;
      } else {
         this.collection.sortDirection = 1;
      }

      $el.closest('thead').find('span').attr('class', 'glyphicon icon-none');

      if (this.collection.sortDirection == 1) {
         $el.find('span').removeClass('icon-none').addClass(this.sortUpIcon);
      } else {
         $el.find('span').removeClass('icon-none').addClass(this.sortDnIcon);
      }

      this.collection.sortPortfolio(ns);
   },

   updateTable: function () {
     
      var ref = this.collection,
          $table;

      _.invoke(this._portfolioRowViews, 'remove');

      $table = this.$('tbody');
 
      this._portfolioRowViews = this.collection.map(
            function ( obj ) {
                 
                  var v = new ViewAdminRow({  model: ref.get(obj) });
 //console.log("entra update");
                  $table.append(v.render().$el);
                   console.log("sale update");
                  return v;
              });
   }

});