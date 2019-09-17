<?php 
    $image_url = "../images/contact.png";
    require('../private/initialize.php');
    include('../private/header.php');
?>



<form action="contact.php" method="post">
    First Name: <input type="text" name="firstname" placeholder="Enter First Name"> <br>
    Last Name: <input type="text" name="lastname" placeholder="Enter Last Name"> <br>
   &nbsp; &nbsp; &nbsp; &nbsp; Email: <input type="text" name="email" placeholder="Enter Email"> <br>
   comments: <textarea name="comments" id="" cols="20" rows="5" placeholder="Enter Comments"></textarea> <br>
    <button value="Submit" name="submit">Submit</button>
</form>

<?php
if(isset($_POST['submit'])){
$fname = $_POST['firstname'];

echo "Hello " . $fname . ", Thank you so much for reaching out to us!\n" .
    "your comment will be reviewed and answered within a few moments." . "\n - FreshCoders";
}
?>



<?php
    include('../private/footer.php');
?>
