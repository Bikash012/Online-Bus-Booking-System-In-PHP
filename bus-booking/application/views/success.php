<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/custom.css?date=' . date("$")) ?>">
</head>

<body style="height:1500px">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#">Bus Booking System</a>
        <ul class="navbar-nav" style="margin-left:70%">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>
        </ul>
    </nav>

    <div class="container" style="margin-top: 100px;">
     <h3 class="text-success">Your Bus Successfully Booked : for more information please contact support team</h3>
    </div>
</body>

</html>