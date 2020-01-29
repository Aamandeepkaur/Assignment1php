          <!--Amandeepkaur 8594905-->
    
<?php
    $base=10;
    $height=5;
    $area=($base*$height)/2;
    $area= round ($area , (2));
    echo'<p>The area of triangle is :' .$area .'</p>';
    define('MY_NAME' , "Amandeep Kaur");
    echo'<p>My Full Name is Amandeep Kaur:<strong>'.strtoupper(MY_NAME).'</strong> </p>'; //making name bold with strong operator as well as converting to upper case
?>