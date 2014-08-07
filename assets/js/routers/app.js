var App = Backbone.Router.extend({
	routes: {

		'app/sort/:orderBy':'orderPortfolio',
		'app/adminPortfolio':'adminPortfolio',
		'app/indexSection/:section':'indexSection',
		'app/modalInsert/:img' : 'modalInsert'
		
	},


	initialize: function(){
		//Show item education like default in index (CV)
		var that = this;
		$(function(){
			that.indexSection(0);
		});
		
	},


	indexSection: function(section){
		
		$('#categories').html('#education');
		this.viewIndex = new ViewIndex();
		this.viewIndex.section = section;
		this.viewIndex.showElement();
		$('#categories').hide().html(this.viewIndex.render().el).fadeIn();
		//console.log($('#education').text());

	},

	//this view is in js/tamplates folder and show the lightBox (or modal box)
	modalInsert: function(img){
		this.viewModalInsert = new ViewModalInsert();
		this.viewModalInsert.img = img;
		
		$('#myModal .modal-body').html(this.viewModalInsert.render().el);
	},
		

	orderPortfolio: function(orderBy){
		this.collectionsPortfolio = new CollectionsPortfolio();
        this.collectionsPortfolio.fetch({reset:true});
        this.orderItem = orderBy || "id";
        this.collectionsPortfolio.changeSort(orderBy);
		this.modelPortfolio = new ModelPortfolio();
		this.viewPortfolio = new ViewPortfolio(
				{

					collection: this.collectionsPortfolio
				}
			);

		$('#projectContainer').html(this.viewPortfolio.render().el);
	},

	adminPortfolio: function(){
		
		this.collectionsAdmin = new CollectionsAdmin();
		this.collectionsAdmin.fetch({reset:true});
		//this.modelAdmin = new ModelAdmin();
   		this.viewAdmin = new ViewAdmin({ collection: this.collectionsAdmin });

   		$('.wrapper').html( this.viewAdmin.render().$el.attr('id', 'portfolio') );
		
	}
});

var app = new App();