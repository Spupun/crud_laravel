<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    public function index()
    {
        $userdetails = UserDetail::get();
        // return $userdetails;
        return view('userdetails.index', compact('userdetails'));
    }
    public function create()
    {
        return view('userdetails.createUser');
    }
    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|email|max:255',
            'mobile' => 'required|numeric',
        ]);
        UserDetail::create([
            'name' => $req->name,
            'email' => $req->email,
            'mobile' => $req->mobile
        ]);
        return redirect('userdetails/index')->with('status', "User Details Saved");
    }
    public function edit(int $id)

    {
        $userdetails = UserDetail::find($id);
        return view('userdetails.edit', compact('userdetails'));

    }
    public function update(Request $req, int $id)
    {
        $req->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|email|max:255',
            'mobile' => 'required|numeric',
        ]);
        UserDetail::find($id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'mobile' => $req->mobile
        ]);
        return redirect('userdetails/index')->with('status', "User Details Updated");
 


    }
}
