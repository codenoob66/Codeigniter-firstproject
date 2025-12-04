<?php
$uri = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <img src="<?= base_url('assets/Logo.jpg') ?>" alt="China town BBQ Logo" class="w-75">
                </div>
                
            </div>
            <div class="text-center position-absolute start-50 translate-middle-x fw-medium">
                <div>
                    <a class="text-danger fs-5 mx-3  <?= url_is('/') ? '' : 'text-decoration-none' ?>" href="/">About</a>
                    <a class="text-danger fs-5 mx-3 <?= url_is('/reservation') ? '' : 'text-decoration-none' ?>" href="/reservation">Reservation</a>
                    <a class="text-danger fs-5 mx-3 <?= url_is('/menu') ? '' : 'text-decoration-none' ?>" href="/menu">Menu</a>
                </div>  
                <h4 class="text-danger fs-2">东北烧烤</h4>
            </div>
            
        </div>
    </nav>
    
    <div class="bg-primary mt-4">