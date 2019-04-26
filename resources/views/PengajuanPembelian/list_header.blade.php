<table class="table table-striped table-bordered table-hover dataTables-example" >
<thead>
<tr>
    <th>No. PO</th>
    <th>Supplier</th>
    <th>Tanggal PO</th>
    <th>Gudang</th>
    <th>Status Aprroval</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
  @foreach($hdr_all as $hdr)
  <tr>
  <td>{{ $hdr->po_num }}</td>
  <td>{{ $hdr->ven_loc_vendor }}</td>
  <td>{{ $hdr->po_date }}</td>
  <td>{{ $hdr->id_approved }}</td>
  <td>{{ $hdr->st_location_kode }}</td>
  <td>
  <center>
        <a class="btn btn-primary btn-rounded btn-xs" href="pengajuanpembelian/{{$hdr->po_num}}/createdetail"><i class="fa fa-plus-circle"></i> Insert Detail</a><br>
        <a class="btn btn-primary btn-rounded btn-xs" data-mykode="{{ $hdr->po_num }}" data-toggle="modal" data-target="#myModalinsert"><i class="fa fa-plus-circle"></i> Insert Detail</a><br>
        <div class="modal inmodal fade" id="myModalinsert" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Insert Pengajuan Pembelian</h4>
                    </div>
                    <div class="modal-body">
                            <!-- <form id="id_form" action="jquery_dom_save.php" method="post"> -->
                            <form method="POST" action="{{url('/pengajuanpembeliandtl')}}" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                            <table>
                                <tr>
                                  <td><input type="button" name="add_btn" value="Tambah" id="add_btn" class="btn btn-primary btn-rounded"></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <th><center>No</center></th><th><center>Nama Item</center></th><th><center>Satuan</center></th><th><center>Qty</center></th>

                                    <td>&nbsp;</td>
                                </tr>
                                <tbody id="container">
                        <!-- nanti rows nya muncul di sini -->
                            </tbody>
                            </table>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <a class="btn btn-success btn-rounded btn-xs" data-toggle="modal" data-target="#myModaldetail"><i class="fa fa-eye"></i> Show Detail</a><br>
        <a class="btn btn-warning btn-rounded btn-xs" href="pengajuanpembelian/{{$hdr->po_num}}/createdetail"><i class="fa fa-print"></i> Print Detail</a><br>

        <div class="modal inmodal fade" id="insert" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Detail PO</h4>
                    </div>
                    <div class="modal-body">
                      @include('PengajuanPembelian.list_detail')
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div>
          <form id="delete-form-{{ $hdr->po_num }}" action="pengajuanpembelian/{{$hdr->po_num}}/delete" style="display: none;" method="POST">
            @csrf
            @method('DELETE')
          </form>
          <button type="button" class="btn btn-danger btn-rounded btn-xs" onclick="if(confirm('Are you sure? You want to delete this?')){
            event.preventDefault();
            document.getElementById('delete-form-{{ $hdr->po_num }}').submit();
          }else {  event.preventDefault();}"><i class="fa fa-trash"></i> Delete PO</button>
        </div>
  </center>
  </td>
  @endforeach
  </tr>
</tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    var count = 0;

    $("#add_btn").click(function(){
            count += 1;
        $('#container').append(
                     '<tr class="records">'
                 + '<td ><center><div id="'+count+'">' + count + '</div></center></td>'
                 + '<td class="col-md-1"><select class="form-control m-b" name="item_planning_kode[]"><option value="">Pilih Item</option>@foreach($item_planning_list as $item_planning)<option value="{{ $item_planning->kode }}">{{$item_planning->deskripsi}}</option>@endforeach</select></td>'
                 + '<td><select class="form-control m-b" name="st_um_kode[]"><option value="">Pilih Satuan</option>@foreach($st_um_list as $st_um)<option value="{{ $st_um->kode }}">{{$st_um->deskripsi}}</option>@endforeach</select></td>'
                 + '<td><input id="kode_prasarana' + count + '" name="order_qty' + count + '" type="text" value="#kode_prasarana" class="form-control m-b"></td>'
                 + '<td><a class="remove_item" href="#" ><input type="button" name="remove_btn" value="X" id="add_btn" class="btn btn-danger btn-xs"></input></a>'
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

<script>
            $('#myModalinsert').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal

                var id = button.data('mykode')


                var modal = $(this)

                modal.find('.modal-body #kode_prasarana').val(id);

            })
        </script>
