<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="templates/js/tutorial.js"></script>

</head>
<style>

</style>
<body>

<?php include 'components/user_header.php'; ?>

<!-- contact section starts  -->

<section class="about">
    
</section>


<!-- contact section ends -->











<!-- <?php include 'components/footer.php'; ?>   -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
    
</body>
</html>