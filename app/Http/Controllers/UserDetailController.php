<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    public function index()
    {
        $userdetails = UserDetail::Where('enable_status', 1)->get();
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
 
    public function edituser(int $id)
    {
        $userdetails = UserDetail::find($id);
        return view('userdetails.edit', compact('userdetails'));
    }

    public function edit(Request $req, int $id)
    {
        $req->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|max:255|string',
            'mobile' => 'required|numeric',
        ]);

        $userdetail = UserDetail::find($id); // Corrected the case

        if ($userdetail) {
            $userdetail->name = $req->name;
            $userdetail->email = $req->email;
            $userdetail->mobile = $req->mobile;

            $userdetail->save();

            return redirect('userdetails/index')->with('status', "User Details Updated");
        }
        return redirect('userdetails/index')->with('error', "User Details not found");
    }


    public function destroy($id)
    {
        $userDetail = UserDetail::find($id);

        if ($userDetail) {
            $userDetail->enable_status = 3;
            $userDetail->save();

            return redirect('userdetails/index')->with('status', "User Details Deleted");
        }
    }
}
