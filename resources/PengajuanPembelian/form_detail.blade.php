<div class="form-group"><label class="col-sm-2 control-label">PO NUM</label>
  <div class="col-sm-10"><input type="text" class="form-control" name="po_hdr_po_num" value="{{$hdr->po_num}}"></div>
</div>
<br>
<div class="form-group"><label class="col-sm-2 control-label">Nama Barang</label>
<div class="col-sm-10"><select class="form-control m-b" name="item_planning_kode">
            @foreach($item_planning_list as $item_planning)
                <option value="{{$item_planning->kode}}">{{ $item_planning->deskripsi }}</option>
            @endforeach
</select>
</div>
</div>
<br>
<div class="form-group"><label class="col-sm-2 control-label"><small>Satuan</small></label>
<div class="col-sm-10"><select class="form-control m-b" name="st_um_kode">
            @foreach($st_um_list as $st_um)
                <option value="{{$st_um->kode}}">{{ $st_um->deskripsi}}</option>
            @endforeach
</select>
</div>
</div>
<br>
<div class="form-group"><label class="col-sm-2 control-label">Order Qty</label>
  <div class="col-sm-10"><input type="text" class="form-control" name="order_qty"></div>
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
<!-- <div class="form-group"><label class="col-sm-2 control-label">Konversi</label>
  <div class="col-sm-10"><input type="text" class="form-control" name="konversi"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Tolerance</label>
  <div class="col-sm-10"><input type="text" class="form-control" name="tolerance"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Order Quantity</label>
  <div class="col-sm-10"><input type="text" class="form-control" name="order_qty"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Diskon</label>
  <div class="col-sm-10"><input type="text" class="form-control" name="discount"></div>
</div> -->
<div class="hr-line-dashed"></div>
