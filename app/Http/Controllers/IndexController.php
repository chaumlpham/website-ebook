<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ebook;
use App\Models\DanhmucEbook;

class IndexController extends Controller
{
    public function home(){
        $ebook = Ebook::orderBy('id', 'DESC')->where('kichhoat', 0)->get();
        $danhmuc = DanhmucEbook::orderBy('id', 'DESC')->get();
        $newebook = Ebook::orderBy('id', 'DESC')->where('kichhoat', 0)->take(3)->get();
        return view('pages.home')->with(compact('ebook', 'newebook', 'danhmuc'));
    }

    public function all_ebook()
    {
        $danhmuc = DanhmucEbook::orderBy('id', 'DESC')->get();
        $ebook = Ebook::orderBy('id', 'DESC')->where('kichhoat', 0)->get();
        return view('pages.all_ebook')->with(compact('ebook', 'danhmuc'));
    }

    public function danhmuc($slug)
    {
        $danhmuc = DanhmucEbook::orderBy('id', 'DESC')->get();
        $danhmuc_id = DanhmucEbook::where('slug_danhmuc', $slug)->first();
        $tendanhmuc = $danhmuc_id->tendanhmuc;
        $danhmuc_display = DanhmucEbook::where('id', $danhmuc_id->id)->get();
        $ebook = Ebook::orderBy('id', 'DESC')->where('kichhoat', 0)->where('danhmuc_id', $danhmuc_id->id)->get();
        return view('pages.danhmuc')->with(compact('danhmuc', 'ebook', 'danhmuc_display', 'tendanhmuc'));
    }

    public function docebook($slug){
        $danhmuc = DanhmucEbook::orderBy('id', 'DESC')->get();
        $ebook = Ebook::with('danhmucebook')->where('slug_ebook', $slug)->where('kichhoat', 0)->first();
        $cungdanhmuc = Ebook::with('danhmucebook')->where('danhmuc_id', $ebook->danhmucebook->id)->whereNotIn('id', [$ebook->id])->get();
        return view('pages.ebook')->with(compact('ebook', 'danhmuc', 'cungdanhmuc'));
    }

    public function timkiem(Request $request)
    {
        $data = $request->all();
        $tukhoa = $data['tukhoa'];
        $danhmuc = DanhmucEbook::orderBy('id', 'DESC')->where('kichhoat', 0)->get();
        $ebook = Ebook::with('danhmucebook')->where('tenebook', 'LIKE', '%'.$tukhoa.'%')
            ->orWhere('tomtat', 'LIKE', '%'.$tukhoa.'%')
            ->orWhere('tacgia', 'LIKE', '%'.$tukhoa.'%')->get();
        return view('pages.timkiem')->with(compact('danhmuc', 'ebook', 'tukhoa'));
    }

    public function timkiem_ajax(Request $request)
    {
        $data = $request->all();
        if($data['keywords'])
        {
            $ebook = Ebook::where('kichhoat', 0)->where('tenebook', 'LIKE', '%'.$data['keywords'].'%')->get();
            $output = '<ul class="dropdown-menu" style="display:block;">';
            foreach($ebook as $key => $value)
            {
                $output .= '<li class="li_search_ajax"><a href="#">'.$value->tenebook.'</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }
    }
}