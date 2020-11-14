<?php
include 'connect.php';
$id = $_GET['id'];
if(isset($_POST['update']))
{
    $username=$_POST['username'];
    $bgroup=$_POST['bgroup'];
    $contact=$_POST['contact'];
    $query="UPDATE USER SET  `username`='$username',`bgroup`='$bgroup',`contact`='$contact' WHERE id='$id'";
 
    $res=mysqli_query($connect,$query);
    if($res){
       header('location:display.php');
    }
    else{
        echo"failed";
    }

}
     $query="SELECT * FROM USER WHERE `id`=$id";
     $result=mysqli_query($connect,$query);
     while($res=mysqli_fetch_array($result)){
     
        $user = $res['username'];
        $blood = $res['bgroup'];
        $contact = $res['contact'];
    
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
  <h1>Blood Bank Details<h1>
  <table>
<div class="formgroup">
    <label for="username">NAME</label>
    <input type="text" class="form-control" name="username" value="<?php echo $user; ?>">
</div>
<div class="formgroup">
    <label for="bgroup">GROUP</label>
    <input type="text" class="form-control" name="bgroup" value="<?php echo $blood; ?>">
</div>
<div class="formgroup">
    <label for="contact">CONTACT</label>
    <input type="text" class="form-control" name="contact" value="<?php echo $contact; ?>">
</div>
<button type="submit" class ="btn btn-sucess" name='update'>Submit</button>
</form>
<h4><a href="display.php"><input type="button"class="btn btn-primary" value="View"></a></h4>
</table>

</body>
</html>