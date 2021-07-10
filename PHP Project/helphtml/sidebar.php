  <!-- SIDEBAR navigation -->
  <div class="sidenav">
  <a href="profile.php">Main</a>
  <a href="news.php">News</a>
  <a href="addnews.php">Add News</a> 
  <?php 
  if($_SESSION['user']['login'] != 'admin'){
    echo "<a href='contact_form.php'>Contact Us</a> ";
  }
  ?>
  <?php 
  if($_SESSION['user']['login'] == 'admin'){
    echo "<a href='usermessage.php'>Messages</a>";//messages from users(accept to admin only)
    echo "<a href='report.php'>Save to File</a>";
  }
  ?>
  <div class="sidebar-a"><a  href="inc/logout.php">LOGOUT</a></div>
  
</div>