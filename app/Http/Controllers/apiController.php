<?php

namespace App\Http\Controllers;

use App\personTable;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function addUsers(Request $request)
    {
        $user = new personTable();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->check = implode(',', $request->checked);
        $user->save();
        return redirect('/');
    }
    public function getUsers()
    {
        $user = personTable::all();
        return $user;
    }
    public function updateUser($id, Request $request)
    {
        $user = personTable::find($id);
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->check = $request->checked;
        $user->save();
        return redirect('/');
    }
    public function deleteUsers($id)
    {
        $user = personTable::find($id);
        $user->delete();
        return redirect('/');
    }
}
