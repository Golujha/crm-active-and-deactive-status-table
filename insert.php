<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-6 shadow mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 class="fw-bold text-center text-primary">Customers Details</h2>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">Contact</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">City</label>
                                    <input type="text" name="city" class="form-control">
                                </div>
                                
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">State</label>
                                    <input type="text" name="state" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">Pincode</label>
                                    <input type="text" name="pincode" class="form-control">
                                </div>
                            <div class="mb-3 ">
                                <input type="submit" value="create" name="create" class="btn btn-danger d-inline-block mt-4" style="margin-left:330px;font-size:25px;">
                            </div>
                        </form>

                        <?php
                            if(isset($_POST['create'])){
                                $id = $_POST['id'];
                                $name = $_POST['name'];
                                $contact = $_POST['contact'];
                                $email = $_POST['email'];
                                $city = $_POST['city'];
                                $state = $_POST['state'];
                                $pincode = $_POST['pincode'];

                                $query = mysqli_query($con,"insert into customers (name,contact, email, city, state, pincode) value ('$name','$contact','$email','$city','$state','$pincode')");

                                if($query){
                                    echo "<script> window.open('insert.php','_self')</script>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>            
        </div>
    </div>

</body>
</html>