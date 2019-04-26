<!DOCTYPE html>
<html>
@extends('template.index')

@section('main')
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Order Penjualan</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body >
                <div class="wrapper wrapper-content p-xl">
                    <div class="ibox-content p-xl">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2><strong>ORDER PENJUALAN</strong></h2>
                                    <address>
                                        <strong>Ayam Geprek Pangeran Dago</strong><br>Bandung<br>
                                        <abbr>Kritik dan Saran :</abbr>  0817424220
                                    </address>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <h4><strong>No. Transaksi : </strong>{{ $hdr->so_num}}</h4>
                                    <h4><strong>Tanggal : </strong>{{ $hdr->so_date}}</h4>
                                    <h4><strong>Pelanggan :</strong>{{ $hdr->customer}} </h4>
                                    <h4><strong>No. Pajak :</strong>{{ $hdr->no_pajak}} </h4>
                                </div>
                            </div>

                            <div class="table-responsive m-t">
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                        <th>Kode Item</th>
                                        <th>Nama Item</th>
                                        <th>Jml</th>
                                        <th>Satuan</th>
                                        <th>Harga</th>
                                        <th>Disc (%)</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                      @foreach($dtl as $d)
                                      <tr>
                                        <td><small>{{ $d->item_planning_kode }}</small></td>
                                        <td><small>{{ $d->item_planning->deskripsi }}</small></td>
                                        <td><small>{{ $d->order_qty }}</small></td>
                                        <td><small>{{ $d->item_planning->st_um_kode }}</small></td>
                                        <td><small>Rp. {{ number_format($d->price,0)}}</small></td>
                                        <td><small>{{ $d->item_planning->discount }}</small></td>
                                        <td><small>Rp. {{ number_format($d->order_qty*$d->price,0)}}</small></td>
                                        <td></td>
                                      @endforeach
                                      </tr>
                                      <tbody>
                                      </table>
                                  <table class="table invoice-total">
                                <tbody>
                                <tr>
                                    <td><strong>Sub Total :</strong></td>
                                    <td>
                                      @php
                                      $i_new=0;
                                      @endphp
                                      @foreach($dtl as $d)
                                      @php
                                      $i=$d->order_qty*$d->price;
                                      $i_new=$i_new+$i;
                                      @endphp
                                      @endforeach
                                      Rp. {{ number_format($i_new,0)}}
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>PPN (10%)</strong></td>
                                    <td>
                                      @php
                                      $i_new=0;
                                      @endphp
                                      @foreach($dtl as $d)
                                      @php
                                      $i=$d->order_qty*$d->price;
                                      $i_new=$i_new+$i;
                                      @endphp
                                      @endforeach
                                      Rp. {{ number_format($i_new/10,0)}}
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Grand Total :</strong></td>
                                    <td>Rp. {{ number_format($hdr->grand_total,0)}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Cash :</strong></td>
                                    <td>
                                      @foreach($bayar as $b)
                                        {{ $b->nilai_pecahan_bayar }}
                                      @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Change :</strong></td>
                                    <td>
                                      @foreach($bayar as $b)
                                        {{ $b->nilai_bayar }}
                                      @endforeach
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>

    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>

    <script type="text/javascript">
        window.print();
    </script>

</body>
@stop
</html>
