<?php

// app/Helpers/nav_util_helper.php
$uri = $_SERVER['REQUEST_URI']; // Define it inside

function checkActive() {
    global $uri;
    echo $uri;
}