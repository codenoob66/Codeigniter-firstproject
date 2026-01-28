<?php

function test($uri, $path){
    if($uri != $path){
        echo "text-danger text-decoration-none";
    } else {
        echo "text-danger";
    }
}