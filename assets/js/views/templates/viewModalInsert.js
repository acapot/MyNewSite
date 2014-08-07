var ViewModalInsert = Backbone.View.extend({
	
	//imgName :"sv-hogskoleverket.jpg",
	img : null,
	// width:'',
	// height 
	$el	: $('#myModal .modal-body'),

	initialize: function(){

console.log("ENTRA1");
	},

	render: function() {
		//this.css( "width", "1500px");
		console.log("ENTRA");
		//var insertImg = "<img class='col-xs-12' src='http://localhost/assets/img/certificate/"+this.img+"'/>";
		var insertImg = "<img class='col-xs-12' src='http://alexiscapot.se/assets/img/certificate/"+this.img+"'/>";
      	this.$el.html(insertImg);
      	$('.modal-dialog').css( {
      					"border":"none",
      					"position":"absolute",
      					"left": "100px"
      				});

      	return this;
   }
});
