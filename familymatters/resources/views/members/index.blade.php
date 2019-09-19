<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <title>family matters</title>
  </head>
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">family matters</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="/members/create">Add Member</a>
      </div>
    </div>
  </nav>
  <body>
    <img class="banner" src="https://imgur.com/lJnQcL7.png" alt="family matters">
    <h4 class="quote">“We are what we repeatedly do.”  -Will Durant</h4>
    <p class="indexPageText">Your life becomes the sum of the habits you form. <br>
    Taking the time to form new habits can move you forward in the direction you are wanting to head in life.<br>
    Why not make it more fun by adding prizes and doing it as a family?</p>
    <h3>The Power of Forming Habits</h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/iUKwFuV6FaA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <h3 class="header">~family members~</h3>

    <div class="members">

        @foreach ($members as $member)
      <img href="/{{ $member->id }}" class="profileImg" src="{{ $member-> image }}" alt="picture of {{ $member->name }}">
        <a href="/members/{{ $member->id }}"><h3 class="name">{{ $member->name }}</h3></a>
        @endforeach

    </div>
  </body>
</html>
