<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photo;
use App\Models\photos_category;
use Illuminate\Support\Facades\DB;

class photoCon extends Controller
{
    public function index()
    {
        return view('galeri', [
            "judul" => "Galeri foto",
            "kategori" => photos_category::all(),
            "photo" => photo::all(),
            "galeri" => photo::with(['kategori'])->latest()->paginate(9)
        ]);
    }
    public function show(photo $post){
        return view('photo',[
            'category'=>photos_category::all(),
            'post'=>$post
        ]);
    }
    public function category($kategori)
    {
        return view('galeri', [
            "judul" => "Galeri Foto",
            "kategori" => photos_category::all(),
            "photo" => photo::all(),
            "galeri" => photo::latest()->where('category_id', $kategori)->paginate(9),
        ]);
    }
    public function search(Request $request)
    {
        return view('galeri',  [
            "judul" => "galeri",
            "kategori" => photos_category::all(),
            "photo" => photo::all(),
            "galeri" => photo::where('title', 'like', "%" . $request->search . "%")->paginate(5)
     
        ]);
	}
  
  
}



// <!-- <?php
  
// namespace App\Http\Controllers;

// use App\Models\photo;
// use Illuminate\Http\Request;
// use Illuminate\Pagination\Paginator;
// use Illuminate\Support\Collection;
// use Illuminate\Pagination\LengthAwarePaginator;
  
// class photoCon extends Controller
// {
//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
// public function index(){
//     $query = photo::with(['photo','kategori'])->latest();
//     // if(request('search')){
//     //     return $query->where('title','like','%', request('search') ,'%')
//     //                  ->orWhere('body','like','%', request('search'),'%');
//     //  }

//     return view('galeri2',[
//         "title" => "all post",
//         // "postdb" => postdb::all() //asc
//         // "postdb" => postdb::latest()->get()
//         "galeri" => $query->get()

//     ]);
// }
// public function show(photo $post){
//     return view('pdb',[
//                 "title" => "single_posts",
//             "galeri"=>$post
//             ]);
// }
// // cara lama
// // public function show($id){
// //     return view('pdb',[
// //         "title" => "single_posts",
// //     "post"=>\App\Models\postdb::find($id)
// //     ]);
// // }
// } -->
