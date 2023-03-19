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
    ul {
        list-style: none;
    }
    li {
        font-size: 20px;
        cursor: pointer;
        
    }

    .allbuttons-4 {
        display: flex;
        justify-content: space-between;
        cursor: pointer;
        background-color: #fff;
        padding: 10px;
        margin-top: 10px;
    }

</style>
<body>

<?php include 'components/user_header.php'; ?>

<!-- contact section starts  -->

<section class="about">
    
    <nav class="navbar">
    <div class="add-class text-center search">
        <!-- <input  class="search-txt" id="inputClassName" type="text" placeholder="Search here" name="option" /> -->
     
     <a class="search-btn" id="add-button" href="#" >
        <!-- <i class="fas fa-search"></i> -->
     </a>
    </div>
    </nav>

    <div class="tut-container row">
        <div class="image" id="image-loader">
            <!-- <img src="../static/ISL_Gifs/29-hello.gif" class="tutorial-image"> -->
            <img src="static/ISL_Gifs/65-sign-language-interpreter.gif" class="tutorial-image">
        </div>
        <div class="grey-bgs ml-5" style="padding: 5px;">
            <div class="center">
                <br>
                <h3 style="color:#A020F0;font-size: 35px;"> Most Commonly Used Phrases <i style="color:#A020F0;font-size: 35px;" class="fab fa-galactic-senate"></i></h3>
                <br>
            </div>
            <div class="outer-column">
                <div class="column invisible">
                    <ul>
                        <li><button id="62" value="62" type="button" style="font-family: 'Patua One', cursive;">Shall i help you</button></li>
                        <li><button id="47" value="47" type="button" style="font-family: 'Patua One', cursive;">Lets go for lunch </button></li>

                        <li><button id="53" value="53" type="button" style="font-family: 'Patua One', cursive;">Nice to Meet you</button></li>
                        <li><button id="81" value="81" type="button" style="font-family: 'Patua One', cursive;">What is your name</button></li>

                        <li><button id="56" value="56" type="button" style="font-family: 'Patua One', cursive;">Please call me later</button></li>

                        <li><button id="79" value="79" type="button" style="font-family: 'Patua One', cursive;">What is today's date</button></li>



                        <li><button id="20" value="20" type="button" style="font-family: 'Patua One', cursive;">Do
                                        you have money</button></li>

                        <li><button id="83" value="83" type="button" style="font-family: 'Patua One', cursive;">Where is the bathroom</button></li>


                    </ul>
                </div>
                <div class="column ">
                    <ul>
                        <li class="in-column"><button id="29" value="29" type="button" style="font-family: 'Patua One', cursive;">Hello </button></li>
                        <li class="in-column"><button id="33" value="33" type="button" style="font-family: 'Patua One', cursive;">I am fine </button></li>
                        <li class="in-column"><button id="68" value="68" type="button" style="font-family: 'Patua One', cursive;">Take Care </button></li>
                        <li class="in-column"><button id="34" value="34" type="button" style="font-family: 'Patua One', cursive;">I am Sorry </button></li>


                        <li class="in-column"><button id="11" value="11" type="button" style="font-family: 'Patua One', cursive;">Be Careful</button></li>
                        <li class="in-column"><button id="54" value="54" type="button" style="font-family: 'Patua One', cursive;">Open the door </button>
                        </li>
                        <li class="in-column"><button id="3" value="3" type="button" style="text-align: left;font-family: 'Patua One', cursive;">Any Questions
                                   </button></li>

                        <li class="in-column"><button id="5" value="5" type="button" class="invisible" style="font-family: 'Patua One', cursive;">Are you Hungry </button></li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</br>
    <div class="alpha-containers">
        <div class="alpha">
            <div class=" alphabetcard">
                <h5 class="card-header text-center " style="font-size: 26px;margin-bottom: 0px;">Alphabets<span style="color:#A020F0"><i class="fas fa-sort-alpha-up ml-"></i></span>
                </h5>
                <div class=" myflexes">
                    <div class="allbuttons-4">
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="a" id="a" type="button">A</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="b" id="b" type="button">B</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="c" id="c" type="button">C</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="d" id="d" type="button">D</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="e" id="e" type="button">E</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="f" id="f" type="button">F</button></a></span>

                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="g" id="g" type="button">G</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="h" id="h" type="button">H</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="i" id="i" type="button">I</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="j" id="j" type="button">J</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="k" id="k" type="button">K</button></a></span>

                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="l" id="l" type="button">L</button></a></span>

                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="m" id="m" type="button">M</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="n" id="n" type="button">N</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="o" id="o" type="button">O</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="p" id="p" type="button">P</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="q" id="q" type="button">Q</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="r" id="r" type="button">R</button></a></span>

                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="s" id="s" type="button">S</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="t" id="t" type="button">T</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="u" id="u" type="button">U</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="v" id="v" type="button">V</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="w" id="w" type="button">W</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="x" id="x" type="button">X</button></a></span>
                        <span><a href="#test"><button
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive;"
                                             value="y" id="y" type="button">Y </button></a></span>
                        <span><a href="#test"> <button 
                                             style="border:none;background-color:transparent;font-size:30px;font-family: 'Patua One', cursive ;"
                                              value="z" id="z" type="button">Z</button></a></span>
                    </div>

                </div>

            </div>
        </div>
</br>
</br>
        <div class="objects">
            <div class=" newcard">
                <h5 class="mycard-header text-center " style="font-size: 26px;margin-bottom: 0px;">Place, Time and Objects
                    <span style="color:#A020F0"><i class="far fa-clock ml-"></i> </span>
                </h5>
                <div class="mycard-body">
                    <div class="outer-column">
                        <div class="column shifter">
                            <ul style="list-style: none;">
                                <li><a href="#test"><button class="mylistbtn"
                                                       style="border: none;background-color: transparent;padding:10px;font-size: larger;font-family: 'Patua One', cursive; "
                                                       id="64" value="64" type="button">Shop</button></a></li>
                                                       <li><a href="#test"><button class="mylistbtn"
                                                        style="border: none;background-color: transparent;padding:10px;font-size: larger; font-family: 'Patua One', cursive;"
                                                       id="69" value="69" type="button">Temple</button></a>
                                </li>

                                <li><a href="#test"><button class="mylistbtn"
                                                       style="border: none;background-color: transparent;padding:10px;font-size: larger;font-family: 'Patua One', cursive; "
                                                       id="61" value="61" type="button">Saturday</button></a></li>


                                                       
                                                       
                                                       
                                                       <li><a href="#test"><button class="mylistbtn"
                                                        style="border: none;background-color: transparent;padding:10px;font-size: larger;font-family: 'Patua One', cursive; "
                                                        id="57" value="57" type="button">Police station</button></a></li>
                                                        
                                                        
                                                        <li><a href="#test"><button class="mylistbtn"
                                                            style="border: none;background-color: transparent;padding:10px;font-size: larger;font-family: 'Patua One', cursive;"
                                                        id="51" value="51" type="button">Mumbai </button></a></li>
                                                        <li><a href="#test"><button class="mylistbtn"
                                                                               style="border: none;background-color: transparent;padding:10px;font-size: larger;font-family: 'Patua One', cursive; "
                                                                               id="60" value="60" type="button">Punjab</button></a></li>
                                                                               
                                                                               <li><a href="#test"><button class="mylistbtn"
                                                                                style="border: none;background-color: transparent;padding:10px;font-size: larger;font-family: 'Patua One', cursive; "
                                                                                id="77" value="77" type="button">Wednesday</button></a></li>
                                                                            </ul>
                                                </div>
                        <div class="column invisible">
                            <ul style="list-style: none;">
                                <li class="in-column">
                                    <a href="#test"><button
                                                       style="border: none;background-color: transparent;padding:10px;font-size: larger;font-family: 'Patua One', cursive; "
                                                       id="13" value="13" type="button">Cat </button></a></li>
                                                       <li class="in-column">
                                                           <a href="#test"><button
                                                       style="border: none;background-color: transparent;padding:10px;font-size: larger; font-family: 'Patua One', cursive;"
                                                       id="12" value="12" type="button">Bridge </button></a></li>
                                <li class="in-column">
                                    <a href="#test"><button
                                                       style="border: none;background-color: transparent;padding:10px;font-size: larger;font-family: 'Patua One', cursive; "
                                                       id="28" value="28" type="button">Grapes</button></a></li>
                                                       
                                                       <li class="in-column">
                                                           <a href="#test"><button
                                                            style="border: none;background-color: transparent;padding:10px;font-size: larger; font-family: 'Patua One', cursive;"
                                                            id="18" value="18" type="button">December</button></a></li>
                                                            
                                                            <li class="in-column">
                                                                <a href="#test"><button
                                                                    style="border: none;background-color: transparent;padding:10px;font-size: larger;font-family: 'Patua One', cursive; "
                                                                    id="10" value="10" type="button">Banglore</button></a>
                                                                </li>
                                                                <li class="in-column">
                                                                    <a href="#test"><button
                                                                                       style="border: none;background-color: transparent;padding:10px;font-size: larger;font-family: 'Patua One', cursive; "
                                                                                       id="42" value="42" type="button">July</button></a></li>
                                
                                                                                       
                                                                
                                                            <li class="in-column">
                                                                <a href="#test"><button
                                                                                   style="border: none;background-color: transparent;padding:10px;font-size: larger;font-family: 'Patua One', cursive; "
                                                                                   id="59" value="59" type="button">Pune </button></a></li>

                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>

               <div class="center">
                    <br>
                    <h3 style="font-family: 'Pacifico',cursive;">Most Commonly Used Phrases</h3>
                    <br>
               </div>
               <div class="outer-column">
                    <div class="column">
                         <ul>
                              <li><button id="47" value="47" type="button">Lets go for lunch </button></li>
                              <li><button id="79" value="79" type="button">What is today's date</button></li>
                              <li><button id="20" value="20" type="button">Do you have money</button></li>



                              <li><button id="53" value="53" type="button">Nice to Meet you</button></li>
                              <li><button id="81" value="81" type="button">What is your name</button></li>

                              <li><button id="83" value="83" type="button">Where is the bathroom</button></li>
                              <li><button id="56" value="56" type="button">Please call me later</button></li>
                              <li><button id="62" value="62" type="button">Shall i help you</button></li>


                         </ul>
                    </div>
                    <div class="column">
                         <ul>
                              <li class="in-column"><button id="29" value="29" type="button">Hello </button></li>
                              <li class="in-column"><button id="33" value="33" type="button">I am fine </button></li>
                              <li class="in-column"><button id="34" value="34" type="button">I am Sorry </button></li>

                              <li class="in-column"><button id="54" value="54" type="button">Open the door </button>
                              </li>

                              <li class="in-column"><button id="5" value="5" type="button">Are you Hungry </button></li>
                              <li class="in-column"><button id="11" value="11" type="button">Be Careful</button></li>
                              <li class="in-column"><button id="68" value="68" type="button">Take Care </button></li>
                              <li class="in-column"><button id="3" value="3" type="button">Any Questions </button></li>


                         </ul>
                    </div>
               </div>
          </div>

    </div>
</section>


<!-- contact section ends -->











<!-- <?php include 'components/footer.php'; ?>   -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
    
</body>
</html>