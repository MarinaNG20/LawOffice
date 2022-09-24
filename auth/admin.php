<?php
include'../shared/header.php';
include'../general/db.php';
$error='';

$conn=new mysqli("localhost","root","","office");

if (isset($_POST['submit']))
{

    $name =     $_POST["name"];
    $email=     $_POST["email"];

    $select = "SELECT * FROM `admin`";
    $admin = mysqli_query($conn, $select);
    /*$count= mysqli_num_rows($admin);
    $record=mysqli_fetch_assoc($admin);*/



    foreach ($admin as $row) {
        if ($name == $row['name'] && $email == $row['email']  && $row['role']==0) {
          $_SESSION['id'] = $row['id'];
          $_SESSION['role'] = $row['role'];
          $_SESSION['isAdmin'] = true;
          
          
          header("Location: /odc/07/auth/adminAuth.php");
          exit;
          break;
        }
        elseif ($name == $row['name'] && $email == $row['email']  && $row['role']==1) {
          $_SESSION['id'] = $row['id'];
          $_SESSION['role'] = $row['role'];
          $_SESSION['isAdmin'] = false;
          
          
          header("Location: /odc/07/admin/adminProfile.php");
          exit;
          break;
        }
         else {
          $_SESSION['isAdmin'] = false;
          $error='please enter correct login details';
        }
        
        
      }
    }

    /*if($count ==1)
    {
       
       
       //print_r($row);
       $row=mysqli_fetch_assoc($s);

       $id=        $row['id'];
       $name=      $row['name'];
       $age=       $row['age'];
       $address=   $row['address'];
       $phone=     $row['phone'];
       $email=     $row['email'];
       $password=  $row['password'];
       $image=     $row['image'];
       $role=      $row['role'];


       $_SESSION['ID']=        $id;
       $_SESSION['name']=      $name;
       $_SESSION['age']=       $age;
       $_SESSION['address']=   $address;
       $_SESSION['phone']=     $phone;
       $_SESSION['email']=     $email;
       $_SESSION['password']=  $password;
       $_SESSION['image']=     $image;
       $_SESSION['role']=      $role;


      

       if($row['role'] == 0)
       {
        header("location: ../admin/allAdmins.php ");
       }
       elseif($row['role']== 1)
       {
        header("location: ../admin/showAdmin.php ");
       }
       else
        {
        echo'incorect please try again';
        }
    }
    else
    {
      $error='please enter correct login details';
    }
    
}
*/
?>

<h1 class="text-center"> Admin login</h1>
<div class="container col-6">
<div class="card-body">
<div class="row justify-content-center">  
            <form  action="" method="POST" enctype="multipart/form-data">

                <div class="form-group" >
                    <label class="row justify-content-center">Admin Name </label>
                    <input class="form-control" type="text" name="name">
                </div>

                <div class="form-group" >
                    <label class="row justify-content-center">Admin Email </label>
                    <input class="form-control" type="email" name="email">
                </div>
<br>
                <div class="row justify-content-center">
                <button  type="submit" name="submit" class="btn btn-primary">Check</button>
                </div>
                <?php echo $error ?>

</div>
</div>
</div>