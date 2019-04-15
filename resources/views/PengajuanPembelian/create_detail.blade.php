@extends('template.index')

@section('main')

<body>

    <div id="wrapper">
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

            <form id="id_form" action="jquery_dom_save.php" method="post">
            <table>
                <tr>
                <td><input type="button" name="add_btn" value="Tambah" id="add_btn" class="btn btn-primary btn-rounded"></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
            </tr>
                <tr>

                    <th><center>No</center></th><th><center>Nama Item</center></th><th><center>Satuan</center></th><th><center>Qty</center></th>
                    <th><center>Konversi</center></th><th><center>Tanggal Permintaan Kedatangan</center></th>
                    <td>&nbsp;</td>
                </tr>
                <tbody id="container">
        <!-- nanti rows nya muncul di sini -->
            </tbody>
            <tr>
                <td><input type="submit" name=submit value="Save"></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
              </tr>
            </table>
        </form>

        <!-- <div class="form-group" id="addmore">
        <label class="col-sm-2 control-label">Detail Order Pembelian <span style="color: red">*</span><br><br>
          <div id="add" class="label label-primary" style="margin-top: 10px">
            <i class="fa fa-plus-circle">Tambah</i>
          </div>
          <div id="remove" class="label label-primary" style="margin-top: 10px">
            <i class="fa fa-plus-circle">Remove</i>
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
      </div> -->
      </div>
        </div>




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script>
        $(document).ready(function() {
            var count = 0;

            $("#add_btn").click(function(){
                    count += 1;
                $('#container').append(
                             '<tr class="records">'
                         + '<td ><center><div id="'+count+'">' + count + '</div></center></td>'
                         + '<td><select class="form-control m-b" name="st_pendidikan_kode[]"><option value="">Pilih Satuan</option>@foreach($st_um_list as $st_um)<option value="{{ $st_um->kode }}">{{$st_um->deskripsi}}</option>@endforeach</select></td>'
                         + '<td><select class="form-control m-b" name="st_pendidikan_kode[]"><option value="">Pilih Satuan</option>@foreach($st_um_list as $st_um)<option value="{{ $st_um->kode }}">{{$st_um->deskripsi}}</option>@endforeach</select></td>'
                         + '<td><input id="nama_depan_' + count + '" name="nama_depan_' + count + '" type="text" class="form-control m-b"></td>'
                         + '<td><input id="nama_depan_' + count + '" name="nama_depan_' + count + '" type="text" class="form-control m-b"></td>'
                         + '<td><input id="nama_depan_' + count + '" name="nama_depan_' + count + '" type="text" class="form-control m-b"></td>'
                         //<div class="col-sm-3"><select class="form-control m-b" name="st_pendidikan_kode[]"><option value="">Pilih Pendidikan</option>@foreach($st_um_list as $st_um)<option value="{{ $st_um->kode }}">{{$st_um->deskripsi}}</option>@endforeach</select></div>
                         + '<td><a class="remove_item" href="#" ><input type="button" name="remove_btn" value="Hapus" id="add_btn" class="btn btn-danger btn-xs"></input></a>'
                         + '<input id="rows_' + count + '" name="rows[]" value="'+ count +'" type="hidden"></td></tr>'

                         // '<label class="col-sm-2 control-label"></label><div class="col-sm-2"><input type="text" class="form-control" name="jbtn[]" placeholder="Jabatan"></div><label class="col-sm-1 control-label"></label><div class="col-sm-2"><input type="date" class="form-control" name="sdate[]"></div><label class="col-sm-1 control-label"></label><div class="col-sm-2"><input type="date" class="form-control" name="edate[]"></div>'
                    );
                });

                $(document).on('click', '.remove_item', function(event){
                if (event.type == 'click') {
                $(this).parents(".records").fadeOut();
                        $(this).parents(".records").remove();

                        // $(".remove_item").live('click', function (ev) {
                        // if (ev.type == 'click') {
                        // $(this).parents(".records").fadeOut();
                        //         $(this).parents(".records").remove();
            }
            });
        });
        </script>
</body>

</html>
@stop
