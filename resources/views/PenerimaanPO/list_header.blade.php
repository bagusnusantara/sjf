<table class="table table-striped table-bordered table-hover dataTables-example" >
<thead>
<tr>
    <th>No. PO</th>
    <th>Supplier</th>
    <th>Tanggal PO</th>
    <th>Gudang</th>
    <th>Status</th>
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
  <td>{{ $hdr->status_po }}</td>
  <td>
  <center>
        <a class="btn btn-primary btn-rounded btn-xs" href="penerimaanPO/{{$hdr->po_num}}/show"><i class="fa fa-plus-circle"></i> Terima Barang</a><br>
  </center>
  </td>
  @endforeach
  </tr>
</tbody>
</table>
