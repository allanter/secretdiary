<?php 

    session_start();

    $diaryContent = "";

    if (array_key_exists("id", $_COOKIE) && $_COOKIE['id']) {
        
        $_SESSION['id'] = $_COOKIE['id'];
    }

    if (array_key_exists("id", $_SESSION) && $_SESSION['id']) {
        

        
        include("connection.php");
        
        $query = "SELECT diary FROM `users` WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";
        
        $row = mysqli_fetch_array(mysqli_query($link, $query));
        
        $diaryContent = $row['diary'];
        
        } else {
        
            header("Location: index.php");
        }

    // Below onwards, brought over from index.php
    
    include("header.php"); 

?>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded navbar-fixed-top">
    
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
    <span class="navbar-toggler-icon"></span>
      
  </button>
    
  <a class="navbar-brand" href="#">Secret Diary</a>
    
    <!-- Nav bar not floating to the right with current BS codes. From  "mr-auto" to "ml-auto"-->

    <div class="navbar-nav ml-auto">

        <a href='index.php?logout=1'> <button class="btn btn-outline-success" type="submit">Logout</button></a>
    </div>
</nav>

    <!-- "container-fluid" stretches the text box. -->
    <div class="container-fluid" id="containerLoggedInPage">
        
            <textarea id="diary" class="form-control"><?php echo $diaryContent; ?></textarea>
        
        </div>
<?php

    include("footer.php");

?>