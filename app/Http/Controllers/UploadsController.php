<?php

namespace App\Http\Controllers;

use App\Uploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload');
    }

public function foto()
    {
        return view('foto',[
            'image'=>Uploads::all()
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);
        if ($request->hasfile('filename')) {            
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());
            $request->file('filename')->move(public_path('images'), $filename);
             Uploads::create(
                    [                        
                        'data_file' =>$filename
                    ]
                );
                return view('foto',[
                    'image'=>Uploads::all()
                ]);
         
        }else{
            echo'Gagal';
        }
       
    }

}