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

    <form method="POST" action="{{url('/pengajuanpembeliandtl')}}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
    <table>
        <tr>
          <td><input type="button" name="add_btn" value="+ Tambah" id="add_btn" class="btn btn-primary btn-rounded"></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        </tr>
        <tr>
        </tr>
        <tbody id="container">
            <!-- nanti rows nya muncul di sini -->
        </tbody>
            <tr>

                <td><input type="submit" name=submit class="btn btn-success " value="Simpan"></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
              </tr>
            </table>
        </form>

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
                         // + '<td ><center><div id="'+count+'">' + count + '</div></center></td>'
                         + '<td style="width:200px;"><select class="form-control m-b" name="item_planning_kode[]"><option>Pilih Item</option>@foreach($item_planning_list as $item_planning)<option value="{{ $item_planning->kode }}">{{$item_planning->deskripsi}}</option>@endforeach</select></td>'
                         + '<td style="width:120px;"><select class="form-control m-b" name="st_um_kode[]"><option>Satuan</option>@foreach($st_um_list as $st_um)<option value="{{ $st_um->kode }}">{{$st_um->deskripsi}}</option>@endforeach</select></td>'
                         + '<td style="width:100px;"><input id="koversi'  + count + '" name="konversi[]' + count + '" type="text" placeholder="Konversi" class="form-control m-b"></td>'
                         + '<td style="width:80px;"><input id="order_qty'  + count + '" name="order_qty[]' + count + '" type="text" placeholder="Qty" class="form-control m-b"></td>'
                         + '<td style="width:100px;"><input id="tolerance'  + count + '" name="tolerance[]' + count + '" type="text" placeholder="Tolerance" class="form-control m-b"></td>'
                         + '<td style="width:15%;"><a class="remove_item" href="#" ><input type="button" name="remove_btn" value="X" id="add_btn" class="btn btn-danger btn-xs"></input></a>'
                         + '<td style="width:0%;"><input id="' + count + '" name="po_hdr_po_num[]' + count + '" type="hidden" class="form-control m-b" value="{{$hdr->po_num}}"></td>'
                         + '<input id="rows_' + count + '" name="rows[]" value="'+ count +'" type="hidden"></td></tr>'
                    );
                });
                $(document).on('click', '.remove_item', function(event){
                if (event.type == 'click') {
                $(this).parents(".records").fadeOut();
                        $(this).parents(".records").remove();


            }
            });
        });
        </script>
</body>

</html>
@stop
