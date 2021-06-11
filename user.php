<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
  
    </style>
</head>

<body>
<?php
    include 'configuration.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Congratulations! User account created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<div class="jumbotron bg-light">
        <h2 class="text-center text-primary">Create New User Account</h2>
</div>
   <div class="container">
          <form  method="post">
            <div class="form-group col-xs-6">
              <input class="form-control" placeholder="ENTER NAME OF USER" type="text" name="name" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="ENTER EMAIL" type="email" name="email" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="ENTER BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="form-group">
              <input class="form-button btn-primary" type="submit" value="CREATE" name="submit"></input>
            </div>
          </form>
        </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>