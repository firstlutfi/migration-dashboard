<!-- BEGIN CORE PLUGINS -->
    <script src={{ asset('global/plugins/jquery.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/bootstrap/js/bootstrap.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/js.cookie.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/jquery.blockui.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/scripts/app.min.js') }} type="text/javascript"></script>
    <script src={{ asset('layouts/layout3/scripts/layout.min.js') }} type="text/javascript"></script>
    <script src={{ asset('layouts/layout3/scripts/demo.min.js') }} type="text/javascript"></script>
    <script src={{ asset('layouts/global/scripts/quick-sidebar.min.js') }} type="text/javascript"></script>
    <script src={{ asset('layouts/global/scripts/quick-nav.min.js') }} type="text/javascript"></script>
<!-- END CORE PLUGINS -->

@section("page-level-scripts")
<!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src={{ asset('global/plugins/moment.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/morris/morris.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/morris/raphael-min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/counterup/jquery.waypoints.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/counterup/jquery.counterup.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/fullcalendar/fullcalendar.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/flot/jquery.flot.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/flot/jquery.flot.resize.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/flot/jquery.flot.categories.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/jquery.sparkline.min.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/jqvmap/jqvmap/jquery.vmap.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }} type="text/javascript"></script>
    <script src={{ asset('global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }} type="text/javascript"></script>
    <script src={{ asset('pages/scripts/dashboard.min.js') }} type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>