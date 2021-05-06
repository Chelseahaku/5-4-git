<?php

function xoosonbaina($field) {
	if($field == "") {
		return true; //1
	}
	return false; //0

    // if(isset($_GET['xaanaas']) && $_GET['xaanaas'] !=""){
    //     echo "Origin: " .$_GET['xaanaas'] . " file: ";
        
    }
   
    if(count($_POST) > 0 ){
        // print_r($_POST['password']);
        hr();
        foreach ($_POST as $index => $medeelel) {
            if(xoosonbaina($medeelel)){
                echo "$index xooson baina";
                die();
            }
        echo "$index : $medeelel <br>";
        }
        $password = $_POST['password'];
    }

    // $too = [13,25,565,5651,1,31,31,15,4,1,74,1];
    // foreach($too as $in => $to){
    //     echo "$in : $to <br>";
    // }
?>