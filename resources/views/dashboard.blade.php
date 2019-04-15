@extends('template.index')

@section('main')

<div id="wrapper">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Dashboard</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">
                    <strong>Dashboard</strong>
                </li>
            </ol>
            @csrf
            <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;">
                <i class="fa fa-calendar"></i>
                <span>March 17, 2019 - April 15, 2019</span> <b class="caret"></b>
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

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Pendapatan Berdasarkan Jam </h5>
                    </div>
                    <div class="ibox-content">
                        <canvas id="barChartPerJam" height="140"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Pendapatan Berdasarkan Tipe Servis </h5>
                    </div>
                    <div class="ibox-content">
                        <div id="donutChartPerTipe" style="height: 300px"></div>
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

<script src="{{ asset('inspinia/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('inspinia/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('inspinia/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('inspinia/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>
{{--<script src="{{ asset('inspinia/js/plugins/daterangepicker/daterangepicker.js') }}"></script>--}}
<script src="{{ asset('inspinia/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('inspinia/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js') }}"></script>
<script src="{{ asset('inspinia/js/plugins/dataTables/datatables.min.js') }}"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<!-- Morris -->
<script src="{{ asset('inspinia/js/plugins/morris/raphael-2.1.0.min.js') }}"></script>
<script src="{{ asset('inspinia/js/plugins/morris/morris.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('inspinia/js/inspinia.js') }}"></script>
<script src="{{ asset('inspinia/js/plugins/pace/pace.min.js') }}"></script>

<!-- Morris demo data-->
<script src="{{ asset('data-grafik/dashboard-pendapatan-perjenis.js') }}"></script>

<!-- ChartJS-->
<script src="{{ asset('inspinia/js/plugins/chartJs/Chart.min.js') }}"></script>
{{--<script src="{{ asset('inspinia/js/demo/chartjs-demo.js') }}"></script>--}}
<script src="{{ asset('data-grafik/dashboard-pendapatan-pertanggal.js') }}"></script>
<script src="{{ asset('data-grafik/dashboard-pendapatan-perjam.js') }}"></script>

<script>
    $(document).ready(function(){

        $('.tagsinput').tagsinput({
            tagClass: 'label label-primary'
        });

        var start = moment().subtract(29, 'days');
        var end = moment();
        var _token = $('input[name="_token"]').val();
        var dateRange = $('#reportrange');

        pendapatanPerTanggal(start, end, _token);
        pendapatanPerJam(start, end, _token);
        pendapatanPerJenis(start, end, _token);

        dateRange.daterangepicker({
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

        cb(start, end);

        dateRange.on('apply.daterangepicker', function(ev, picker) {
            pendapatanPerTanggal(picker.startDate, picker.endDate, _token);
            pendapatanPerJam(picker.startDate, picker.endDate, _token);
            pendapatanPerJenis(picker.startDate, picker.endDate, _token);
        });
    });

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

</script>


@endsection
