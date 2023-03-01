<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DashboardUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('dashboard.users.index', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create', [
            'roles' => Role::all()

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
        // $validatedData = $request->validate([
        //     'email' => 'required | email | unique:users',
        //     'role' => 'required',
        //     'kelas' => 'required',
        //     'nama' => 'required | max:100',
        //     'username' => 'required', 'min:3', 'max:100', 'unique:users',
        //     'password' => 'required | min:5 | max:15'
        // ]);
        
        // $validatedData['password'] = bcrypt($validatedData['password']);

        // $user =        User::create($validatedData);

        $user = User::create([
            'email' => $request->email,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        $user->assignRole($request->role);

        return redirect('/dashboard/users')->with('success', 'User has been added!');
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
        return view('dashboard.users.edit', [
            'user'=> $user,
        ]);

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
        $rules = [
            'email' => 'required | email | unique:users',
            'nama' => 'required | max:100',
            'username' => ['required', 'min:3', 'max:100', 'unique:users'],
            'password' => 'required | min:5 | max:15',
            'kelas' => 'required',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::where('id', $user->id)
            -> update($validatedData);

        return redirect('/dashboard/users')->with('success', 'User has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/dashboard/users')->with('success', 'User has been deleted!');
    }
}