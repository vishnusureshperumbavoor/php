<?php
if(isset($_POST["name"]) && isset($_POST["password"])){
    echo "My Name is " . $_POST["name"] . "<br>";
    echo "Your password is " . $_POST["password"];
}