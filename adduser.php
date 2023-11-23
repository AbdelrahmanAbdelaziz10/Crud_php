<?php 
include_once('db.php');
$title="Add";
$name="";
$email="";
$mobile="";
$password="";
$btn_title="Save";
if(isset($_GET['action']) && $_GET['action']=='edit'){
    
    $id=$_GET['id'];
    $sql="SELECT * FROM users WHERE id = ".$id;
    $user =mysqli_query($con,$sql);
    if($user){
       $title="Update" ;
       $current_user=$user->fetch_assoc();
       $name=$current_user['name'];
       $email=$current_user['email'];
       $mobile=$current_user['mobile'];
       $password=$current_user['password'];
       $btn_title="Update";

    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Users App</title>
</head>

<body>
    <div class="container">
        <div class="wrapper p-5 m-5">
            <div class="d-flex p-2 justify-content-between">
                <h2><?php echo $title; ?> user</h2>
                <div><a href="index.php"><i data-feather="corner-down-left"></i></a></div>
            </div>
            <div class="row mx-4">
                <form action="index.php"  method="post">
                    <div class="d-flex justify-content-between ">
                    <div class="row" style="width:50% ;">
                    <div class="mb-3 " >
                    <label for="exampleFormControlInput1" class="form-label fs-5">Name</label>
                    <input type="text" value="<?php echo $name; ?>" class="form-control" id="exampleFormControlInput1" name="name"
                    placeholder="Enter Your Name">
                </div>
                <div class="mb-3" >
                    <label for="exampleFormControlInput1" class="form-label fs-5">Mobile</label>
                    <input type="number" value="<?php echo $mobile; ?>" class="form-control" name="mobile" id="exampleFormControlInput1" placeholder="Enter Your Mobile">
                </div>
                    </div>
                    <div class="row" style="width:50% ;">
                    <div class="mb-3" >
                    <label for="exampleFormControlInput1" class="form-label fs-5">Email</label>
                    <input type="email" value="<?php echo $email; ?>" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Enter Your Email">
                </div>
                    <div class="mb-3" >
                    <label for="exampleFormControlInput1" class="form-label fs-5">Password</label>
                    <input type="password" value="<?php echo $password; ?>" class="form-control" name="password" id="exampleFormControlInput1" placeholder="Enter Your Password">
                </div>

                    </div>
                    </div>
                    <?php 
                
                if (isset($_GET['id'])){?>


                    <input type="hidden" name="submit" value="<?php echo $_GET['id'] ?>">


             <?php   }
                
                ?>
                <input type="submit" class="btn btn-primary" value="<?php echo $btn_title; ?>" name="save">


                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/icon.js"></script>
  <script src="js/toster.js"></script>
  <script src="js/main.js"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>

