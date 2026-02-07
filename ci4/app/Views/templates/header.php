<?php
$uri = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body class="min-vh-100 d-flex flex-column">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <img src="<?= base_url('assets/Logo.jpg') ?>" alt="China town BBQ Logo" class="w-75">
                </div>
                
            </div>
            <div class="text-center position-absolute start-50 translate-middle-x fw-medium">
                <div>
                    <a class="text-danger fs-4 mx-3 text-decoration-none nav-header-font border-bottom border-danger border-3  <?= url_is('/') ? '' : 'border-bottom-0' ?>" href="/">About</a>
                    <a class="text-danger fs-4 mx-3 text-decoration-none nav-header-font border-bottom border-danger border-3 <?= url_is('/reservation') ? '' : 'border-bottom-0' ?>" href="/reservation">Reservation</a>
                    <a class="text-danger fs-4 mx-3 text-decoration-none nav-header-font border-bottom border-danger border-3 <?= url_is('/menu') ? '' : 'border-bottom-0' ?>" href="/menu">Menu</a>
                </div>  
                <h4 class="text-danger fs-2">东北烧烤</h4>
            </div>
            
        </div>
    </nav>
    
    <div class="bg-primary mt-4">