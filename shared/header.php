<?php
session_start();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="../style/main.css"/>

<nav class="navbar navbar-expand-lg navvbar-dark bg-dark navbar-light bg-light">
  <a class="navbar-brand" href="/odc/07">law office</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="/odc/07/auth/admin.php">LOGIN</a>
  <a class="navbar-brand" href="/odc/07/lawyer/Article.php">Lawyer</a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      </li>

      <?php if($_SESSION['isAdmin']){ ?>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/odc/07/admin/login.php"> ADD Admin </a>
          <a class="dropdown-item" href="/odc/07/admin/allAdmins.php"> Show All Admins</a>
</li>

<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Lawyer
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/odc/07/lawyer/lawyerLogin.php">ADD Lawyer </a>
          <a class="dropdown-item" href="/odc/07/lawyer/allLawyers.php">All Lawyer </a>
          <a class="dropdown-item" href="/odc/07/lawyer/article.php"> ADD articial</a>
          <a class="dropdown-item" href="/odc/07/lawyer/allArticles.php"> All articial</a>



</li>

<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Lawyer
        </a>
        <div class="dropdown-menu">
          
          <a class="dropdown-item" href="/odc/07/lawyer/article.php"> ADD articial</a>
        
</li>
<?php }?>



<a class="navbar-brand" href="/odc/07/auth/logout.php">LOGOUT</a>

</div>


        

      
    </ul>
    
  </div>
</nav>