<div class="form-group"><label class="col-sm-2 control-label">Nomor PO</label>
  @php
    $convertToInt = (int)($mid[0]->po);
    $value = $convertToInt + 1;
    $convertToString = sprintf("%04d", $value);
  @endphp
  <div class="col-sm-10"><input type="text" class="form-control" name="po_num" value="PO.{{$bulan}}.{{$tahun}}.{{$convertToString}}" readonly="readonly"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Supplier</label>
<div class="col-sm-10"><select class="form-control m-b" name="ven_loc_vendor">
            @foreach($vendor_list as $vendor)
                <option value="{{$vendor->vendor}}">{{ $vendor->ven_loc_name }}</option>
            @endforeach
</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Cara Pembayaran</label>
<div class="col-sm-10"><select class="form-control m-b" name="st_payment_kode">
            @foreach($st_payment_list as $st_payment)
                <option value="{{$st_payment->kode}}">{{ $st_payment->deskripsi }}</option>
            @endforeach
</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Ekspedisi</label>
<div class="col-sm-10"><select class="form-control m-b" name="st_agent_kode">
            @foreach($st_agent_list as $st_agent)
                <option value="{{$st_agent->kode}}">{{ $st_agent->deskripsi }}</option>
            @endforeach
</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Mata Uang</label>
<div class="col-sm-10"><select class="form-control m-b" name="st_currency_kode">
            @foreach($st_currency_list as $st_currency)
                <option value="{{$st_currency->kode}}">{{ $st_currency->deskripsi }}</option>
            @endforeach
</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">PIC Pembeli</label>
<div class="col-sm-10"><select class="form-control m-b" name="data_buyer_id">
            @foreach($data_buyer_list as $data_buyer)
                <option value="{{$data_buyer->id}}">{{ $data_buyer->nama }} - {{ $data_buyer->alamat }}</option>
            @endforeach
</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Gudang Penerimaan</label>
<div class="col-sm-10"><select class="form-control m-b" name="st_location_kode">
  @foreach($st_location_list as $st_location)
      <option value="{{$st_location->kode}}">{{ $st_location->deskripsi }}</option>
  @endforeach
</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Cara Pengiriman</label>
<div class="col-sm-10"><select class="form-control m-b" name="st_delivery_kode">
            @foreach($st_delivery_list as $st_delivery)
                <option value="{{$st_delivery->kode}}">{{ $st_delivery->deskripsi }}</option>
            @endforeach
</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Transport Pengiriman</label>
<div class="col-sm-10"><select class="form-control m-b" name="st_delivery_transport_kode">
            @foreach($st_delivery_transport_list as $st_delivery_transport)
                <option value="{{$st_delivery_transport->kode}}">{{ $st_delivery_transport->deskripsi }}</option>
            @endforeach
</select>
</div>
</div>
<div class="form-group" id="data_1">
    <label class="col-sm-2 control-label">Tanggal Order</label>
    <div class="col-sm-10">
      <div class="input-group date">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="po_date">
      </div>
    </div>
</div>
<!-- <div class="form-group"><label class="col-sm-2 control-label">Kedatangan</label>
    <div class="input-group date">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="entry_date">
    </div>
</div> -->

<div class="form-group"><label class="col-sm-2 control-label">Kurs</label>
  <div class="col-sm-10"><input type="text" class="form-control" name="kurs"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Discount (%)</label>
  <div class="col-sm-10"><input type="text" class="form-control" name="discount"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">PPN (%)</label>
  <div class="col-sm-10"><input type="text" class="form-control" name="ppn"></div>
</div>
<div class="hr-line-dashed"></div>
