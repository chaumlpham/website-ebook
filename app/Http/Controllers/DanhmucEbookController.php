<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DanhmucEbook;



class DanhmucEbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('role:admin');
    }

    public function index()
    {
        $danhmucebook=DanhmucEbook::orderBy('id','ASC')->get();
        return view('admincp.danhmucebook.index')->with(compact('danhmucebook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.danhmucebook.create');
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
                'tendanhmuc' => 'required|unique:danhmuc|max:255',
                'slug_danhmuc' => 'required|unique:danhmuc|max:255',
                'mota' => 'required|max:255',
                'kichhoat' => 'required',
            ],
            [
                'tendanhmuc.unique' => 'Tên danh mục đã sử dụng, vui lòng nhập tên khác',
                'slug_danhmuc.unique' => 'Slug danh mục đã sử dụng, vui lòng nhập slug khác',
                'tendanhmuc.required' => 'Chưa nhập Tên Danh mục',
                'mota.required' => 'Chưa nhập Mô tả',
            ]
        );
        $danhmucebook= new DanhmucEbook();
        $danhmucebook->tendanhmuc = $data['tendanhmuc'];
        $danhmucebook->slug_danhmuc = $data['slug_danhmuc'];
        $danhmucebook->mota = $data['mota'];
        $danhmucebook->kichhoat = $data['kichhoat'];
        $danhmucebook->save();
        return redirect()->back()->with('status', 'Thêm thành công!');
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
        $danhmucebook = DanhmucEbook::find($id);
        return view('admincp.danhmucebook.edit')->with(compact('danhmucebook'));
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
                'tendanhmuc' => 'required|max:255',
                'slug_danhmuc' => 'required|max:255',
                'mota' => 'required|max:255',
                'kichhoat' => 'required',
            ],
            [
                'slug_danhmuc.required' => 'Chưa nhập Slug danh mục',
                'tendanhmuc.required' => 'Chưa nhập Tên Danh mục',
                'mota.required' => 'Chưa nhập Mô tả',
            ]
        );
        $danhmucebook= DanhmucEbook::find($id);
        $danhmucebook->tendanhmuc = $data['tendanhmuc'];
        $danhmucebook->slug_danhmuc = $data['slug_danhmuc'];
        $danhmucebook->mota = $data['mota'];
        $danhmucebook->kichhoat = $data['kichhoat'];
        $danhmucebook->save();
        return redirect()->back()->with('status', 'Cập nhật thành công!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        DanhmucEbook::find($id)->delete();
        return redirect()->back()->with('status','Xóa thành công!');
    }
}