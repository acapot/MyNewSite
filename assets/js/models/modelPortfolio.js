var ModelPortfolio = Backbone.Model.extend({
	//urlRoot: 'http://localhost/portfolio/json',
	idAttribute: 'item_id',
	defaults:
	[{
		"id":"4",
		"title":"(Ã…r 2009) Javascript manipulerar CSS","text":"MÃ¥let Ã¤r att utforma hur en ballong ska tryckas och med javascript manipuleras font style, font size, color, m.f. direkt i CSS. Webbsidan har en RSS system med.",
		"thumbnail_url":"img/ballongtryck.jpg",
		"url":"/formge_direkt.html",
		"test":"0",
		"category_id":"4",
		"item_id":"5",
		"name":"Javascript"
	}],	
});