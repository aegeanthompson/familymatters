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
  <body>
    <img class="banner" src="https://imgur.com/lYYoUml.png" alt="family matters">
    <h3 class="header">~family members~</h3>

    <div class="members">

        @foreach ($members as $member)
      <img href="/{{ $member->id }}" class="profileImg" src="{{ $member-> image }}" alt="picture of {{ $member->name }}">
        <a href="/members/{{ $member->id }}"><h3 class="name">{{ $member->name }}</h3></a>
        @endforeach

    </div>
  </body>
</html>
