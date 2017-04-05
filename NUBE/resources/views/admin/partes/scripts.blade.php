
<!-- jQuery 2.2.3 -->
<script src="{{ asset('plantillas/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('plantillas/AdminLTE/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('plantillas/AdminLTE/plugins/morris/morris.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ asset('plantillas/AdminLTE/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!-- jvectormap -->
<script src="{{ asset('plantillas/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plantillas/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- jQuery Knob Chart -->
<script src="{{ asset('plantillas/AdminLTE/plugins/knob/jquery.knob.js') }}"></script>

<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('plantillas/AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>

<!-- datepicker -->
<script src="{{ asset('plantillas/AdminLTE/plugins/datepicker/bootstrap-datepicker.js') }}"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plantillas/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

<!-- Slimscroll -->
<script src="{{ asset('plantillas/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>

<!-- FastClick -->
<script src="{{ asset('plantillas/AdminLTE/plugins/fastclick/fastclick.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('plantillas/AdminLTE/dist/js/app.min.js') }}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="{{ asset('plantillas/AdminLTE/dist/js/pages/dashboard.js') }}"></script>-->

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('plantillas/AdminLTE/dist/js/demo.js') }}"></script>

<!-- bootstrap color picker -->
<script src="{{ asset('plantillas/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>

<!-- Select2 -->
<script src="{{ asset('plantillas/AdminLTE/plugins/select2/select2.full.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('plantillas/AdminLTE/plugins/DataTables/media/js/jquery.dataTables.min.js') }}"></script>




<script src="{{ asset('plantillas/AdminLTE/plugins/jquery-steps-master/build/jquery.steps.js') }}"></script>







<script>

$(function ()
{
    $("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onFinished: function (event, currentIndex)
        {
            alert("Submitted!");
        }
    });
});

$(".select2").select2({
    placeholder: "seleccione una opción"
});

$('#example').DataTable();

//Colorpicker
$(".my-colorpicker1").colorpicker({
    colorSelectors: {
        '#000000': '#000000',
        '#ffffff': '#ffffff',
        '#FF0000': '#FF0000',
        '#777777': '#777777',
        '#337ab7': '#337ab7',
        '#5cb85c': '#5cb85c',
        '#5bc0de': '#5bc0de',
        '#f0ad4e': '#f0ad4e',
        '#d9534f': '#d9534f'
    }
});
//color picker with addon
$(".my-colorpicker2").colorpicker({
    colorSelectors: {
        '#000000': '#000000',
        '#ffffff': '#ffffff',
        '#FF0000': '#FF0000',
        '#777777': '#777777',
        '#337ab7': '#337ab7',
        '#5cb85c': '#5cb85c',
        '#5bc0de': '#5bc0de',
        '#f0ad4e': '#f0ad4e',
        '#d9534f': '#d9534f'
    }
});
</script>

