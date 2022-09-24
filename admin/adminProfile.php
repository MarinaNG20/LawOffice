<?php
include'../shared/header.php';
include'../general/db.php';

$conn=new mysqli("localhost","root","","office");

$id = $_SESSION['id'];
$admins ="SELECT * FROM `admin` WHERE id=$id";
$adminData= mysqli_query($conn,$admins);
$profile = mysqli_fetch_assoc($adminData);
?>
<br>
<h1 style=" color:white;  text-align: center;">Welcome <?php echo $profile['name'];?></h1>
</div>
<br>
<div class="d-flex justify-content-center p-3 mb-5 rounded">
    <div class="row">
        <div class="col">
            <div class="col-sm-12">
                <div class="frm card justify-content-center p-5 mb-5 rounded" style="width: 20rem;">
                    <img src="../uploads/<?php echo $profile['image']; ?>" width="200px;">
                    <br>


                    <div class="row justify-content-center">
                    <p style="color:black;"class="h card-title">age: <?php echo $profile['age']; ?></p>
                    </div>

                    <div class="row justify-content-center">
                    <p style="color:black;"class="h card-title">Address: <?php echo $profile['address']; ?></p>
                    </div>

                    <div class="row justify-content-center">
                    <p style="color:black;"class="h card-title">phone: <?php echo $profile['phone']; ?></p>
                    </div>

                    <div class="row justify-content-center">
                    <p style="color:black;"class="h card-title">Email: <?php echo $profile['email']; ?></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12">
                <div class="frm ">
                    <div class="card-body">
                        <h5 class="card-title">update info</h5>
                        <a href="/odc/07/auth/editProfile.php" class="btn btn-light">update</a>
                    </div>
                </div>
            </div>
     
        
 <?php
 include'../shared/footer.php';?>