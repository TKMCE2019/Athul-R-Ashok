
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<table class="table">
<thead class="thead-dark">
<tr>
<th scope"col">ID</th>
<th scope"col">NAME</th>
<th scope"col">B-GROUP</th>
<th scope"col">CONTACT</th>
<th scope"col">DELETE</th>
<th scope"col">UPDATE</th>
</tr>
</thead>
    <?php
        include 'connect.php';
        $query="SELECT * FROM USER";
        $result=mysqli_query($connect,$query);
        while($res=mysqli_fetch_array($result)){
            ?>
            <tbody>
            <tr>
                <td><?php echo $res['id']?></td>
                <td><?php echo $res['username']?></td>
                <td><?php echo $res['bgroup']?></td>
                <td><?php echo $res['contact']?></td>
                <td><a href="delete.php?id=<?php echo $res['id']; ?>"><input type="button" class="btn btn-primary"value="Delete"></a></td>
                <td><a href="update.php?id=<?php echo $res['id']; ?>"><input type="button" class="btn btn-primary"value="Update"></a></td>
        
            </tr>
        
        </tbody>
        <?php
        }
        ?>

</thead>




    
</body>
</html>