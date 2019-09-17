<?php
    require_once('../private/initialize.php');

    //redirects to the login page if not logged in
    if(!isset($_SESSION['username'])){
      $url = "login.php";
      header("Location: " . $url);  
    }


    $image_url = "../images/resources.jpg";
    include('../private/header.php');
?>



<main>

</main>
<aside>

</aside>



<?php
    include('../private/footer.php');
?>
