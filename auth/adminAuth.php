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


        <div class="col">
            <div class="col-sm-12 ">
                <div class="frm rounded">
                    <div class="card-body">
                        <h5 class="card-title">Add new Admin</h5>
                        <a href="/odc/07/admin/login.php" class="btn btn-light">ADD</a>
                    </div>
                </div>
            </div>
            <br>
            
            <div class="col-sm-12">
                <div class="frm ">
                    <div class="card-body">
                        <h5 class="card-title">Edit your data</h5>
                        <a href="/odc/07/auth/editProfile.php" class="btn btn-light">EDIT</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-sm-12">
                <div class="frm ">
                    <div class="card-body">
                        <h5 class="card-title">Add Lawyer</h5>
                        <a href="/odc/07/lawyer/lawyerLogin.php" class="btn btn-light">Add Lawyer</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-sm-12">
                <div class="frm ">
                    <div class="card-body">
                        <h5 class="card-title">show All Lawyer</h5>
                        <a href="/odc/07/lawyer/allLawyers.php" class="btn btn-light">Show Lawyer</a>
                    </div>
                </div>
            </div>
            <br>

            <div class="col-sm-12">
                <div class="frm ">
                    <div class="card-body">
                        <h5 class="card-title">Add Article</h5>
                        <a href="/odc/07/lawyer/article.php" class="btn btn-light">Add Article</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-sm-12">
                <div class="frm ">
                    <div class="card-body">
                        <h5 class="card-title">show all Articlies</h5>
                        <a href="/odc/07/lawyer/allArticles.php" class="btn btn-light">show Article</a>
                    </div>
                </div>
            </div>
     
                </div>
            </div>
        </div>

    </div>
</div>
 <?php
 include'../shared/footer.php';?>