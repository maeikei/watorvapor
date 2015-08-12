var SUPPORT_LANG = [
	'en','zh','ja','ru'
]

$(function () {
	$('.language_button').click(function(){
		//console.log(window.location);
		var url = window.location.href;
		var pathArray = window.location.pathname.split( '/' );
		//console.log(pathArray);
		var lastName = pathArray[pathArray.length -1];
		//console.log(lastName);
		var index = SUPPORT_LANG.indexOf(lastName);
		//console.log(index);
		if(-1 == index) {
			if('' !=lastName) {
				url += '/';
			}
			url += this.value;
		} else {
			url = url.replace(lastName, this.value);
		}
		//console.log(url);
		window.location.href = url;
	});
});
