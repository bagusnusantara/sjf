<html>
@extends('template.index')

@section('main')
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Modal Window</title>

</head>

<body>

    <div id="wrapper">


        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Detail Pengajuan Pembelian</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <strong>Pengajuan Pembelian</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content  animated fadeInRight">

            <div class="row">

                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>List Pengajuan Pembelian</h5>

                        </div>
                        <div class="ibox-content">
                            <div class="text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">
                                    +
                                </button>
                            </div>
                            <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Insert Detail Pengajuan Pembelian</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form method="POST" action="{{ route('PengajuanPembelian.update') }}" class="form-horizontal" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group"><label class="col-sm-2 control-label">N</label>
                                                  <div class="col-sm-10"><input type="text" class="form-control" name="po_num"></div>
                                                </div>

                                                <div class="form-group"><label class="col-sm-2 control-label">Kurs</label>
                                                  <div class="col-sm-10"><input type="text" class="form-control" name="kurs"></div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Discount (%)</label>
                                                  <div class="col-sm-10"><input type="text" class="form-control" name="diskon"></div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">PPN (%)</label>
                                                  <div class="col-sm-10"><input type="text" class="form-control" name="ppn"></div>
                                                </div>
                                                <div class="hr-line-dashed"></div>

                                                <!-- <div class="form-group">
                                                    <div class="col-sm-4 col-sm-offset-2">
                                                        <a href="{{ route('PengajuanPembelian.index') }}" class="btn btn-white" type="submit">Cancel</a>
                                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                                    </div>
                                                </div> -->
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>

                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                            <tr>
                                <th>No. PO S</th>
                                <th>Gudang</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            </table>

                        </div>
                    </div>



                        </div>
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



</body>
@stop
</html>
