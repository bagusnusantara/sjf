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
</body>
</html>
