<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <br><br>

    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end justify-content-center">
            <a href="insert.php" class="btn btn-square btn-primary">Add new Customers</a>
        </div>
        <div class="text-center"><h1><u>Customers Details</u></h1></div><br>
        <table class="table table-striped table-hover table-bordered border-dark text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col">Pincode</th>
                    <th scope="col">IS-Active</th>
                </tr>
            </thead>
            <?php 
            $view = mysqli_query($con, "select * from customers");
            while($data = mysqli_fetch_array($view)){
                $id = $data['id'];
                $name = $data['name'];
                $contact = $data['contact'];
                $email = $data['email'];
                $city = $data['city'];
                $state = $data['state'];
                $pincode = $data['pincode'];
                

            ?>
            <tr>
                <td><?php echo $id ; ?></td>
                <td><?php echo $name ; ?></td>
                <td><?php echo $contact ; ?></td>
                <td><?php echo $email ; ?></td>
                <td><?php echo $city ; ?></td>
                <td><?php echo $state ; ?></td>
                <td><?php echo $pincode ; ?></td>
                <td>
                    <?php
                    if($data['status']==1) {
                        echo '<p> <a href="active.php?id='.$data['id'].'&status=0" class="btn btn-danger">Active</a></p>';
                    }
                    else
                    {
                        echo '<p> <a href="active.php?id='.$data['id'].'&status=1" class="btn btn-success">Hide</a></p>';
                    }
                    ?>
                </td>
            </tr>
            <?php }  ?>
             
        </table>
    </div>
    
</body>
</html>