<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;

class MembersController extends Controller
{
    public function index()
    {
        $members = Member::all();

        return view('members.index', compact('members'));
    }

    public function create()
    {
      return view('members.create');
    }

    public function store()
    {
      $member = new Member();

      $member->name =  request('name');
      $member->habbits =  request('habbits');

      $member->save();

      return redirect('/members');

    }

}
