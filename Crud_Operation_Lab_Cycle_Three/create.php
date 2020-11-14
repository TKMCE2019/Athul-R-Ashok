<?php
include 'connect.php';
if(count($_POST)!=0)
{
    extract($_POST);
    $query="INSERT INTO USER(username,bgroup,contact)VALUES ('$username','$bgroup','$contact')";
    echo 
    $result=mysqli_query($connect,$query);
    if($result==true){
        echo"Record inserted";
    }
    else{
        echo"failed";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
  <h1>Enter Details<h1>
<div class="formgroup">
    <label for="username">USER NAME</label>
    <input type="text" class="form-control" name="username">
</div>
<div class="formgroup">
    <label for="bgroup">BLOOD GROUP</label>
    <input type="text" class="form-control" name="bgroup">
</div>
<div class="formgroup">
    <label for="contact">CONTACT</label>
    <input type="text" class="form-control" name="contact">
</div>
<button type="submit" class ="btn btn-sucess">Submit</button>
</form>
<h4><a href="display.php"><input type="button"class="btn btn-primary" value="View"></a></h4>

</body>
</html>