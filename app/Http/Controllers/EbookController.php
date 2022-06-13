<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucEbook;
use App\Models\Ebook;

class EbookController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('role:admin');
    }
    
    public function index()
    {
        $list_ebook = Ebook::with('danhmucebook')->orderBy('id', 'ASC')->get();
        return view('admincp.ebook.index')->with(compact('list_ebook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhmucebook=DanhmucEbook::orderBy('id','ASC')->get();
       
        return view('admincp.ebook.create')->with(compact('danhmucebook'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'tenebook' => 'required|unique:ebook|max:255',
                'tacgia' => 'required',
                'slug_ebook' => 'required|unique:ebook|max:255',
                'hinhanh' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
                'tomtat' => 'required',
                'docthu' => 'required',
                'kichhoat' => 'required',
                'danhmuc' =>'required',
            ],
            [
                'tenebook.unique' => 'Tên ebook đã sử dụng, vui lòng nhập tên khác',
                'slug_ebook.unique' => 'Slug ebook đã sử dụng, vui lòng nhập slug khác',
                'tenebook.required' => 'Chưa nhập Tên ebook',
                'tacgia.required' => 'Chưa nhập Tên Tác giả',
                'tomtat.required' => 'Chưa nhập tóm tắt ebook',
                'docthu.required' => 'Chưa nhập link đọc thử',
                'hinhanh.required' =>'Phải có hình ảnh của ebook',
                'slug_ebook.required' => 'Cần thêm slug của Ebook',
            ]
        );
        $ebook= new Ebook();
        $ebook->tenebook = $data['tenebook'];
        $ebook->tacgia = $data['tacgia'];
        $ebook->slug_ebook = $data['slug_ebook'];
        $ebook->tomtat = $data['tomtat'];
        $ebook->docthu = $data['docthu'];
        $ebook->kichhoat = $data['kichhoat'];
        $ebook->danhmuc_id =$data['danhmuc'];
        
        //them anh vao folder
        $get_image = $request->file('hinhanh');
        $get_name_image = $get_image->getClientOriginalName();
        $path = public_path('uploads/ebook');
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);

        $ebook-> hinhanh = $new_image;

        $ebook->save();

        return redirect()->back()->with('status', 'Thêm Ebook mới thành công!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ebook = Ebook::find($id);
        $danhmucebook=DanhmucEbook::orderBy('id','ASC')->get();
        return view('admincp.ebook.edit')->with(compact('ebook', 'danhmucebook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'tenebook' => 'required|max:255',
                'tacgia' => 'required',
                'slug_ebook' => 'required|max:255',
                'tomtat' => 'required',
                'docthu' => 'required',
                'kichhoat' => 'required',
                'danhmuc' =>'required',
            ],
            [
                'tenebook.required' => 'Chưa nhập Tên ebook',
                'tacgia.required' => 'Chưa nhập Tên Tác giả',
                'tomtat.required' => 'Chưa nhập tóm tắt ebook',
                'slug_ebook.required' => 'Cần thêm slug của Ebook',
            ]
        );
        $ebook= Ebook::find($id);
        $ebook->tenebook = $data['tenebook'];
        $ebook->tacgia = $data['tacgia'];
        $ebook->slug_ebook = $data['slug_ebook'];
        $ebook->tomtat = $data['tomtat'];
        $ebook->docthu = $data['docthu'];
        $ebook->kichhoat = $data['kichhoat'];
        $ebook->danhmuc_id =$data['danhmuc'];


        
        //them anh vao folder
        $get_image = $request->hinhanh;
        if($get_image)
        {
            $path = 'public/uploads/ebook' .$ebook->hinhanh;
            if(file_exists($path))
            {
                unlink($path);
            }
            $get_name_image = $get_image->getClientOriginalName();
            $path = public_path('uploads/ebook');
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $ebook-> hinhanh = $new_image;
        }

        $ebook->save();
        return redirect()->back()->with('status', 'Cập nhật Ebook thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ebook = Ebook::find($id);
        $path = 'public/uploads/ebook' .$ebook->hinhanh;
        if(file_exists($path))
        {
            unlink($path);
        }
        Ebook::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa Ebook thành công!');
    }
}