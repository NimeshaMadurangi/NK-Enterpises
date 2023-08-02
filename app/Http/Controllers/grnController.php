<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grn;
use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use PDF;


class grnController extends Controller
{
    public function selectProduct(){

        $products = product::all();
        return view('addGRN', ['products' => $products]);
    }

    public function grnAdd(Request $request){

        // dd($request->all());
        $data =new grn;

        $this->validate($request,[

            'SupplierName'=>'required|max:100|min:5',  
            'productName'=>'required',  
            'grnNumber'=>'required|max:20|min:4',  
            'price'=>'required|numeric|',  
            'qut'=>'required|numeric',  
            'discount'=>'required|numeric', 
              
        ]);


        
        $data->supplier=$request->SupplierName;
        $data->product_id=$request->productName;
        $data->grn=$request->grnNumber;
        $data->price=$request->price;
        $data->qty=$request->qut;
        $data->cost=$request->cost;
        $data->discount=$request->discount;
        $data->description=$request->discrption;
        $data->create_date = Carbon::now();

        $data->save();
        return redirect()->back()->with('message','Create Succuessful');
        // return view('/manageGRN');
      
    }

    public function selectgrn(){
     

        $grns = grn::join('products', 'products.id', '=', 'grns.product_id')
              		->get(['grns.*', 'products.name']);

        return view('manageGRN', ['grns' => $grns]);
    }

    
    public function deletetask($id) {
        $task = grn::find($id);
        if ($task) {
            $task->delete();
        }
        // return view('manageGRN');
        return redirect()->back()->with('message', 'Deleted');
    }
    
    

    public function updatetaskview($id){
        $products = product::all();
        $task=grn::find($id);
        $data_list = [ 'grndata' => $task,
                        'products' => $products

        ];
        return view('updateGRN')->with($data_list);
    }

    public function updatetask(Request $request){

        $data = grn::find($request->id);
        $data->supplier=$request->SupplierName;
        $data->product_id=$request->productName;
        $data->grn=$request->grnNumber;
        $data->price=$request->price;
        $data->qty=$request->qut;
        $data->cost=$request->cost;
        $data->discount=$request->discount;
        $data->description=$request->discrption;
        $data->update();




        $grns = grn::join('products', 'products.id', '=', 'grns.product_id')
        ->get(['grns.*', 'products.name']);
        // return redirect()->back()->with('grns',$grns)->with('message','Update Succuessful');
        return view('manageGRN')->with('grns',$grns)->with('message','Create Succuessful');
    }

    public function get_product_info($id){

        $info = product::find($id);
        echo json_encode($info);

    }
    public function exportGRNPdf(){
        {
         
            $grns = grn::join('products', 'products.id', '=', 'grns.product_id')
                     ->get(['grns.*', 'products.name']);

            $pdf = PDF::loadView('PDF.grn',['grns' => $grns]);

            return $pdf->download('grn_report.pdf');
        }
    }
}
