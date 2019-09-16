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
      <label class="label" for="habbits">Habbit: </label>

      <div class="control">
        <input type="text" class="input" name="habbits" placeholder="Habbit" value="{{ $member->habbits }}">
      </div>
  </div>

      <div class="field">
        <div class="control">
          <button type="submit" class="button is-link">Update Member</button>
        </div>
      </div>
  </form>
@endsection
