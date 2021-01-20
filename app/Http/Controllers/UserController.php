<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::with(['role', 'group', 'company', 'address'])->paginate();
        return view ('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* validacija podataka: ime mora biti manje od 255 znakova, biti unique, itd. */
        $validated = $request->validate([
            'first_name' => 'required|unique:users|max:50',
            'last_name' => 'required|unique:users|max:50',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|unique:users|max:50',
            'phone_number' => 'required|unique:users|max:50',
        ]);
        $user = User::create($validated);
        return view('users.show', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $user = User::with(['role'])
            ->findOrFail($id);
        
        return view('users.show', compact('user'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $roles = Role::pluck('name', 'id');
       

        return view('users.edit',
            compact('user', 'roles', 'countries')
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
        $validated = $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|max:255',
            'role_id' => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->fill($validated);
        $user->save();

        return redirect()->route('users.show', ['user' => $user->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        User::destroy($id);

        return redirect()->route('users.index');
    }
}
