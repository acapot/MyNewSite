var ViewIndex = Backbone.View.extend({
	//elem:'',

	
	section: '0',
	elem : $('#education'),

	showElement: function(){		
		this.elem = $('body').find('#hiddenCV section').eq(this.section*-1 );
	},
	render: function(){	
		this.$el.html(this.elem.html());
		
		return this;		
	}
});
