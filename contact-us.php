<?php include("includes/header.php"); ?>
<title>Traveller INN | Contact Us</title>
</head>

<body>
    <!-- Starts -> Navbar -->
    <?php include("includes/navbar.php"); ?>
    <!-- Ends -> Navbar -->
    <!-- Blog Banner Starts -->
    <div id="contact-banner">
        <!-- Content -->
        <div class="container text-center">
            <h1 class="text-white">Contact Us</h1>
        </div>
    </div>
    <div class="container contact-form">
        <div class="row">
            <div class="col-md-8">
                <form action="" method="POST">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="9" class="form-control"></textarea>
                        </div>
                        <input type="submit" value="Send Message" class="btn btn-lg btn-primary ml-3">
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="contact-info ml-4">
                    <h3 class="">Contact Information</h3>
                    <div class="row mt-5">
                        <div class="col-2">
                            <i class="fa fa-location-icon"></i>
                        </div>
                        <div class="col-10">
                            <p class="text-muted">203 Fake St. Mountain View, San Francisco, California, USA</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="col-10">
                            <p><a href="" class="text-primary">03070458338</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="col-10">
                            <p><a href="" class="text-primary">gulamdastgir@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-clock"></i>
                        </div>
                        <div class="col-10">
                            <p class="text-muted">Monday — Friday 8:00am - 5:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Banner Ends -->

    <?php include("includes/footer.php"); ?>