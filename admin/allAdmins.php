<?php

include'../shared/header.php';
include'../general/db.php';

 //$role $_SESSION['role'];
 $conn= new mysqli("localhost","root","","office");
 $otherAdmins="SELECT * FROM `admin` where `role`=1 ";
 $data= mysqli_query($conn,$otherAdmins);
 //$row=mysqli_fetch_assoc($oa);
 
/* $c= mysqli_num_rows($da);

 if($c >1)
 {
 echo'right';
 }
 else
 {
    echo'wrong';
 }
 */

if(isset($_GET['delete']))
{


    $id=$_GET['delete'];
    $del="DELETE FROM `admin`WHERE id=$id";
    $result=mysqli_query($conn,$del);
    header("location:/odc/07/admin/allAdmins.php?return");

}
?>


<div class="row justify-content-center">  
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th colspan="2">Action</th>
</tr>
</thead>

<?php foreach($data as $data) {?>
    <tr>
        <td><?php echo $data['id'];?></td>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['age'];?></td>
        <td><?php echo $data['address'];?></td>
        <td><?php echo $data['phone'];?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo '<img src="../uploads/'.$data['image'].'" width="100px;" height="100px;">' ?> </td> 
        
        <td>

            <a href="/odc/07/admin/update.php?edit=<?php echo $data['id'];?>"
            class="btn btn-info">Edit</a>

            <a href="/odc/07/admin/allAdmins.php?delete=<?php echo $data['id'];?>"
            class="btn btn-danger">Delete</a>
        </td>

</tr>
<?php }?>
</table>
</div>
</body>


<?php
include '../shared/footer.php';
?>