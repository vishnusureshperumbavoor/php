<?php
    $realanswer = "Delhi";
    $useranswer = $_POST["capital"];
    if($realanswer==$useranswer){
        echo "answer is correct";
    } else{
        echo "answer is incorrect. Real answer is $realanswer";
    }
?>