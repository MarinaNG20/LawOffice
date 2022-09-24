<?php

include'../shared/header.php';
include'../general/db.php';

 $conn= new mysqli("localhost","root","","office");

 if(isset($_GET['edit']))
 {
    $id=$_GET['edit'];
    $select="SELECT * FROM `lawyers` WHERE id=$id";
    $result=mysqli_query($conn,$select);
    $row=mysqli_fetch_assoc($result);
 
 if (isset($_POST['update'])) {

    $name =    $_POST["name"];
    $age =     $_POST["age"];
    $address=  $_POST["address"];
    $salary=   $_POST["salary"];
    $yearsEX=  $_POST["yearsEX"];
    $phone=    $_POST["phone"];
    $email =   $_POST["email"];
    $password= $_POST["password"];

    

    $image_name = time() . $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $location =   "../uploads/$image_name";
    move_uploaded_file($image_tmp, $location);


    $update = "UPDATE `lawyers` SET `name`='$name', age=$age,`address`='$address',salary='$salary',yearsEX=$yearsEX,phone='$phone',email='$email',`password`='$password',`image`='$image_name' WHERE id = $id";

    $query = mysqli_query($conn, $update);
    header("location:/odc/07/lawyer/allLawyers.php?return");


   
}
 }

?>



<div class="d-flex justify-content-center">
<form enctype="multipart/form-data" method="POST" class=" p-3 mb-5 rounded " style="width: 400px;">

    <div class="card p-3 mb-5 rounded frm" style="width: 20rem;">
        <?php if ($row['image'] != "") { ?>
            <div class="mx-auto" style="width: 200px;">
                <img src="../uploads/<?php echo $row['image']; ?>" width="200px;">
            </div>

        <?php } ?>
        <br>
        <div class="mx-auto" style="width: 200px;">
            <label for="formGroupExampleInput">image</label>
            <input type="file" name="image">
        </div>

        <br>
        <div class="mx-auto card-body">
        <p class="card-text " style="color:black; text-align:center;">Name</p>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
        </div>

        <div class="mx-auto card-body">
            <p class="card-text" style="color:black; text-align:center;">Age</p>
            <input type="number" class="form-control" name="age" value="<?php echo $row['age']; ?>">
        </div>

        <div class="mx-auto card-body">
            <p class="card-text" style="color:black; text-align:center;">Address </p>
            <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
        </div>

        <div class="mx-auto card-body">
            <p class="card-text" style="color:black; text-align:center;">Age</p>
            <input type="number" class="form-control" name="salary" value="<?php echo $row['salary']; ?>">
        </div>

        <div class="mx-auto card-body">
            <p class="card-text" style="color:black; text-align:center;">Age</p>
            <input type="number" class="form-control" name="yearsEX" value="<?php echo $row['yearsEX']; ?>">
        </div>


        <div class="mx-auto card-body">
            <p class="card-text" style="color:black; text-align:center;">Phone </p>
            <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
        </div>

        <div class="mx-auto card-body">
            <p class="card-text" style="color:black; text-align:center;">Email </p>
            <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
        </div>

        <div class="mx-auto card-body">
            <p class="card-text" style="color:black; text-align:center;">Password: </p>
            <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>">
        </div>




        <div class="mx-auto" style="width: 200px;">
            <button class="btn btn-primary btn-lg btn-block" name="update">Update</button>
        </div>
    </div>
</form>
</div>







<?php
include'../shared/footer.php';
?>