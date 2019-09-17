@extends('layout')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="/members">family matters</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/members">Home <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="/members/create">Add New Member</a>
      <a class="nav-item nav-link" href="/members/{{ $member->id }}">{{ $member->name }}</a>
    </div>
  </div>
</nav>
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

@endsection
