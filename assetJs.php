<script src="js/jquery.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->

<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<script type="text/javascript" src="fullscreen-slider/js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="fullscreen-slider/js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="fullscreen-slider/js/jquery.slitslider.js"></script>
<script>
	function fetchCategory(){
		var e = document.getElementById("usage");
		var select = document.getElementById("category");
		var value = e.options[e.selectedIndex].value;
		$.ajax({
			url: 'controller.php',
            type: 'POST',
            data: {product_id: value},
            success: function (data) {
				$('#category').empty();
                var a;
                a = data.split(',');
                var option = document.createElement('option');
                option.value = '0';
                option.text = 'All';
                select.add(option);
                for (var i = 0; i < a.length; i++) {
                    var option = document.createElement('option');
                    var b = a[i].split('.');
                    option.value = b[0];
                    option.text = b[1];
                    select.add(option);
                }
            }
		});
	}
</script>
