<?php
    //Connect to Db
    require('connect.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--custom css-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_request2.css">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <title>Update user</title>
  </head>
  <body>

    <!--Form for admin to insert into sql table-->
    <div class = "item_form1">
        <form method="post" action = "UpdateUser_function.php?id=<?php echo $_GET['id']?>&&username=<?php echo $_GET['username']?>">
            <div class="container item_form1">
                <h2>
                    Update for 
                    <?php
                        $username =  $_GET['username'];
                        echo "<p class = \"text-success d-inline\">$username</p>";
                    ?>
                </h2> 
                <div>
                    <label for="userid"><b>User ID</b></label>
                    <input type="text" name="userid" value = "<?php echo $_GET['id']?>" required>
                </div>

                <div>
                    <label for="email"><b>Email</b></label>
                    <input type="text" name="email" value = "<?php echo $_GET['email']?>" required>
                </div>                
                
                <div>
                    <label for="username"><b>Username</b></label>
                    <input type="text" name="username" value = "<?php echo $_GET['username']?>" required>
                </div>
                
                <div>
                    <label for="psw1"><b>M???t kh???u</b></label>
                    <input type="text" name="psw1" value = "<?php echo $_GET['password']?>" required>
                </div>
                
                <div>
                    <label for="name"><b>H??? v?? t??n</b></label>
                    <input value= "<?php echo $_GET['fullname']?>" type="text" id="name" name="name" required>
                </div>    
                
                <div>
                    <label for="birthdate"><b>Ng??y sinh</b></label><br>
                    <input type="date" name = "birthdate" value = <?php echo $_GET['birthdate']?>>
                </div>
                
                <div>
                    <label for="PhoneNumber"><b>S??? ??i???n tho???i</b></label>
                    <input type="text" value = "<?php echo $_GET['phone']?>" name="PhoneNumber" required>
                </div>

                <div>
                    <label for="status"><b>T??nh tr???ng x??c th???c email</b></label>
                    <input type="text" value = "<?php echo $_GET['status']?>" name="status" required>
                </div>
                
                <div>
                    <label for="role"><b>Vai tr?? c???a b???n l??</b></label>
                </div>                    

                <div class="form-check form-check-inline">
                    <input type="radio" name="role" value = "1" <?php if($_GET['role'] == 1){echo "checked=checked";}?>> H???c sinh
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" name="role" value = "2" <?php if($_GET['role'] == 2){echo "checked=checked";}?>> Gi??o vi??n
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" name="role" value = "3" <?php if($_GET['role'] == 3){echo "checked=checked";}?>> ???y quy???n Admin
                </div>
                
                <!--Khi nh???n n??t cancel th?? ????ng form ????ng k?? l???i-->
            <div class="clearfix">
                
                <button type="submit" class= "btnOnClick btn btn-primary btn-lg btn-block">Update</button>
                
            </div>
                
    
            </div>
        </form>
    </div>
    
  </body>
</html>