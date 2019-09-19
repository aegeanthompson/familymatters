@extends('layout')

@section('title')
Edit {{ $member->name }}
@endsection

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
  <h3 class="editMemberHeader">Edit Member</h3>

  <form method="POST" action="/members/{{ $member->id }}">
      {{ method_field('PATCH') }}
      {{ csrf_field() }}

      <div class="field form-group row">
        <label class="label" for="name">Name: </label>

        <div class="control col-lg">
          <input type="text" class="input form-control" name="name" placeholder="Name" value="{{ $member->name }}">
        </div>
    </div>

    <div class="field form-group row">
      <label for="habit">Habit: </label>

      <div class="control col-lg">
        <input type="text" class="input form-control" name="habit" placeholder="Habit" value="{{ $member->habit }}">
      </div>
  </div>

  <div class="field form-group row">
    <label for="image">Image: </label>

    <div class="control col-lg">
      <input type="text" class="input form-control" name="image" placeholder="image link" value="{{ $member->image }}">
    </div>
</div>

<div class="field form-group row">
  <label for="image">Habit Image: </label>

  <div class="control col-lg">
    <input type="text" class="input form-control" name="habit_image" placeholder="habit image link" value="{{ $member->habit_image }}">
  </div>
</div>

<div class="field form-group row">
  <label for="image">Prize Image: </label>

  <div class="control col-lg">
    <input type="text" class="input form-control" name="prize_image" placeholder="prize image link" value="{{ $member->prize_image }}">
  </div>
</div>

      <div class="field">
        <div class="control">
          <button type="submit" class="btn btn-outline-secondary">Update Member</button>
        </div>
      </div>
  </form>


  <form method="POST" action="/members/{{ $member->id }}">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}

    <div class="field">
      <div class="control">
        <button type="submit" class="btn btn-outline-secondary">Delete Member</button>
      </div>
    </div>
  </form>

@endsection
