$(function(){
	var search_for = $('#search-for');
	var search_form = $('#search');
	var q = $('#q');
	var nav = $('header nav ul').find('li.parent');
	//var this_nav = $('header nav ul').find('li.parent span');
	var slider = $('#slider');
	var intro = $('.intro');
	
	search_for.on('click',function(){
		q.focus();
	});
	
	nav.hover(
	function(){
		var $this = $(this);
		$this.addClass('hover');
	},
	function(){
		var $this = $(this);
		$this = setTimeout(function(){
			nav.removeClass('hover');
        }, 400);
	});
	
	intro.hover(
	function(){
		var $this = $(this);
		intro.addClass('off');
		$this.removeClass('off');
	},
	function(){
		intro.removeClass('off');
	});
	
});