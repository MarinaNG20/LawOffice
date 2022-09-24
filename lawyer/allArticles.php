<?php

include'../shared/header.php';
include'../general/db.php';

 $conn= new mysqli("localhost","root","","office");



 $l="SELECT * FROM `articales` ";
 $info= mysqli_query($conn,$l);
 
if(isset($_GET['delete']))
{


    $id=$_GET['delete'];
    $del="DELETE FROM `articales` WHERE id=$id";
    $result=mysqli_query($conn,$del);
    header("location:/odc/07/lawyer/showArticle.php?return");

}
?>


<div class="row justify-content-center">  
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>auther</th>
                    <th>CreateTime</th>
                    <th>UpdateTime</th>
                    <th>Image</th>
                    <th colspan="2">Action</th>
</tr>
</thead>

<?php foreach($info as $data) {?>
    <tr>
        <td><?php echo $data['title'];?></td>
        <td><?php echo $data['description'];?></td>
        <td><?php echo $data['auther'];?></td>
        <td><?php echo $data['createTime'];?></td>
        <td><?php echo $data['updateTime'];?></td>
        <td><?php echo '<img src="../uploads/'.$data['image'].'" width="100px;" height="100px;">' ?> </td> 
        
        <td>

            <a href="/odc/07/lawyer/updateArticle.php?edit=<?php echo $data['id'];?>"
            class="btn btn-info">Edit</a>

            <a href="/odc/07/lawyer/allArticles.php?delete=<?php echo $data['id'];?>"
            class="btn btn-danger">Delete</a>
        </td>

</tr>
<?php }?>
</table>
</div>
</body>


<?php
include'../shared/footer.php';
?>
