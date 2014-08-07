var CollectionsPortfolio = Backbone.Collection.extend({
	//comparator:'title',
	model: ModelPortfolio,
	url: 'http://alexiscapot.se/portfolio/json',
   // url: 'http://localhost/portfolio/json',

	
    changeSort: function (item) {
        this.comparator = item || "id";
    },

    initialize: function () {
        //this.changeSort()       
    }
	// comparator: function() {
 //        return this.model.get('title');
 //    },

 //    initialize: function(models, options){

 //    	this.comparator();
 //    }


});
