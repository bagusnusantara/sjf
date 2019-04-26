@extends('template.index')

@section('main')

<body>

    <div id="wrapper">
      <div class="row wrapper border-bottom white-bg page-heading">
          <div class="col-sm-4">
              <h2>List Produk</h2>
              <ol class="breadcrumb">
                  <li>
                      <a href="index.html">Dashboard</a>
                  </li>
                  <li class="active">
                      <strong>List Produk</strong>
                  </li>
              </ol>
          </div>
      </div>

<div class="wrapper wrapper-content  animated fadeInRight">

    <div class="row">

        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>List Poduk</h5>

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
                                    <h4 class="modal-title">Insert Produk</h4>
                                </div>
                                <!-- <div class="modal-body">
                                  <form method="POST" action="{{url('/pengajuanpembelian')}}" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf

                                </div> -->

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
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Gudang</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($item_planning_list as $item_planning)
                      <tr>
                      <td>1</td>
                      <td>{{ $item_planning->kode }}</td>
                      <td>{{ $item_planning->deskripsi }}</td>
                      <td></td>
                      <td>

                      </td>
                      @endforeach
                      </tr>
                    </tbody>
                    </table>




                </div>
            </div>



                </div>
            </div>
        </div>
        </div>

</body>

</html>
@stop
