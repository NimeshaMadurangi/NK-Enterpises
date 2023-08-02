<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\orders;

use PDF;

class OrderController extends Controller
{
    public function index() {
        return view('create');
    }

    public function welcome() {
        return view('welcome');
    }

    public function upload(Request $request) {

        $request->validate([

            'date'=>'required|date|after_or_equal:today',
            'quantity'=>'required',
            'discount'=>'required',
            'amount'=>'required',


        ]);

        $orders = new orders;

        $orders->OrderDate=$request->date;
        $orders->CustomerCode=$request->code;
        $orders->CustomerName=$request->customername;
        $orders->Address=$request->ads;
        $orders->City=$request->city;
        $orders->Route=$request->route;
        $orders->BRN=$request->brn;
        $orders->Type=$request->type;
        $orders->ReffName=$request->reffname;
        $orders->ProductName=$request->productname;
        $orders->AvailableQty=$request->avqty;
        $orders->Qty=$request->quantity;
        $orders->Rate=$request->rate;
        $orders->Discount=$request->discount;
        $orders->Amount=$request->amount;
        $orders->Cost=$request->cost;
        $orders->Disc=$request->disco;
        $orders->GrossAmount=$request->gamount;
        $orders->NetAmount=$request->namount;

        $orders->save();

        return redirect()->back();

    }

    public function view() {

        $data = orders::all();
        
        return view('display' ,compact('data'));
    }

    public function delete($id) {

        $data = orders::find($id);

        $data->delete();

        return redirect()->back()->with('message','Deleted Successfully');

    }

    public function search(Request $request) {

        $search = $request->search;

        $data = orders::where('OrderDate','Like','%'.$search.'%')->orwhere('CustomerName','Like','%'.$search.'%')->orwhere('ReffName','Like','%'.$search.'%')->get();


        return view('display',compact('data'));
    }

    public function update_view($id) {

        $orders = orders::find($id);

        return view('update_page',compact('orders'));

        
    }

    public function update(Request $request,$id) {

        $orders = orders::find($id);

        $orders->OrderDate=$request->date;
        $orders->CustomerCode=$request->code;
        $orders->CustomerName=$request->customername;
        $orders->Address=$request->ads;
        $orders->City=$request->city;
        $orders->Route=$request->route;
        $orders->BRN=$request->brn;
        $orders->Type=$request->type;
        $orders->ReffName=$request->reffname;
        $orders->ProductName=$request->productname;
        $orders->AvailableQty=$request->avqty;
        $orders->Qty=$request->quantity;
        $orders->Rate=$request->rate;
        $orders->Discount=$request->discount;
        $orders->Amount=$request->amount;
        $orders->Cost=$request->cost;
        $orders->Disc=$request->disco;
        $orders->GrossAmount=$request->gamount;
        $orders->NetAmount=$request->namount;

        $orders->save();

        return redirect('/display')->with('message','Updated Successfully');

    }

    public function print_pdf($id) {

        $orders = orders::find($id);

        $pdf = PDF::loadView('pdf',compact('orders'));

        return $pdf->download('orders_details.pdf');

    }

    
}