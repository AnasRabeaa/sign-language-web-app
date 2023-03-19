<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
   .container-fluid.main{
  position: relative; /* To make the navbar positions relative to this container */
  padding: 0;
}

.navbar-default {
  background-image: none;
  background-color: transparent; /* Make the menu become transparent */
  border-radius: 0px;
  border: 0;
  box-shadow: none;
  padding: 10px;
  position: absolute; /* Make the menu out of the document flow so it can placed anywhere without disturbing other widgets */
  top: 0;
  left: 0;
  right: 0;
  z-index: 10; /* If you delete this line, your menu link won't be clicked because it is behind the background. Applying this code bring the menu in front of the background */
}

.navbar-default .navbar-brand {
  font-family: Verdana;
  color: #ffffff;
  font-size: 20px;
}

.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #ffffff;
  background-color: transparent;
}

.navbar-default .navbar-nav > li > a {
  color: #ffffff;
}

.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #ffffff;
  background-color: transparent;
}

.navbar-default .navbar-toggle {
  border-color: transparent;
}

.navbar-default .navbar-toggle:hover {
  background-color: transparent;
}

.navbar-default .navbar-toggle:focus {
  background-color: transparent;
}

.navbar-default .navbar-toggle .icon-bar {
  background-color: #ffffff;
}

.carousel .background {
  background-position: center center;
  background-size: 100% 100%;
  background-repeat: no-repeat;
  height: 700px;
}

@media (max-width:991px) {
  .carousel .background {
    background-size: cover; /* To make the background image looks good */
  }
}

.carousel .background.a {
  background-image: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("./images/back.jpg");
}

.carousel-fade .carousel-inner .item {
  opacity: 0;
  transition: opacity 0.5s; /* The 0.5s describes the duration to make the opacity from 0 to 1 */
}

.carousel-fade .carousel-inner .active {
  opacity: 1;
}

/* CSS Hack to trigger GPU for smooth transition */
@media all and (transform-3d),
(-webkit-transform-3d) {
  .carousel-fade .carousel-inner > .item.next,
  .carousel-fade .carousel-inner > .item.active.right {
    opacity: 0;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  .carousel-fade .carousel-inner > .item.prev,
  .carousel-fade .carousel-inner > .item.active.left {
    opacity: 0;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  .carousel-fade .carousel-inner > .item.next.left,
  .carousel-fade .carousel-inner > .item.prev.right,
  .carousel-fade .carousel-inner > .item.active {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}
/* CSS Hack to trigger GPU for smooth transition */

.covertext {
  position: absolute; /* To make the div to be place anywhere. It is out of the document flow */
  top: 200px; /* The distance between the div with the top of document */
  left: 0px; /* Make the div full width */
  right: 0px; /* Make the div full width */
}

.title {
  font-family: Verdana;
  font-weight: 600;
  font-size: 40px;
  color: #ffffff;
  text-align: center;
  margin-bottom: 80px;
}

.subtitle {
  font-family: Verdana;
  font-size: 20px;
  color: #ffffff;
  text-align: center;
  margin-bottom: 80px;
}

.explore {
   display: flex;
   justify-content: center;
  text-align: center;

  
}


</style>
<body>

<?php include 'components/user_header.php'; ?>


<section class="landing">
   <div class="container-fluid main">


  <div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner" role="listbox">
      <div class="item active background a"></div>
    </div>
  </div>
  
  <div class="covertext">
    <div class="col-lg-10" style="float:none; margin:0 auto;">
      <h2 class="title">Learn ASL Online</h2>
      <h3 class="subtitle">Take learning American Sign Language into your own hands <br/> with our online ASL courses!</h3>
    </div>
    <div class="col-xs-12 explore">
      <a href="./test.php"><button type="button" class="btn explorebtn">AI MODEL</button></a>
    </div>
  </div>
  
</div>
</section>



<!-- courses section starts  -->

<section class="courses">

   <h1 class="heading">latest courses</h1>

   <div class="box-container">

      <?php
         $select_courses = $conn->prepare("SELECT * FROM `playlist` WHERE status = ? ORDER BY date DESC LIMIT 6");
         $select_courses->execute(['active']);
         if($select_courses->rowCount() > 0){
            while($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)){
               $course_id = $fetch_course['id'];

               $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
               $select_tutor->execute([$fetch_course['tutor_id']]);
               $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);
      ?>
      <div class="box">
         <div class="tutor">
            <img src="uploaded_files/<?= $fetch_tutor['image']; ?>" alt="">
            <div>
               <h3><?= $fetch_tutor['name']; ?></h3>
               <span><?= $fetch_course['date']; ?></span>
            </div>
         </div>
         <img src="uploaded_files/<?= $fetch_course['thumb']; ?>" class="thumb" alt="">
         <h3 class="title"><?= $fetch_course['title']; ?></h3>
         <a href="playlist.php?get_id=<?= $course_id; ?>" class="inline-btn">view playlist</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no courses added yet!</p>';
      }
      ?>

   </div>

   <div class="more-btn">
      <a href="courses.php" class="inline-option-btn">view more</a>
   </div>

</section>

<!-- courses section ends -->



<!-- quick select section starts  -->

<section class="quick-select">

   <h1 class="heading">quick options</h1>

   <div class="box-container">

      <?php
         if($user_id != ''){
      ?>
      <div class="box">
         <h3 class="title">likes and comments</h3>
         <p>total likes : <span><?= $total_likes; ?></span></p>
         <a href="likes.php" class="inline-btn">view likes</a>
         <p>total comments : <span><?= $total_comments; ?></span></p>
         <a href="comments.php" class="inline-btn">view comments</a>
         <p>saved playlist : <span><?= $total_bookmarked; ?></span></p>
         <a href="bookmark.php" class="inline-btn">view bookmark</a>
      </div>
      <?php
         }else{ 
      ?>
      <div class="box" style="text-align: center;">
         <h3 class="title">please login or register</h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>
      <?php
      }
      ?>

      <div class="box">
         <h3 class="title">top categories</h3>
         <div class="flex">
            <a href="search_course.php?"><i class="fas fa-code"></i><span>Sign Language</span></a>
            <a href="#"><i class="fas fa-chart-simple"></i><span>Alphabet</span></a>
            <a href="#"><i class="fas fa-pen"></i><span>Body Language</span></a>
            <a href="#"><i class="fas fa-chart-line"></i><span>ASL</span></a>
            <a href="#"><i class="fas fa-music"></i><span>Sound</span></a>
            <a href="#"><i class="fas fa-camera"></i><span>Photos</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>video</span></a>
            <a href="#"><i class="fas fa-vial"></i><span>Tests</span></a>
         </div>
      </div>

      <!-- <div class="box">
         <h3 class="title">popular topics</h3>
         <div class="flex">
            <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="#"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="#"><i class="fab fa-js"></i><span>javascript</span></a>
            <a href="#"><i class="fab fa-react"></i><span>react</span></a>
            <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="#"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>
         </div>
      </div> -->

      <div class="box tutor">
         <h3 class="title">become a tutor</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, laudantium.</p>
         <a href="admin/register.php" class="inline-btn">get started</a>
      </div>

   </div>

</section>

<!-- quick select section ends -->








<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script></script>
</body>
</html>