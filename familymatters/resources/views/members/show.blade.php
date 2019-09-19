<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <title>{{ $member->name }}</title>
  </head>
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/members">family matters</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="/members">Home <span class="sr-only"></span></a>
        <a class="nav-item nav-link" href="/members/create">Add Member</a>
        <a class="nav-item nav-link" href="/members/{{ $member->id }}/edit">Edit Member</a>
      </div>
    </div>
  </nav>
  <body>
    <h1 class="showName dayDone">{{ $member->name }}</h1>
    <img href="/{{ $member->id }}" class="profileImg" src="{{ $member-> image }}" alt="picture of {{ $member->name }}">
    <img class="plusSign" src="https://imgur.com/APYZtW5.png">
    <h3>current goal: {{ $member->habit }}</h3>
    <ul class="list-group">
  <li class="list-group-item list-group-item-primary">Day 1</li>
  <li class="list-group-item list-group-item-secondary dayDone">Day 2</li>
  <li class="list-group-item list-group-item-success">Day 3</li>
  <li class="list-group-item list-group-item-primary">Day 4</li>
  <li class="list-group-item list-group-item-secondary">Day 5</li>
  <li class="list-group-item list-group-item-success">Day 6</li>
  <li class="list-group-item list-group-item-primary">Day 7</li>
  <li class="list-group-item list-group-item-secondary">Day 8</li>
  <li class="list-group-item list-group-item-success">Day 9</li>
  <li class="list-group-item list-group-item-primary">Day 10</li>
  <li class="list-group-item list-group-item-secondary">Day 11</li>
  <li class="list-group-item list-group-item-success">Day 12</li>
  <li class="list-group-item list-group-item-primary">Day 13</li>
  <li class="list-group-item list-group-item-secondary">Day 14</li>
  <li class="list-group-item list-group-item-success">Day 15</li>
  <li class="list-group-item list-group-item-primary">Day 16</li>
  <li class="list-group-item list-group-item-secondary">Day 17</li>
  <li class="list-group-item list-group-item-success">Day 18</li>
  <li class="list-group-item list-group-item-primary">Day 19</li>
  <li class="list-group-item list-group-item-secondary">Day 20</li>
  <li class="confetti-button list-group-item list-group-item-success">Day 21</li>
</ul>
  </body>
</html>
