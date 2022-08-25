<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\DB;

class contactController extends Controller
{
    function show(){
        return view('pages.contact', [
            'contacts' => contact::paginate(15),
        ]);
    }
    function create(){
        return view('pages.addContact');
    }
    function editView(Request $request){
        $contact=contact::find($request->id);
        return view('pages.editContact',['contact'=>$contact]);
    }
    function store(Request $request){
        // $request->request->remove('_token');
        contact::create($request->all());
        return redirect('contacts')->with('success', 'Contact has been created successfully!');;

    }
    function editContact(Request $request){
        $contact=contact::find($request->id);
        
        
        $contact->fill($request->all())->save();
        return redirect('contacts')->with('success', 'Contact has been Updated successfully!');;
    }
    function deleteContact(Request $request){
        contact::find($request->id)->delete();    
        return redirect('contacts')->with('success', 'Contact has been deleted successfully!');;
    }




    public function contactform(Request $request){
        return "successs";
    }
}
