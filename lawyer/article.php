<?php

include'../shared/header.php';
include'../general/db.php';

 $conn= new mysqli("localhost","root","","office");

 if(isset($_POST['login']))
 {
     $title =   $_POST["title"];
     $des =     $_POST["des"];
     $auther=   $_POST["auther"];
     $ctime=    date('y-m-d',strtotime($_POST["ctime"]));
     $uptime=   date('y-m-d',strtotime($_POST["uptime"]));
     
 
 
     $image_name= time().$_FILES['image']['name'];
     $image_tmp=  $_FILES['image']['tmp_name'];
     $location="../uploads/$image_name";
     move_uploaded_file($image_tmp, $location);
 
 
 
 $art="INSERT INTO `articales` VALUES (null,'$title','$des','$auther','$image_name','$ctime','$uptime')";
 $aadd= mysqli_query($conn, $art);
 header("location:/odc/07/lawyer/showArticle.php?return");

 }

?>


<h1 class="text-center">  ADD Article </h1>
<div class="container col-6">
<div class="card-body">
<div class="row justify-content-center">  
            <form  action="" method="POST" enctype="multipart/form-data">

                <div class="form-group" >
                    <label class="row justify-content-center">Title </label>
                    <input class="form-control" type="text" name="title">
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center"> Description </label>
                   <textarea class="form-control" name=des></textarea>
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center">Auther </label>
                    <input class="form-control" type="text" name="auther">
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center">Create Time </label>
                    <input class="form-control" type="date" name="ctime">
                </div>
                
                <div class="form-group" >
                    <label class="row justify-content-center">Update Time </label>
                    <input class="form-control" type="date" name="uptime">
                </div>


                <div class="form-group">
                    <label class="row justify-content-center"> Image </label>
                    <input class="form-control" type="file" name="image">
                </div>
<br>
<div class="row justify-content-center">
                <button class="btn btn-info" type="submit" name="login" >submit</button>
</div>
</form>

</div>
</div>
</div>

<?php
include'../shared/footer.php';
?>