/* new courses drop down css menu
// necessary to use a bit of script to seperate out
// all the li's into three ul's to give easier styling
*/

$(document).ready(function(){
	courses = $('#menu .menu>li:nth-child(2) ul');
	/*courses.css({
		'display':'block',
		'width':'500px',
		'height':'350px'
	});*/

	$('#menu .menu>li:nth-child(2) ul li').slice(20).wrapAll("<ul></ul>");
	$('#menu .menu>li:nth-child(2) ul li').slice(12,20).wrapAll("<ul></ul>");
	$('#menu .menu>li:nth-child(2) ul li').slice(0,12).wrapAll("<ul></ul>");
	$('#menu .menu>li:nth-child(2) ul ul').wrapAll("<li></li>");


	function hideMenu (item) {
		$(item).next().css('display','none');
		//console.log("hiding "+item);
		document.onclick = document.oldonclick;
	}

	function showMenu (item) {
		$(item).next().css('display','block');
		//console.log("showing "+item);
		document.oldonclick = document.onclick;
		setTimeout(function(){
	  		document.onclick = function() {
	    		hideMenu(item);
	  		}
	  	}, 10);
	}
	$('#menu .menu>li>a').slice(1).click(function(event){
		event.preventDefault();

		//$(this).next().css('display','block');
		if ($(this).next().css('display') == 'block') {
			// it's already there hide it
			hideMenu(this);
		} else {
			// show me the menu
			showMenu(this);
		};
	})
});