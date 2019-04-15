@extends('template.index')

@section('main')

<body>

    <div id="wrapper">
      <div class="row wrapper border-bottom white-bg page-heading">
          <div class="col-sm-4">
              <h2>Order Pembelian</h2>
              <ol class="breadcrumb">
                  <li>
                      <a href="index.html">Dashboard</a>
                  </li>
                  <li class="active">
                      <strong>Order Pembelian</strong>
                  </li>
              </ol>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">
                            +
                        </button>
                    </div>
                    <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title">Insert Pengajuan Pembelian</h4>
                                </div>
                                <div class="modal-body">
                                  <form method="POST" action="{{url('/pengajuanpembelian')}}" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                                        @include('PengajuanPembelian.form_header')
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

                    @include('PengajuanPembelian.list_header')


                </div>
            </div>



                </div>
            </div>
        </div>
        </div>

</body>

</html>
@stop
