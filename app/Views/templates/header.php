<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <img src="<?= base_url('assets/Logo.jpg') ?>" alt="China town BBQ Logo" class="w-75">
                </div>
                
            </div>
            <div class="position-absolute start-50 translate-middle-x">
                <a class="text-danger text-decoration-none" href="">About</a>
                <a class="text-danger text-decoration-none" href="">Reservation</a>
                <a class="text-danger text-decoration-none" href="">Menu</a>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">