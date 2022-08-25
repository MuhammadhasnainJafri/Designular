<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignPadController extends Controller
{
    /**
     * index
     */
    public function index()
    {
        return view('pages.sign_pad');
    }

    /**
     * save
     */
    public function save(Request $request)
    {
        $folderPath = public_path('uploads/');
        $image_parts = explode(";base64,", $request->signed);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath . uniqid() . '.' . $image_type;
        file_put_contents($file, $image_base64);

        return back()->with('success', 'Successfully saved the signature');
    }
}