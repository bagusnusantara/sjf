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
        <a href="pengajuanpembelian/{{$hdr->po_num}}/createdetail"><button class="btn btn-outline btn-info  dim" type="button"><i class="fa fa-user-circle"></i> </button></a>
        <!-- <a href="#" action="pengajuanpembelian/{{$hdr->po_num}}/show" class="btn btn-xs btn-info modalMd" title="Show Data" data-toggle="modal" data-target="#modalMd"><span class="glyphicon glyphicon-eye-open">Show Detail PO</span></a>
        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#insert-form-{{ $hdr->po_num }}"><i class="fa fa-pencil"> Insert Detail</i></button>
        <div class="modal fade" id="insert-form-{{ $hdr->po_num }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="modalMdTitle"></h4>
                          </div>
                          <div class="modal-body">
                              @include('PengajuanPembelian.form_detail')
                              <div class="modalError"></div>
                              <div id="modalMdContent"></div>
                          </div>
                      </div>
                  </div>
        </div> -->

        <div>
          <form id="delete-form-{{ $hdr->po_num }}" action="pengajuanpembelian/{{$hdr->po_num}}/delete" style="display: none;" method="POST">
            @csrf
            @method('DELETE')
          </form>
          <button type="button" class="btn btn-danger btn-xs" onclick="if(confirm('Are you sure? You want to delete this?')){
            event.preventDefault();
            document.getElementById('delete-form-{{ $hdr->po_num }}').submit();
          }else {  event.preventDefault();}"> Delete</i></button>
        </div>
  </center>
  </td>
  @endforeach
  </tr>
</tbody>
</table>
