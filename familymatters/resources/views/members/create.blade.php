<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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
        <input type="text" name="habbits" value="Habbit">
      </div>

      <div>
        <button type="submit">Add Member</button>
      </div>
    </form>
  </body>
</html>
