@extends('layout')

@section('content')
  <h1>Edit Member</h1>

  <form method="POST" action="/members/{{ $member->id }}">
      {{ method_field('PATCH') }}
      {{ csrf_field() }}

      <div class="field">
        <label class="label" for="name">Name: </label>

        <div class="control">
          <input type="text" class="input" name="name" placeholder="Name" value="{{ $member->name }}">
        </div>
    </div>

    <div class="field">
      <label class="label" for="habit">Habit: </label>

      <div class="control">
        <input type="text" class="input" name="habit" placeholder="Habit" value="{{ $member->habit }}">
      </div>
  </div>

      <div class="field">
        <div class="control">
          <button type="submit" class="button">Update Member</button>
        </div>
      </div>
  </form>


  <form method="POST" action="/members/{{ $member->id }}">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}

    <div class="field">
      <div class="control">
        <button type="submit" class="button">Delete Member</button>
      </div>
    </div>
  </form>

  <form action="/members/{{ $member->id }}">
    <input type="submit" value="Back" />
  </form>
@endsection
