<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <title>{{ $member->name }}</title>
  </head>
  <body>
    <h1 class="showName">{{ $member->name }}</h1>
    <img href="/{{ $member->id }}" class="profileImg" src="{{ $member-> image }}" alt="picture of {{ $member->name }}">
    <h3>current goal: {{ $member->habit }}</h3>
    <form action="/members">
      <input type="submit" value="Home" />
    </form>
    <form action="/members/{{ $member->id }}/edit">
      <input type="submit" value="Edit Member" />
    </form>
  </body>
</html>
