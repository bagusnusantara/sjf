@extends('template.index')

@section('main')
<head>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>
<!DOCTYPE html>
<html>
<body>
</div>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Dashboard</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">
                    <strong>Dashboard</strong>
                </li>
            </ol>
        </div>
    </div>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <div class="row">
        <div class="col-lg-12">
          <div class="ibox-title">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
              <div class="row">
                <div class="form-group" id="data_5">
                                <!-- <label class="font-normal">Range select</label>
                                <form method="POST" action="{{ route('Dashboard.index') }}" class="form-horizontal" enctype="multipart/form-data">
                                      @csrf
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="input-sm form-control" name="start" value=""/>
                                    <span class="input-group-addon">Sampai</span>
                                    <input type="text" class="input-sm form-control" name="end" value="" />
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form> -->
                              <div class="text-right">
                                <h4>Range Tanggal :</h4>
                              <input type="text" name="daterange" value="" />
                              </div>
                            </div>

        <h1><center>Laporan Penjualan Semua Outlet</center></h1>
                <!-- <div class="ibox-content">
                            <h3>
                                Date Range Picker
                            </h3>
                            <p>
                                A JavaScript widget for choosing date ranges.
                                Designed to work with the Bootstrap CSS framework.
                            </p>

                            <input class="form-control" type="text" name="daterange" value="01/01/2015 - 01/31/2015" />

                            <h4>All options example</h4>
                            <div id="reportrange" class="form-control">
                                <i class="fa fa-calendar"></i>
                                <span></span> <b class="caret"></b>
                            </div>
                        </div>
                    </div> -->

            </div>
        </div>


            <div class="ibox-content">
                <div class="table-responsive">

            <table class="table table-striped table-bordered table-hover dataTables-example" >
              <thead>
                              <tr>
                                <th>Nama Outlet</th>
                                <th>Alamat</th>
                                <th>Penjualan Total</th>
                              </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Ayam Geprek Pangeran Dago</td>
                                  <td>Jl Ir H Djuanda No 185 (Simpang Dago), Dago, Coblong, Kota Bandung, Jawa Barat 40135</td>
                                  <td>Rp. {{number_format($so_hdr,0)}},-</td>
                                </tr>
                                <tr>
                                  <td>Ayam Geprek Pangeran Katamso</td>
                                  <td>Jl. Brigadir Jend. Katamso No.37, Cihaur Geulis, Cibeunying Kaler, Kota Bandung, Jawa Barat 40123</td>
                                  <td>Rp. {{number_format($so_hdr1,0)}},-</td>
                                </tr>
				 <tr>
                                  <td>Ayam Geprek Pangeran Cicaheum</td>
                                  <td>Jl. Jendral Ahmad Yani No.925, Cicaheum, Kiaracondong, Kota Bandung, Jawa Barat 40282</td>                             
								  <td>Rp. 0,-</td>
                                </tr>
				 <tr>
                                  <td>Yagami Ramen House Dago</td>
                                  <td>Jl. Ir. H. Djuanda No. 185, Dago, Coblong, Kota Bandung, Jawa Barat 40135</td>                                 
								  <td>Rp. 0,-</td>
                                </tr>
				 <tr>
                                  <td>Yagami Ramen House Bojonegoro</td>
                                  <td>Jl. WR. Supratman No.89, Karang Pacar, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62119</td>                               
								  <td>Rp. 0,-</td>
                                </tr>
                                @php
                                  $total = $so_hdr + $so_hdr1;
                                @endphp
                                <tr>
                                    <td colspan=9 align=right>
                                      <h4>Total Penjualan Semua Outlet : Rp. {{ number_format($total,0)}},-</h4>
                                    </td>
                                </tr>
                              </tbody>
                              </table>

            <div class="tombol-nav">

                </div>

            </div>
        </div>
    </div>
    </div>
</div>
@include('template.footer')

</div>
</div>





    <!-- Mainly scripts -->
    <script src="{{ asset('inspinia/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('inspinia/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('inspinia/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('inspinia/js/plugins/dataTables/datatables.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('inspinia/js/inspinia.js') }}"></script>
    <script src="{{ asset('inspinia/js/plugins/pace/pace.min.js') }}"></script>

    <!-- Flot -->
    <script src="{{ asset('inspinia/js/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('inspinia/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('inspinia/js/plugins/flot/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('inspinia/js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('inspinia/js/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('inspinia/js/plugins/flot/jquery.flot.symbol.js') }}"></script>
    <script src="{{ asset('inspinia/js/plugins/flot/jquery.flot.time.js') }}"></script>

    <!-- Peity -->
    <script src="{{ asset('inspinia/js/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('inspinia/js/demo/peity-demo.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('inspinia/js/inspinia.js') }}"></script>
    <script src="{{ asset('inspinia/js/plugins/pace/pace.min.js') }}"></script>

        <!-- jQuery UI -->
        <script src="{{ asset('inspinia/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

        <!-- Jvectormap -->
        <script src="{{ asset('inspinia/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('inspinia/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

        <!-- EayPIE -->
        <script src="{{ asset('inspinia/js/plugins/easypiechart/jquery.easypiechart.js') }}"></script>

        <!-- Sparkline -->
        <script src="{{ asset('inspinia/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- Sparkline demo data  -->
        <script src="{{ asset('inspinia/js/demo/sparkline-demo.js') }}"></script>


 <!-- Data picker -->
 <script src="{{ asset('inspinia/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

  <!-- Date range picker -->
  <script src="{{ asset('inspinia/js/plugins/daterangepicker/daterangepicker.js') }}"></script>

  <!-- Tags Input -->
  <script src="{{ asset('inspinia/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

  <!-- Dual Listbox -->
  <script src="{{ asset('inspinia/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js') }}"></script>


    <script>
    $(function() {
      $('input[name="daterange"]').daterangepicker({
        opens: 'left'
      }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });
    });
    </script>

</body>

</html>
@stop
