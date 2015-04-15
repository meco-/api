<!-- Include some Important files :) -->
<?php 
include('bin/crud.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hamzalija Meco - Calendar API</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">Calendar API</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
        </div>
      </div>
    </div>

<div class="container">
      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>Calendar API</h1>
            <p class="lead">by Hamzalija Meco</p>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-6">
          </div>
        </div>
      </div>
</div> <!-- END CONTAINER HERE! -->


<div class="container content"> <!-- start new container for primary content! -->
  <h2>List All Users</h2>
  <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>User Name</th>
      <th>User Lastname</th>
      <th>Calendar ID </th>
      <th>Group ID</th>
      <th>Functions</th>
    </tr>
  </thead>
  <?php

      $foo = new database();
      $foo->connect();

      

  ?>
<!-- notat start
  <tbody>
    <tr>
      <td>1</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
    </tr>
    </tbody>
 notat end -->

  </table>
<div class="col-md-4">
<div id="createUserForm">
<form class="form-horizontal">
  <fieldset>
    <legend>Create New User</legend>
      <div class="form-group">  

        <label class="control-label" for="userName">User Name</label>
        <input type="text" class="form-control" id="userName">
        
        <label class="control-label" for="inputUserLastName">User Lastname</label>
        <input type="text" class="form-control" id="userLastName">

        <label class="control-label" for="inputUserEmail">User Email</label>
        <input type="text" class="form-control" id="userEmail">

        <label class="control-label" for="inputUserPassword">Password</label>
        <input type="password" class="form-control" id="userPassword">
      </div>
      <input type="submit" name="opret bruger" value="createUser">
  </fieldset>
</form>
</div> <!-- end create user form here! this is for some jQuery magic! -->
</div>
