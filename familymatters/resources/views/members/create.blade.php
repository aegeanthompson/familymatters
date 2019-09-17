<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <title>Add New Member</title>
  </head>
  <body>
    <h1>Add New Family Member: </h1>

    <form method="POST" action="/members">
        {{ csrf_field() }}
      <div>
        <input type="text" name="name" value="Name">
      </div>

      <div>
        <input type="text" name="habit" value="Habit">
      </div>

      <div>
        <button type="submit">Add Member</button>
      </div>
    </form>
  </body>
</html>
