<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //以下を追記 
    //08 ControllerとRoutingの関係について理解しよう
    //課題５
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
  {
      // admin/profile/createにリダイレクトする
      return redirect('admin/profile/create');
  }
    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }

}
