@extends('template.index')

@section('main')

<div id="wrapper">
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
    <div class="wrapper wrapper-content animated fadeInRight ecommerce">
        <div class="ibox-content m-b-sm border-bottom">
            <div class="row">
                <div class="col-sm-9">
                </div>

                <div class="col-sm-3">
                    <div>
                        @csrf
                        <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                            <i class="fa fa-calendar"></i>&nbsp;
                            <span></span> <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight" >
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Pendapatan Berdasarkan Tanggal </h5>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="lineChartPerTanggal" height="140"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pendapatan Berdasarkan Jam </h5>
                        </div>
                        <div class="ibox-content">
                            <canvas id="barChartPerJam" height="140"></canvas>
{{--                            <div id="morris-bar-chart"></div>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Line Chart Example </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id="morris-donut2-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Top Grup Produk</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id="morris-donut-chart" ></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pendapatan Berdasarkan Hari</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content" style="position: relative">
                            <div id="morris-bar2-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pengembalian Berdasarkan Tanggal </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id="morris-line-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
$(document).ready(function(){

  var start = moment().subtract(29, 'days');
  var end = moment();
  var _token = $('input[name="_token"]').val();

  var morrisLine;
  initMorris()

  $.post(
      '{{url("/filterdata")}}',
      {start: start.format('YYYY-MM-DD'), end: end.format('YYYY-MM-DD'), _token: _token},
      function(data, status){
        if (data.length !== 0) {
          var morrisData0 = [];
          $.each(data, function(key, val){
              morrisData.push({'tanggal': val.so_date, 'total' : val.total});
          });
          morrisLine.setData(morrisData0);
        } else {
          //alert('Data tidak ditemukan!');
        }
      }
  );

  $('#reportrange').daterangepicker({
      startDate: start,
      endDate: end,
      ranges: {
         'Today': [moment(), moment()],
         'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
         'Last 7 Days': [moment().subtract(6, 'days'), moment()],
         'Last 30 Days': [moment().subtract(29, 'days'), moment()],
         'This Month': [moment().startOf('month'), moment().endOf('month')],
         'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      }
  }, cb);

  cb(start, end, _token);

  $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
    $.post(
        '{{url("/filterdata")}}',
        {start: picker.startDate.format('YYYY-MM-DD'), end: picker.endDate.format('YYYY-MM-DD'), _token: _token},
        function(data, status){
          if (data.length !== 0) {
            var morrisData = [];
            $.each(data, function(key, val){
                morrisData.push({'tanggal': val.so_date, 'total' : val.total});
            });
            morrisLine.setData(morrisData);
          } else {
            //alert('Data tidak ditemukan!');
          }
        }
    );
  });

  function initMorris() {
    morrisLine = Morris.Line({
        element: 'morris-one-line-chart',
        parseTime: false,
        xkey: 'tanggal',
        ykeys: ['total'],
        resize: true,
        lineWidth:4,
        labels: ['Pendapatan'],
        lineColors: ['#1ab394'],
        pointSize:5,
    });
  }

});

function cb(start, end, token) {
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
}

</script>
<script src="{{ asset('inspinia/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('inspinia/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Morris -->
<script src="{{ asset('inspinia/js/plugins/morris/raphael-2.1.0.min.js') }}"></script>
<script src="{{ asset('inspinia/js/plugins/morris/morris.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('inspinia/js/inspinia.js') }}"></script>
<script src="{{ asset('inspinia/js/plugins/pace/pace.min.js') }}"></script>

<!-- Morris demo data-->
<script src="{{ asset('inspinia/js/demo/morris-demo.js') }}"></script>

<!-- ChartJS-->
<script src="{{ asset('inspinia/js/plugins/chartJs/Chart.min.js') }}"></script>
{{--<script src="{{ asset('inspinia/js/demo/chartjs-demo.js') }}"></script>--}}
<script src="{{ asset('data-grafik/dashboard-pendapatan-pertanggal.js') }}"></script>
<script src="{{ asset('data-grafik/dashboard-pendapatan-perjam.js') }}"></script>


@endsection
