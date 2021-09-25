<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'users'=>User::all(),
        ];
        return view('admin.list-user')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255| unique:users',
            'password' => 'required|confirmed|min:6',
            'role' => 'required|string',
        ]);

        User::firstOrCreate([
            'name' =>  $request->name,
            'email' => $request->email ,
            'password'=>  Hash::make($request->password),
            'role'=> $request->role,
        ]);

        $request->session()->flash('status', 'User baru berhasil di buat');
        return redirect()->route('admin.list-users');
        // return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data=[
            'user'=>User::findOrFail($user->id),
        ];
        return view('admin.edit-admin')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|min:6',
            'role' => 'required|string',
        ]);

        User::where('id',$user->id)->update([
            'name' =>  $request->name,
            'email' => $request->email ,
            'password'=>  Hash::make($request->password),
            'role'=> $request->role,
        ]);

        $request->session()->flash('status', 'Data '.$user->name.' berhasil di perbaharui');
        return redirect()->route('admin.list-users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = User::findOrFail($user->id);
        $user->delete();
        request()->session()->flash('status', 'User '.$user->name.' telah dihapus!');
        return back();
    }
}
