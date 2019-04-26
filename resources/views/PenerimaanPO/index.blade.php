@extends('template.index')

@section('main')

<div id="wrapper">
  <div class="row wrapper border-bottom white-bg page-heading">
      <div class="col-sm-4">
          <h2>Penerimaan PO</h2>
          <ol class="breadcrumb">
              <li>
                  <a href="index.html">Dashboard</a>
              </li>
              <li class="active">
                  <strong>Penerimaan PO</strong>
              </li>
          </ol>
      </div>
  </div>

<div class="wrapper wrapper-content  animated fadeInRight">

<div class="row">

    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>List PO</h5>

            </div>
            <div class="ibox-content">
                @include('PenerimaanPO.list_header')  
            </div>
        </div>



            </div>
        </div>
    </div>
    </div>


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










@endsection
