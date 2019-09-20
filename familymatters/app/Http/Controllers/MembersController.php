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

    public function show($id)
    {
      $member = Member::findorFail($id);
      return view('members.show',
      compact('member'));
    }

    public function edit($id)
    {
        $member = Member::findorFail($id);
        return view('members.edit', compact('member'));
    }

    public function update($id)
    {
        $member = Member::findorFail($id);

        $member->name = request('name');
        $member->habit = request('habit');
        $member->image = request('image');
        $member->habit_image = request('habit_image');
        $member->prize_image = request('prize_image');

        $member->save();

        return redirect('/members');
    }

    public function destroy($id)
    {
      Member::findorFail($id)->delete();

      return redirect('/members');
    }

    public function store()
    {
      $member = new Member();

      $member->name =  request('name');
      $member->habit =  request('habit');
      $member->image = request('image');
      $member->habit_image = request('habit_image');
      $member->prize_image = request('prize_image');

      $member->save();

      return redirect('/members');

    }

}
