<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="/js/confetti.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->
    <!-- <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
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
    <h1 class="showName">{{ $member->name }}</h1>
    <div class="allImages">
      <img class="showPageImgs" src="{{ $member-> image }}" alt="picture of {{ $member->name }}">
      <img class="plusSign" src="https://imgur.com/APYZtW5.png">
      <img class="showPageImgs"src="{{ $member->habit_image }}">
        <img class="plusSign" src="https://www.pngarts.com/files/4/Equal-Sign-Transparent-Image.png">
        <img class="showPageImgs"src="{{ $member->prize_image}}">
    </div>

    <h3>current goal: {{ $member->habit }}</h3>
    <ul class="list-group">
  <li id="day1" class="list-group-item list-group-item-primary">Day 1</li>
  <li id="day2" class="list-group-item list-group-item-secondary dayDone">Day 2</li>
  <li id="day3" class="list-group-item list-group-item-success">Day 3</li>
  <li id="day4" class="list-group-item list-group-item-primary">Day 4</li>
  <li id="day5" class="list-group-item list-group-item-secondary">Day 5</li>
  <li id="day6" class="list-group-item list-group-item-success">Day 6</li>
  <li id="day7" class="list-group-item list-group-item-primary">Day 7</li>
  <li id="day8" class="list-group-item list-group-item-secondary">Day 8</li>
  <li id="day9" class="list-group-item list-group-item-success">Day 9</li>
  <li id="day10" class="list-group-item list-group-item-primary">Day 10</li>
  <li id="day11" class="list-group-item list-group-item-secondary">Day 11</li>
  <li id="day12" class="list-group-item list-group-item-success">Day 12</li>
  <li id="day13" class="list-group-item list-group-item-primary">Day 13</li>
  <li id="day14" class="list-group-item list-group-item-secondary">Day 14</li>
  <li id="day15" class="list-group-item list-group-item-success">Day 15</li>
  <li id="day16" class="list-group-item list-group-item-primary">Day 16</li>
  <li id="day17" class="list-group-item list-group-item-secondary">Day 17</li>
  <li id="day18" class="list-group-item list-group-item-success">Day 18</li>
  <li id="day19" class="list-group-item list-group-item-primary">Day 19</li>
  <li id="day20" class="list-group-item list-group-item-secondary">Day 20</li>
  <li id="day21" class="confetti-button list-group-item list-group-item-success">Day 21</li>
</ul>
<button id="confetti" class="btn  btn-block btn-secondary"type="button" name="button">I DID IT - YAY ME!</button>
  </body>
</html>
