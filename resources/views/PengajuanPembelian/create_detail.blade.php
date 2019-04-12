<html>
@extends('template.index')

@section('main')

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

          <div class="form-group" id="addmore">
          <label class="col-sm-2 control-label">Detail Order Pembelian <span style="color: red">*</span><br><br>
            <div id="add" class="label label-primary" style="margin-top: 10px">
              <i class="fa fa-plus-circle">Tambah</i>
            </div>
          </label>

          <div class="col-sm-2">
            <input type="text" class="form-control" name="po_hdr_po_num" value="{{$hdr->po_num}}" readonly="readonly">
          </div>

          <div class="col-sm-2">
            <input type="text" class="form-control" name="jbtn[]" placeholder="Jabatan">
          </div>
          <label class="col-sm-1 control-label">Tanggal Mulai</label>
          <div class="col-sm-2">
            <input type="date" class="form-control" name="sdate[]">
          </div>
          <label class="col-sm-1 control-label">Tanggal Berakhir</label>
          <div class="col-sm-2">
            <input type="date" class="form-control" name="edate[]">
          </div>
          <div class="col-sm-offset-2 col-sm-10"></div>
          </div>

          <div class="form-group" id="addmore2">
        	<label class="col-sm-2 control-label">Riwayat Pendidikan<span style="color: red">*</span><br>
        		<div id="add2" class="label label-primary" style="margin-top: 10px">
        			<i class="fa fa-plus-circle">Tambahkan Riwayat Pendidikan</i>
        		</div>
        	</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="po_hdr_po_num" value="{{$hdr->po_num}}" readonly="readonly">
          </div>
        	<div class="col-sm-3">
        		<select class="form-control m-b" name="st_pendidikan_kode[]">
        			<option value="">Pilih Satuan</option>
        			@foreach($st_um_list as $st_um)
        			<option value="{{ $st_um->kode }}">{{$st_um->deskripsi}}</option>
        			@endforeach
        		</select>
        	</div>

        	<div class="col-sm-2">
        		<input type="number" class="form-control" name="thn_masuk[]" placeholder="Tahun Masuk">
        	</div>
        	<div class="col-sm-2">
        		<input type="number" class="form-control" name="thn_keluar[]" placeholder="Tahun Keluar">
        	</div>
        	<div class="col-sm-offset-2 col-sm-10"></div>
        </div>
        </div>


        </div>
        </div>




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">
        	$('#add').click(function(){
        		$('#addmore').append('<label class="col-sm-2 control-label"></label><div class="col-sm-2"><input type="text" class="form-control" name="nama_prshaan[]" placeholder="Nama Perusahaan"></div><div class="col-sm-2"><input type="text" class="form-control" name="jbtn[]" placeholder="Jabatan"></div><label class="col-sm-1 control-label"></label><div class="col-sm-2"><input type="date" class="form-control" name="sdate[]"></div><label class="col-sm-1 control-label"></label><div class="col-sm-2"><input type="date" class="form-control" name="edate[]"></div>');
        	});

          $('#add2').click(function(){
		$('#addmore2').append('<div class="row"><label class="col-sm-2 control-label"></label><div class="col-sm-3"><select class="form-control m-b" name="st_pendidikan_kode[]"><option value="">Pilih Pendidikan</option>@foreach($st_um_list as $st_um)<option value="{{ $st_um->kode }}">{{$st_um->deskripsi}}</option>@endforeach</select></div><div class="col-sm-2"><input type="text" class="form-control" name="thn_masuk[]" placeholder="Tahun Masuk"></div><div class="col-sm-2"><input type="text" class="form-control" name="thn_keluar[]" placeholder="Tahun Keluar"></div></div>');
	});


        </script>
</body>
@stop
</html>
