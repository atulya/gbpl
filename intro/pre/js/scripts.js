$('ul.nav li.dropdown'). hover(function() {
$(this). find('.dropdown-menu'). stop(true, true). delay(200). fadeIn(500);
}, function() {
$(this). find('.dropdown-menu'). stop(true, true). delay(200). fadeOut(500);
});
$('.sidebarSlider').carousel({
  interval: 3000
})
// if(window.location.href === "http://localhost/gbpl/human-health-promethus.php"){
//     console.log("10");
//   } else {
//     document.write('<div>testing my super loaded div code sample</div>')
//   }

$(document).ready(function () {
	var url = window.location;
	// console.log(url);
	// Will only work if string in href matches with location
	//$('ul.nav a[href="' + url + '"]').parent().addClass('active');

	// Will also work for relative and absolute href
	$('ul.nav a').filter(function () {
		return this.href == url;
	}).parent().addClass('active').parent().parent().addClass('active');
});
