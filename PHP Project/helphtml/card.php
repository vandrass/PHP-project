<!--USER CARD HTML -->
<div id="side-card">
    <img src = "<?=$_SESSION['user']['avatar']?>" width="200" alt="" class="avatar">

  <h1>Hi!: <?= $_SESSION['user']['name']?></h1>
  <p class="title" >Your City: <?= $_SESSION['user']['city_name']?></p>  
  <a href='https://mail.google.com/'>Email: <?= $_SESSION['user']['email']?></a>  
  <a href="inc/logout.php">Logout</a>  
  
</div>