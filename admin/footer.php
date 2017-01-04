<script>
    $(function () {
        $('#hover, #striped, #condensed').click(function () {
            var classes = 'table';

            if ($('#hover').prop('checked')) {
                classes += ' table-hover';
            }
            if ($('#condensed').prop('checked')) {
                classes += ' table-condensed';
            }
            $('#table-style').bootstrapTable('destroy')
                    .bootstrapTable({
                        classes: classes,
                        striped: $('#striped').prop('checked')
                    });
        });
    });

    function rowStyle(row, index) {
        var classes = ['active', 'success', 'info', 'warning', 'danger'];

        if (index % 2 === 0 && index / 2 < classes.length) {
            return {
                classes: classes[index / 2]
            };
        }
        return {};
    }
</script>
<script src="../adminjs/jquery-1.11.1.min.js"></script>
<script src="../adminjs/bootstrap.min.js"></script>
<script src="../adminjs/bootstrap-table.js"></script>
<script>
    !function ($) {
        $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768)
            $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767)
            $('#sidebar-collapse').collapse('hide')
    })
</script>
<script>
    function fetchSub() {
        var left_id = document.getElementById('left_id').value;
        var select = document.getElementById('sub_id');
        if (left_id != 0) {
            $.ajax({
                url: 'insertController.php',
                data: {left: left_id},
                type: 'post',
                success: function (data) {
                    $('#sub_id').empty();
                    if(data != ""){
                        var arr;
                        arr = data.split(',');
                        var len = arr.length;
                        var i = 0;
                        var j = 0;
                        var max = (len/2);
                        var opt = document.createElement('option');
                        opt.text = "Select Sub Type";
                        opt.value = "0";
                        select.appendChild(opt);
                        while (j < max) {
                            var opt = document.createElement('option');
                            opt.value = arr[i];
                            i=i+1;
                            opt.text = arr[i];
                            select.appendChild(opt);
                            i=i+1;
                            j = j + 1;
                        }
                    }
                    
                }
            });
        }
    }
</script>