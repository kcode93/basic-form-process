<!DOCTYPE html>
<?php
  //if such form field is set, then store it in proper varaible
  if(isset($_GET['name'])){
    $localName = htmlentities($_GET['name']);
    $localLastName = htmlentities($_GET['lastName']);
    $localEmail = htmlentities($_GET['email']);
  }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="php Server and cliente info">
    <meta name="keywords" content="php, server name, client info">
    <meta name="author" content="Kenneth Garcia">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSS LINKS-->
    <link rel="stylesheet" href="./resources/css/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./resources/css/style.css">
    <title>my Form</title>
  </head><!--end of head-->
  <body>
    <div class="container">
      <h1>Form Using Get Method</h1>
      <form action="index.php" method="get">
        <div class="form-group">
          <label for="exampleInputName">Name</label>
          <input name="name" type="input" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name">
        </div><!--end of form-group-->
        <div class="form-group">
          <label for="exampleInputName">Last Name</label>
          <input name="lastName" type="input" class="form-control" id="exampleInputLastName" aria-describedby="emailHelp" placeholder="Enter Last Name">
        </div><!--end of form-group-->
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div><!--end of form-group-->
        <button id="btnSubmit" type="submit" class="btn btn-primary">Submit</button>
      </form><!--end of form-->
      <h1>Information Gathered from Form Using Get Method</h1>
        <ul class="list-group" class="hide">
          <li>Name: <strong><?php echo "$localName"; ?></strong></li>
          <li>Last Name: <strong><?php echo "$localLastName"; ?></strong></li>
          <li>Email: <strong><?php echo "$localEmail"; ?></strong></li>
        </ul><!--end of list-->
    </div><!--end of container-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./resources/js/main.js"></script>
  </body>
</html>
