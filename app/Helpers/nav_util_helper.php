<?php

// app/Helpers/nav_util_helper.php
 // Define it inside

function test(){
    $uri = $_SERVER['REQUEST_URI'];
    if($uri === "/"){
        echo "text-decoration-none";
    }
}