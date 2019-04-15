<table class="table table-striped table-bordered table-hover dataTables-example" >
<thead>
<tr>
    <th>No. PO</th>
    <th>Supplier</th>
    <th>Tanggal PO</th>
    <th>Gudang</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
  @foreach($hdr_all as $hdr)
  <tr>
  <td>{{ $hdr->po_num }}</td>
  <td>{{ $hdr->ven_loc_vendor }}</td>
  <td>{{ $hdr->po_date }}</td>
  <td>{{ $hdr->st_location_kode }}</td>
  <td>
  <center>
        <a class="btn btn-primary btn-rounded btn-xs" href="pengajuanpembelian/{{$hdr->po_num}}/createdetail"><i class="fa fa-plus-circle"></i> Insert Detail</a><br>
        <a class="btn btn-success btn-rounded btn-xs" data-toggle="modal" data-target="#myModaldetail"><i class="fa fa-eye"></i> Show Detail</a><br>
        <a class="btn btn-warning btn-rounded btn-xs" href="pengajuanpembelian/{{$hdr->po_num}}/createdetail"><i class="fa fa-print"></i> Print Detail</a><br>

        <div class="modal inmodal fade" id="myModaldetail" tabindex="-1" role="dialog"  aria-hidden="true">
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
