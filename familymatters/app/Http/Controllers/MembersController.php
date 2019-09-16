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

    public function show()
    {

    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('members.edit', compact('member'));
    }

    public function update($id)
    {
        $member = Member::find($id);

        $member->name = request('name');
        $member->habbits = request('habbits');

        $member->save();

        return redirect('/members');
    }

    public function destroy()
    {

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
