var ViewPortfolio = Backbone.View.extend({
	
	 
	template: Handlebars.compile(
	'{{#each models}}'+
		
			'<div class="col-sm-4 col-lg-4 col-md-4">'+
			    '<div class="thumbnail">'+
			        '<h4>'+
			                '<a href="http://alexiscapot.se/portfolio/showProject/{{attributes.item_id}}/">{{attributes.year}} - {{attributes.title }}</a>'+
			        '</h4>'+
			        '<a class="itemThumbnail col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image:url(&#39http://alexiscapot.se/assets/{{attributes.thumbnail_url}}&#39);" href="http://alexiscapot.se/portfolio/showProject/{{attributes.item_id}}/" ></a>'+

			        '<div class="caption">'+
			            '<p><a target="_blank" href="http://alexiscapot.se/portfolio/showProject/{{attributes.item_id}}">{{attributes.text }}</a></p>'+
			        '</div>'+
			       
			    '</div>'+
			'</div>'+
	
	'{{/each}}'
	
		),

	

	initialize: function(){
		
		
		//el:'#container'
		//this.listenTo(this.model,"change", this.render)
		//this.models.name.where();
		//console.log('models.....'+models);
		//this.collection.comparator = 'projects.title';
		this.listenTo(this.collection,'reset', this.render);
		//this.listenTo(this.collection, 'reset', console.log('collection reset'));
		//this.collection.on('reset', this.render.bind(this));
		//console.log(this.el);
	},

	render: function(){
		Handlebars.registerHelper('escape', function(variable) {
  return variable.replace(/(['"])/g, '\\$1');
});
		//_.each([1, 2, 3], alert);
		//console.log("cl:::"+this.collection);
		this.$el.html(this.template(this.collection));
		console.log(this.el);
		return this;		
	}
});

// template: Handlebars.compile(
// 	'{{#each models}}'+
		
// 			'<div class="col-sm-4 col-lg-4 col-md-4">'+
// 			    '<div class="thumbnail">'+
// 			        '<h4>'+
// 			                '<a href="http://localhost/portfolio/showProject/{{attributes.item_id}}/">{{attributes.year}} - {{attributes.title }}</a>'+
// 			        '</h4>'+
// 			        '<a class="itemThumbnail col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image:url(&#39http://localhost/assets/{{attributes.thumbnail_url}}&#39);" href="http://localhost/portfolio/showProject/{{attributes.item_id}}/" ></a>'+

// 			        '<div class="caption">'+
// 			            '<p><a target="_blank" href="http:localhost/portfolio/showProject/{{attributes.item_id}}">{{attributes.text }}</a></p>'+
// 			        '</div>'+
			       
// 			    '</div>'+
// 			'</div>'+
	
// 	'{{/each}}'
	
// 		),

