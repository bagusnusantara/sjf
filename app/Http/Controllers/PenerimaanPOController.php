<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\purchase_planning_hdr;
use App\po_detail;
use App\po_hdr;
use App\st_um;
use App\st_location;
use App\ven_loc;
use App\item_planning;
use App\st_payment;
use App\st_agent;
use App\st_currency;
use App\data_buyer;
use App\st_delivery;
use App\st_delivery_transport;
use App\profil;
use App\penerimaanhdr;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PenerimaanPOController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function indexPO()
      {

           $hdr_all = po_hdr::all();
           $st_location_list = st_location::all();
           $item_planning_list = item_planning::all();
           $vendor_list = ven_loc::all();
           $st_payment_list = st_payment::all();
           $st_agent_list = st_agent::all();
           $st_currency_list = st_currency::all();
           $data_buyer_list = data_buyer::all();
           $st_delivery_list = st_delivery::all();
           $st_delivery_transport_list = st_delivery_transport::all();
           $profil_list = profil::all();
           $st_um_list = st_um::all();
           $po_detail_list = po_detail::all();
           $bulan = Carbon::now()->format('m');
           $tahun = Carbon::now()->format('Y');


           $mid=DB::table('po_hdr')
                     ->select(DB::raw('MID(po_num,12,4) as po'))
                     ->orderBy('entry_date','desc')
                     ->where('po_date','like','%')
                     ->limit(1)
                     ->get();

          $m= Carbon::now()->format('Y-m-d');
          //dd($mid);

           return view('PenerimaanPO.index',compact('detail','hdr_all','st_location_list','item_planning_list','vendor_list','st_payment_list','st_agent_list','st_currency_list','data_buyer_list','st_delivery_list','st_delivery_transport_list','profil_list','st_um_list','item_planning_list','po_detail_list','bulan','tahun','mid'));
      }

      public function createdetail($po_num)
      {
          //$po_detail_list = po_detail::all();
          $hdr= po_hdr::find($po_num);
          $st_um_list = st_um::all();
          $item_planning_list = item_planning::all();
          return view('PengajuanPembelian.create_detail',compact('hdr','st_um_list','item_planning_list'));
      }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeHeader(Request $request)
    {
      $this->validate($request,[
      ]);

      $hdr = new po_hdr();
      $hdr->po_num = $request->po_num;
      $hdr->st_location_kode = $request->st_location_kode;
      $hdr->st_currency_kode = 'IDR';
      $hdr->st_currency_kode_default = 'IDR';
      $hdr->st_agent_kode = $request->st_agent_kode;
      $hdr->po_date = Carbon::parse($request->po_date)->format('Y-m-d');
      $hdr->kurs = $request->kurs;
      $hdr->ppn = $request->ppn;
      $hdr->st_payment_kode = $request->st_payment_kode;
      $hdr->st_delivery_transport_kode = $request->st_delivery_transport_kode;
      $hdr->st_delivery_kode = $request->st_delivery_kode;
      $hdr->ven_loc_vendor = $request->ven_loc_vendor;
      $hdr->discount = $request->discount;
      $hdr->data_buyer_id = $request->data_buyer_id;
      $hdr->entry_date = Carbon::now()->setTimezone('Asia/Phnom_Penh');
      $hdr->id_company = 'AG1';

      $hdr->save();
      return redirect('/pengajuanpembelian')->with('successMsg','Header Successfully Saved');
    }

    public function storeDetail(Request $request)
    {
      $this->validate($request,[
      ]);

        $item_planning_kode = Input::get('item_planning_kode');
        $st_um_kode = Input::get('st_um_kode');
        $order_qty = Input::get('order_qty');
        $po_hdr_po_num = Input::get('po_hdr_po_num');
        foreach($item_planning_kode as $key => $value){
            $dtl = new po_detail();
            $dtl->po_hdr_po_num = $po_hdr_po_num[$key];
            $dtl->item_planning_kode = $item_planning_kode[$key];
            $dtl->st_um_kode = $st_um_kode[$key];
            $dtl->order_qty = $order_qty[$key];
            $dtl->po_hdr_po_num = $po_hdr_po_num[$key];
            $dtl->save();
        }

      return redirect('/pengajuanpembelian')->with('successMsg','Header Successfully Saved');
    }
    //
    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show()
    //  {
    //
    //       $hdr_list = po_hdr::all();
    //       return view('Purchasing.PengajuanPembelian.indexhdr',compact('hdr_list'));
    //  }
    public function showPO(Request $request,$po_num)
    {
      $hdr_all = po_hdr::find($po_num);
      $detail = po_detail::where('po_hdr_po_num', $hdr_all->po_num)->get();
      return view('PenerimaanPO.create_penerimaan', compact('hdr_all','detail'));
    }
    //
    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($po_num)
    {
        $hdr = po_hdr::find($po_num);
        return view('PengajuanPembelian.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
      $this->validate($request,[
      ]);

      $dtl = po_detail::find($kode);
      $PengajuanPembelian->kode = $request->kode;
      $PengajuanPembelian->kategori = $request->kategori;
      $PengajuanPembelian->save();
      return redirect()->route('PengajuanPembelian.index')->with('successMsg','Data Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyHeader($po_num)
    {
        $PengajuanPembelian = po_hdr::find($po_num);
        $PengajuanPembelian->delete();
        return redirect()->back()->with('successMsg','Data Successfully Deleted');
    }
    }
