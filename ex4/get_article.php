<!DOCTYPE html>
<html lang="en">
<head>
  <title>Article</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-3">
<header>
<h2>My current News</h2>
</header>
<main>
  <div class="media border p-3">
    <div class="media-body">
      <h4><?php 
      echo $_GET["title"];
      ?><small><i> Posted on <?php
      echo $_GET["date"];
      ?></i></small></h4>
      <p><?php
      echo $_GET["content"];
      ?></p>    
    </div>
  </div>
  </main>
</div>

</body>
</html>