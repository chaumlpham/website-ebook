<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class UserController extends Controller
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
        $user = User::with('roles')->get();
        return view('admincp.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $user = new User();
        $user->name = $data['name'];
        $user->password = Hash::make($data['password']);
        $user->email = $data['email'];

        $user->save();

        return redirect()->back()->with('status', 'Thêm User thành công');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function phanvaitro($id)
    {
        $user = User::find($id);

        $role = Role::orderBy('id', 'ASC')->get();
        $all_column_roles = $user->roles->first();

        return view('admincp.user.phanvaitro', compact('user', 'role', 'all_column_roles'));
    }

    public function insertroles(Request $request, $id)
    {
        $data = $request->all();
        $user = User::find($id);
        $user->syncRoles($data['role']);

        return redirect()->back()->with('status', 'Thêm vai trò User thành công');
    }
}