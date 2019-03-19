    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="{{ url('design/admin') }}/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ url('design/admin') }}/assets/js/popper.min.js"></script>
    <script src="{{ url('design/admin') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ url('design/admin') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ url('design/admin') }}/assets/js/metisMenu.min.js"></script>
    <script src="{{ url('design/admin') }}/assets/js/jquery.slimscroll.min.js"></script>
    <script src="{{ url('design/admin') }}/assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="{{ url('design/admin') }}/assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="{{ url('design/admin') }}/assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="{{ url('design/admin') }}/assets/js/plugins.js"></script>
    <script src="{{ url('design/admin') }}/assets/js/scripts.js"></script>
    


    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <script src="{{ url('design/admin') }}/assets/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('') }}/vendor/datatables/buttons.server-side.js"></script>

    <script src="{{ url('design/admin') }}/assets/js/myFunctions.js"></script>
    <script src="{{ url('design/admin') }}/assets/js/toastr.min.js"></script>
    <script type="text/javascript">
            toastr.options.closeButton = true;
            toastr.options.timeOut = 10000;
            toastr.options.newestOnTop = true;
            toastr.options.progressBar = true;
            toastr.options.positionClass = "toast-top-center";
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}")
            @endif
            @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}")
            @endif
            @if(count($errors) > 0)
              @foreach($errors->all() as $error)
                toastr.error("{{ $error  }}")
              @endforeach
            @endif
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.ar.min.js"></script>
<script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    @stack('css')
    @stack('js')


</body>

</html>