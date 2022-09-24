<?php

include'../shared/header.php';
include'../general/db.php';

 $conn= new mysqli("localhost","root","","office");


 if(isset($_GET['edit']))
 {
    $id=$_GET['edit'];
    $select="SELECT * FROM `articales` WHERE id=$id";
    $result=mysqli_query($conn,$select);
    $row=mysqli_fetch_assoc($result);
    

 if (isset($_POST['update'])) {

    $title =   $_POST["tile"];
    $des =     $_POST["des"];
    $auther=   $_POST["auther"];
    $uptime=   date('y-m-d',strtotime($_POST["uptime"]));

   

    

    $image_name = time() . $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $location =   "../uploads/$image_name";
    move_uploaded_file($image_tmp, $location);


    $update = "UPDATE `articales` SET `title`='$title', `description`='$des',`auther`='$auther',`updateTime`='$uptime',`image`='$image_name'  WHERE id = $id";

    $query = mysqli_query($conn, $update);
    header("location:/odc/07/lawyer/showArticle.php?return");


   
}
 }
?>

 <h1 class="text-center">  Update Article </h1>
<div class="container col-6">
<div class="card-body">
<div class="row justify-content-center">  
            <form  action="" method="POST" enctype="multipart/form-data">

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


                <div class="form-group" >
                    <label class="row justify-content-center"  style="color:black; text-align:center;">Title<br> </label>
                    <input class="form-control" type="text" name="title"  value="<?php echo $row['title']; ?>">
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center" style="color:black; text-align:center;"> Description<br> </label>
                   <textarea class="form-control" name="des"  value="<?php echo $row['description']; ?>"></textarea>
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center" style="color:black; text-align:center;">Auther<br> </label>
                    <input class="form-control" type="text" name="auther"  value="<?php echo $row['auther']; ?>">
                </div>

               
                
                <div class="form-group" >
                    <label class="row justify-content-center" style="color:black; text-align:center;">Update Time <br></label>
                    <input class="form-control" type="date" name="uptime"  value="<?php echo $row['updateTime']; ?>">
                </div>


                
<br>
<div class="row justify-content-center">
                <button class="btn btn-info" type="submit" name="update" >update</button>
</div>
</form>

</div>
</div>
</div>

<?php
include'../shared/footer.php';
?>