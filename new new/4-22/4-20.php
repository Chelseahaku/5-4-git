<?php


// https://www.w3schools.com/php/php_operators.asp

// $x = 10;  
// $y = "10";

// echo $x != $y;


// echo "<hr>";







// https://www.w3schools.com/php/php_variables.asp

$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

$oguulber = "Variables can store data of different types, and different data types can do different things.";

// echo ($email);
// echo "<br>";
// echo strlen($email);
// die();


if(strlen($email) == 0) {
    echo "Email xayag xooson baina";
    echo "<br>";
    die();
} else if($name == "") {
    echo "Ner xooson baina";
    echo "<br>";
    die();
} else if($message == "") {
    echo "Message xooson baina";
    echo "<br>";
    die();
} else if($message == "") {
    echo "Message xooson baina";
    echo "<br>";
    die();
} else if($message == "") {
    echo "Message xooson baina";
    echo "<br>";
    die();
} else if($message == "") {
    echo "Message xooson baina";
    echo "<br>";
    die();
} else if($message == "") {
    echo "Message xooson baina";
    echo "<br>";
    die();
} else if($message == "") {
    echo "Message xooson baina";
    echo "<br>";
    die();
} else if($message == "") {
    echo "Message xooson baina";
    echo "<br>";
    die();
} else if($message == "") {
    echo "Message xooson baina";
    echo "<br>";
    die();
} else if($message == "") {
    echo "Message xooson baina";
    echo "<br>";
    die();
} else if($message == "") {
    echo "Message xooson baina";
    echo "<br>";
    die();
} else if($message == "") {
    echo "Message xooson baina";
    echo "<br>";
    die();
}






// $formiin_medeelel = $_POST;
// $email_hayag = $formiin_medeelel['email'];

// print_r(   $email_hayag    );
// echo "<hr>";
// print_r( $formiin_medeelel );

// [
//     'email' => 'apprenticemn@gmail.com'
//     'name' => 'Zerleg Design'
//     'message' => 'lkadsjf lajdf lkajf kl'
// ];

?>

<!--
<h1>
    <?php
        echo $oguulber;
    ?>
</h1>
-->

<!--
https://getbootstrap.com/docs/5.0/components/badge/#example
-->
<h1>
    <?php echo $name; ?> 
    ( <span class="badge bg-secondary"><?php echo $email; ?></span> )
</h1>
<p><?php echo $message; ?></p>
?? 2021 GitHub, Inc.