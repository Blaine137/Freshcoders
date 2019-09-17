<?php 
    $image_url = "../images/phpcode.jpg";
    require_once('../private/initialize.php');
    include('../private/header.php');
?>

<div class="IP">
    <?php 
            echo "<h2>User's IP Adress</h2>";
            $IP = $_SERVER['REMOTE_ADDR'];
            echo $IP;
        ?>
</div>


<div class="UserBrowser">
   <?php 
    echo "<h2>User's Browser</h2>";
    echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
    
    $browser = get_browser(null, true);
    print_r($browser);
  ?>
</div>

<div class="blackFriday">
  <?php
    echo "<h2>Time Till Black Friday</h2>";
    $currentDay = new DateTime('now', new DateTimeZone('America/New_York'));
    $bfDate = new DateTime('2019-11-29', new DateTimeZone('America/New_York'));
    $daysTill = $currentDay->diff($bfDate);
    echo $daysTill->format('%m months and %d days');
  ?>
</div>







<?php
    include('../private/footer.php');
?>
