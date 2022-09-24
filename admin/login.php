<?php
include'../shared/header.php';
include'../general/db.php';

$conn= new mysqli("localhost","root","","office");

if(isset($_POST['login']))
{
    $name =    $_POST["name"];
    $age =     $_POST["age"];
    $address=  $_POST["address"];
    $phone=    $_POST["phone"];
    $email =   $_POST["email"];
    $password= $_POST["password"];
    $role=     $_POST["role"];


    $image_name= time().$_FILES['image']['name'];
    $image_tmp=  $_FILES['image']['tmp_name'];
    $location="../uploads/$image_name";
    move_uploaded_file($image_tmp, $location);



$add="INSERT INTO `admin` VALUES (null,'$name', $age,'$address', $phone, '$email', '$password', '$image_name', $role)";
$dd= mysqli_query($conn, $add);
/*
if($dd)
{
    echo'done';
}
else{
    echo'no';
}

*/
}

?>




<h1 class="text-center">  Add Admin </h1>
<div class="container col-6">
<div class="card-body">
<div class="row justify-content-center">  
            <form  action="" method="POST" enctype="multipart/form-data">

                <div class="form-group" >
                    <label class="row justify-content-center">Admin Name </label>
                    <input class="form-control" type="text" name="name">
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center">Admin age </label>
                    <input class="form-control" type="number" name="age">
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center">Admin address </label>
                    <input class="form-control" type="text" name="address">
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center">Admin phone </label>
                    <input class="form-control" type="text" name="phone">
                </div>
        

                <div class="form-group" >
                    <label class="row justify-content-center">Admin Email </label>
                    <input class="form-control" type="email" name="email">
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center">Admin password </label>
                    <input class="form-control" type="password" name="password">
                </div>

                <div class="form-group">
                    <label class="row justify-content-center">Admin Role </label>
                    <select name="role" class="form-control">
                        <option value="0">All access</option>
                        <option value="1">semi access</option>

                    </select>
                </div>

                <div class="form-group">
                    <label class="row justify-content-center" >Admin image </label>
                    <input class="form-control" type="file" name="image">
                </div>
<br>
<div class="row justify-content-center">
                <button class="btn btn-info" type="submit" name="login" >login</button>
</div>
</form>

</div>
</div>
</div>


<?php
include'../shared/footer.php';
?>