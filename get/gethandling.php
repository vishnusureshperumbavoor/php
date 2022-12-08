<?php
if(isset($_GET["name"]) && isset($_GET["password"])){
    echo "My Name is " . $_GET["name"] . "<br>";
    echo "Your password is " . $_GET["password"];
}