<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\deliveryitem;
use App\Models\deliverynote;
use App\Models\contact;
use Illuminate\Support\Carbon;


// use App\Models\contact;
use Illuminate\Support\Facades\DB;


class invoiceController extends Controller
{
    
    function show(){
        
        return view('pages.invoices', [
            'deliverynote' => deliverynote::paginate(15),
        ]);
       
    }
    function create(){
        return view('pages.newInvoice');
    }
    function newDelivertNote(){
        
        $latestOrder = deliverynote::orderBy('created_at','DESC')->first();
        $order_nr = '#'.str_pad($latestOrder->id + 1, 8, "0", STR_PAD_LEFT);
        
        return view('pages.newDelivertNote',['orderNumer'=>$order_nr]);
    }
    function store(Request $request){
return $request;
        //adjust price some where
        $deliveryNote   = deliverynote::create($request->except('productCode', 'productName','quantity','delivered','outstanding','price','checkAll'));
        for ($i=0; $i < count($request->productCode); $i++) { 
             
            
             deliveryitem::create([
                'productCode'=>$request->productCode[$i],
                'productName'=>$request->productName[$i],
                'quantity'=>$request->quantity[$i],
                'delivered'=>1,
                'outstanding'=>$request->outstanding[$i],
                'deliverynote_id'=>$deliveryNote->id
            ]);
        }
        
        
        
        return redirect('invoices')->with('success', 'Delivery Note has been created successfully!');;

       

    }
    function editNote(Request $request)
    {
        $deliverynote=deliverynote::with('deliveryitems')->where('id',$request->id)->get();
      
         return view('pages.editdeliverynote',['deliverynote'=>$deliverynote[0]]);

        
    }
    function updateNote(Request $request)
    {
        # code...
    }

    public function search(Request $request)
{
   

        
        $deliverynotes=contact::select('contactName','id','invoiceAddress')->where('contactName','LIKE','%'.$request->search."%")->get();
        
        if($deliverynotes)
        {
        
        return Response(['items'=>$deliverynotes]);
        }else{
            return "error";
        }
    
}
public function printDeliveryNote(Request $request){
    $deliverynote=deliverynote::with('deliveryitems')->where('id',$request->id)->get();
      
    return view('pages.printDeliveryNote',['deliverynote'=>$deliverynote[0]]);
  
   
}
}