<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">

    <title>Add New Member</title>
  </head>
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

    <form action="/members">
      <input type="submit" value="Back" />
    </form>

  </body>
</html>
