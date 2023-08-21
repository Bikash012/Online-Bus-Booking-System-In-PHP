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
        <form action="<?php echo base_url('home/booking/'.$id) ?>" method="post">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Enter Name" class="form-control" required />
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control" required />
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Number Of Members</label>
                    <input type="text" name="numberofmember" placeholder="Enter Number Of Members" class="form-control" required />
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>


</body>

</html>