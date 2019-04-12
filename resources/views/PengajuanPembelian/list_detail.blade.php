
<table class="table table-striped table-bordered table-hover dataTables-example" >
<thead>
<tr>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Satuan</th>
    <th>Order Quantity</th>
    <th>Harga</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
  @foreach($po_detail_list as $po_detail)
  <tr>
  <td>{{ $po_detail->item_planning_kode }}</td>
  <td>{{ $po_detail->item_planning->deskripsi }}</td>
  <td>{{ $po_detail->st_um_kode }}</td>
  <td>{{ $po_detail->order_qty }}</td>
  <td>{{ $po_detail->price }}</td>
  <td>
    <button type="button" class="btn btn-danger btn-xs" > Delete</i></button>
    <!-- <div>
      <form id="delete-form-{{ $po_detail->id }}" action="{{ route('PengajuanPembelianAll.destroy',$po_detail->id) }}" style="display: none;" method="POST">
        @csrf
        @method('DELETE')
      </form>
      <button type="button" class="btn btn-danger btn-xs" onclick="if(confirm('Are you sure? You want to delete this?')){
        event.preventDefault();
        document.getElementById('delete-form-{{ $hdr->po_num }}').submit();
      }else {  event.preventDefault();}"> Delete</i></button>
    </div> -->
  </td>
  @endforeach
  </tr>
</tbody>
</table>
