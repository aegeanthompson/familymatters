<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Members</title>
  </head>
  <body>
    <h1>Members</h1>

    @foreach ($members as $member)
    <li>{{ $member->name }}</li>
    @endforeach
  </body>
</html>
