<!DOCTYPE html>
<html>
<head>
      @include('template/head')
</head>

<body>
      @include('template/navbar')
      @include('template/topnavbar')
      @yield('main')

      <!-- Mainly scripts -->
      <script src="{{ asset('inspinia/js/jquery-3.1.1.min.js') }}"></script>
      <script src="{{ asset('inspinia/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('inspinia/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
      <script src="{{ asset('inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

      <!-- Custom and plugin javascript -->
      <script src="{{ asset('inspinia/js/inspinia.js') }}"></script>
      <script src="{{ asset('inspinia/js/plugins/pace/pace.min.js') }}"></script>

      <!-- Data picker -->
      <script src="{{ asset('inspinia/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

       <!-- Date range picker -->
       <script src="{{ asset('inspinia/js/plugins/daterangepicker/daterangepicker.js') }}"></script>

       <!-- Tags Input -->
       <script src="{{ asset('inspinia/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

       <!-- Dual Listbox -->
       <script src="{{ asset('inspinia/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js') }}"></script>

       <script src="{{ asset('inspinia/js/plugins/dataTables/datatables.min.js') }}"></script>

       <!-- Custom and plugin javascript -->
       <script src="{{ asset('inspinia/js/inspinia.js') }}"></script>
       <script src="{{ asset('inspinia/js/plugins/pace/pace.min.js') }}"></script>

       <!-- Page-Level Scripts -->
       <script>
           $(document).ready(function(){
               $('.dataTables-example').DataTable({
                   pageLength: 25,
                   responsive: true,
                   dom: '<"html5buttons"B>lTfgitp',
                   buttons: [
                       { extend: 'copy'},
                       {extend: 'csv'},
                       {extend: 'excel', title: 'ExampleFile'},
                       {extend: 'pdf', title: 'ExampleFile'},

                       {extend: 'print',
                        customize: function (win){
                               $(win.document.body).addClass('white-bg');
                               $(win.document.body).css('font-size', '10px');

                               $(win.document.body).find('table')
                                       .addClass('compact')
                                       .css('font-size', 'inherit');
                       }
                       }
                   ]

               });

           });

       </script>

       <script>
           $(document).ready(function(){

               $('.tagsinput').tagsinput({
                   tagClass: 'label label-primary'
               });


               $('#data_1 .input-group.date').datepicker({
                   todayBtn: "linked",
                   keyboardNavigation: false,
                   forceParse: false,
                   calendarWeeks: true,
                   autoclose: true
               });

               $('#data_2 .input-group.date').datepicker({
                   startView: 1,
                   todayBtn: "linked",
                   keyboardNavigation: false,
                   forceParse: false,
                   autoclose: true,
                   format: "dd/mm/yyyy"
               });

               $('#data_3 .input-group.date').datepicker({
                   startView: 2,
                   todayBtn: "linked",
                   keyboardNavigation: false,
                   forceParse: false,
                   autoclose: true
               });

               $('#data_4 .input-group.date').datepicker({
                   minViewMode: 1,
                   keyboardNavigation: false,
                   forceParse: false,
                   forceParse: false,
                   autoclose: true,
                   todayHighlight: true
               });

               $('#data_5 .input-daterange').datepicker({
                   keyboardNavigation: false,
                   forceParse: false,
                   autoclose: true
               });



           });


       </script>
</body>
</html>
