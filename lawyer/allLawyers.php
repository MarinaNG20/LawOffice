<?php

include'../shared/header.php';
include'../general/db.php';

 $conn= new mysqli("localhost","root","","office");



 $l="SELECT * FROM `lawyers` ";
 $info= mysqli_query($conn,$l);
 
if(isset($_GET['delete']))
{


    $id=$_GET['delete'];
    $del="DELETE FROM `lawyers`WHERE id=$id";
    $result=mysqli_query($conn,$del);
    header("location:/odc/07/lawyer/allLawyers.php?return");

}
?>


<div class="row justify-content-center">  
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th >Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>salary</th>
                    <th>yearsEX</th>
                    <th >Phone</th>
                    <th >Email</th>
                    <th>Image</th>
                    <th colspan="2">Action</th>
</tr>
</thead>

<?php foreach($info as $data) {?>
    <tr>
        <td><?php echo $data['id'];?></td>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['age'];?></td>
        <td><?php echo $data['address'];?></td>
        <td><?php echo $data['salary'];?></td>
        <td><?php echo $data['yearsEX'];?></td>
        <td><?php echo $data['phone'];?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo '<img src="../uploads/'.$data['image'].'" width="100px;" height="100px;">' ?> </td> 
        
        <td>

            <a href="/odc/07/lawyer/edit.php?edit=<?php echo $data['id'];?>"
            class="btn btn-info">Edit</a>

            <a href="/odc/07/lawyer/allLawyers.php?delete=<?php echo $data['id'];?>"
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