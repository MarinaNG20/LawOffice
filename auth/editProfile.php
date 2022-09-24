<?php
include'../shared/header.php';
include'../general/db.php';

?>
<?php
$conn=new mysqli("localhost","root","","office");

$id = $_SESSION['id'];
$admins ="SELECT * FROM `admin` WHERE id=$id";
$data= mysqli_query($conn,$admins);
$admin = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {

    $name =    $_POST["name"];
    $age =     $_POST["age"];
    $address=  $_POST["address"];
    $phone=    $_POST["phone"];
    $email =   $_POST["email"];
    $password= $_POST["password"];
   

    

    $image_name = time() . $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $location =   "../uploads/$image_name";
    $x = move_uploaded_file($image_tmp, $location);


    $update = "UPDATE `admin` SET `name`='$name', age=$age,`address`='$address',phone='$phone',email='$email',`password`='$password',`image`='$image_name' WHERE id = $id";

    $query = mysqli_query($conn, $update);

    header("location:/odc/07/auth/adminAuth.php?return");


   
}


?>



<div class="d-flex justify-content-center">
<form enctype="multipart/form-data" method="POST" class=" p-3 mb-5 rounded " style="width: 400px;">

    <div class="card p-3 mb-5 rounded frm" style="width: 20rem;">
        <?php if ($admin['image'] != "") { ?>
            <div class="mx-auto" style="width: 200px;">
                <img src="../uploads/<?php echo $admin['image']; ?>" width="200px;">
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
            <input type="text" class="form-control" name="name" value="<?php echo $admin['name']; ?>">
        </div>

        <div class="mx-auto card-body">
            <p class="card-text" style="color:black; text-align:center;">Age</p>
            <input type="number" class="form-control" name="age" value="<?php echo $admin['age']; ?>">
        </div>

        <div class="mx-auto card-body">
            <p class="card-text" style="color:black; text-align:center;">Address </p>
            <input type="text" class="form-control" name="address" value="<?php echo $admin['address']; ?>">
        </div>

        <div class="mx-auto card-body">
            <p class="card-text" style="color:black; text-align:center;">Phone </p>
            <input type="text" class="form-control" name="phone" value="<?php echo $admin['phone']; ?>">
        </div>

        <div class="mx-auto card-body">
            <p class="card-text" style="color:black; text-align:center;">Email </p>
            <input type="email" class="form-control" name="email" value="<?php echo $admin['email']; ?>">
        </div>

        <div class="mx-auto card-body">
            <p class="card-text" style="color:black; text-align:center;">Password: </p>
            <input type="password" class="form-control" name="password" value="<?php echo $admin['password']; ?>">
        </div>




        <div class="mx-auto" style="width: 200px;">
            <button class="btn btn-primary btn-lg btn-block" name="update">Update</button>
        </div>
    </div>
</form>
</div>

<?php
 include'../shared/footer.php';?>