<?php include("includes/header.php"); ?>
<title>Traveller Inn Dashboard | Site Settings</title>
</head>
<body>
    <?php include("includes/navbar.php"); ?>
    <!-- Main Content Starts -->
    <div id="dashboard-content">
        <div class="row">
            <?php include("includes/sidebar.php"); ?>
            <div class="col-md-10">
                <div id="left-content" class="m-5 bg-light">
                    <div class="p-5">
                        <h5 class="font-weight-bold mb-3">All Settings</h5>
                        <form action="" method="POST">
                            <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" value="lahore" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="city">Footer Text</label>
                                <input type="text" name="place" id="place" value="copyright ©2021 All rights reserved | This Site is Developed By SUNNY RAJPOOT" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="desc">Site Description</label>
                                <textarea name="desc" id="desc" rows="3" class="form-control">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam voluptatem sapiente ratione vero! Quia alias necessitatibus maxime a qui aspernatur..</textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="city">Contact Information</label>
                                <input type="text" name="place" id="place" value="Lorem ipsum dolor sit amet consectetur adipisicing elit." class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Contact Email</label>
                                <input type="email" name="email" id="email" value="gulamdastgir355@gmail.com" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="help">Help?</label>
                                <input type="text" name="help" id="help" value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam voluptatem sapiente ratione vero! Quia alias necessitatibus maxime a qui aspernatur?" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobile">Contact Number</label>
                                <input type="number" name="mobile" id="mobile" value="03070458338" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="img" class="d-block">Site Logo</label>
                                <input type="file" name="new-img" id="img" class="">
                                <input type="hidden" name="old-img" id="" class="">
                                <img src="../assets/images/cond-nast-traveler-hotel-magazine-png-favpng-TxUJaMvhpRsgy3Bgim5ueSJx1.jpg" height="50" width="130" alt="">
                            </div>
                            <div class="form-group col-md-6 mt-4">
                                <input type="submit" value="update settings" name="update-blog" class="btn btn-success form-control up-c">
                            </div>
                        </form>
                    </div>
                    </div>
                    <div class="bg-light py-3 px-1 text-center"><p class="">copyright &copy;2021 All rights reserved | This Site is Developed By SUNNY  RAJPOOT <i class="fa fa-heart text-danger"></i></p></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Ends -->
    <!-- Footer -->
    <?php include("includes/footer.php"); ?>