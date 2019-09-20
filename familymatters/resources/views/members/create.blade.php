@extends('layout')

@section('title')
Add Member
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
      </div>
    </div>
  </nav>
  <body>
    <h3 class="addMemberHeader">Add New Family Member: </h3>

    <form class="createForm" method="POST" action="/members">
        {{ csrf_field() }}

      <div class="field form-group row">
        <label for="name">Name: </label>

      <div class="control col-lg">
        <input type="text" class="input form-control" name="name" placeholder="Name">
      </div>
    </div>

    <div class="field form-group row">
        <label for="habit">Habit: </label>

      <div class="control col-lg">
        <input type="text" class="input form-control" name="habit" placeholder="Habit">
      </div>
    </div>

    <div class="field form-group row">
      <label for="image">Image: </label>

      <div class="control col-lg">
        <input type="text" class="input form-control" name="image" placeholder="image link">
      </div>
  </div>

  <div class="field form-group row">
    <label for="image">Habit Image: </label>

    <div class="control col-lg">
      <input type="text" class="input form-control" name="habit_image" placeholder="habit image link">
    </div>
  </div>

  <div class="field form-group row">
    <label for="image">Prize Image: </label>

    <div class="control col-lg">
      <input type="text" class="input form-control" name="prize_image" placeholder="prize image link">
    </div>
  </div>

      <div>
        <button class="btn btn-outline-secondary" type="submit">Add Member</button>
      </div>
    </form>

@endsection
