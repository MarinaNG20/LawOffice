<?php
include'../shared/header.php';
include'../general/db.php';

$conn= new mysqli("localhost","root","","office");
if($_SESSION['isAdmin']){
    
if(isset($_POST['login']))
{
    $name =    $_POST["name"];
    $age =     $_POST["age"];
    $address=  $_POST["address"];
    $salary=   $_POST["salary"];
    $yearsEX=  $_POST["yearsEX"];
    $phone=    $_POST["phone"];
    $email =   $_POST["email"];
    $password= $_POST["password"];


    $image_name= time().$_FILES['image']['name'];
    $image_tmp=  $_FILES['image']['tmp_name'];
    $location="../uploads/$image_name";
    move_uploaded_file($image_tmp, $location);



$law="INSERT INTO `lawyers` VALUES (null,'$name', $age,'$address', $salary, $yearsEX, '$phone', '$email', '$password','$image_name')";
$l= mysqli_query($conn, $law);

if($l)
{
    echo'done';
}
else{
    echo'no';
}



}

}

?>




<h1 class="text-center"> Lawyer Login</h1>
<div class="container col-6">
<div class="card-body">
<div class="row justify-content-center">  
            <form  action="" method="POST" enctype="multipart/form-data">

                <div class="form-group" >
                    <label class="row justify-content-center">lawyer Name </label>
                    <input class="form-control" type="text" name="name">
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center">lawyer age </label>
                    <input class="form-control" type="number" name="age">
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center">lawyer address </label>
                    <input class="form-control" type="text" name="address">
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center">lawyer salary </label>
                    <input class="form-control" type="number" name="salary">
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center">lawyer yearsXE </label>
                    <input class="form-control" type="number" name="yearsEX">
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center">lawyer phone </label>
                    <input class="form-control" type="text" name="phone">
                </div>
        

                <div class="form-group" >
                    <label class="row justify-content-center">lawyer Email </label>
                    <input class="form-control" type="email" name="email">
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center">lawyer password </label>
                    <input class="form-control" type="password" name="password">
                </div>



                <div class="form-group">
                    <label class="row justify-content-center" >Lawyer image </label>
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