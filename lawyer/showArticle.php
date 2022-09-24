<?php
include'../shared/header.php';
include'../general/db.php';

$conn=new mysqli("localhost","root","","office");

$art ="SELECT * FROM `articales` ";
$para= mysqli_query($conn,$art);
$show = mysqli_fetch_assoc($para);
?>
<br>
<h1 style=" color:white;  text-align: center;">Welcome <?php echo $show['auther'];?></h1>
</div>
<br>

<div class=" d-flex justify-content-xl-center">
    <div class="row">
        <div class="col">
    <div class="col-xs-6">

                <div class="frm card justify-content-center p-5 mb-5 rounded" style="width: 20rem;">
                    <img src="../uploads/<?php echo $show['image']; ?>" width="200px;">
                    <br>


                    <div class="row justify-content-center">
                    <p style="color:black;"class="h card-title">Title <br> <?php echo $show['title']; ?></p>
                    </div>

                    <div class="row justify-content-center">
                    <p style="color:black;"class="h card-title">Description <br> <?php echo $show['description']; ?></p>
                    </div>

                    <div class="row justify-content-center">
                    <p style="color:black;"class="h card-title">Auther <br> <?php echo $show['auther']; ?></p>
                    </div>

                    <div class="row justify-content-center">
                    <p style="color:black;"class="h card-title">Create Time<br> <?php echo $show['createTime']; ?></p>
                    </div>

                    <div class="row justify-content-center">
                    <p style="color:black;"class="h card-title">Update Time <br> <?php echo $show['updateTime']; ?></p>
                    </div>


                </div>
            </div>
        </div>
    </div>


<div class="col-xs-6">
        <a href="/odc/07/lawyer/updateArticle.php?edit=<?php echo $show['id'];?>"
            class="btn btn-info">Edit</a>

</div>
 
 <?php
 include'../shared/footer.php';?>

















<?php
