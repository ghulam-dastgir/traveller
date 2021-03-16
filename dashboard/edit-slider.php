<?php include("includes/header.php"); ?>
<title>Traveller Inn Dashboard | Update Slider</title>
</head>
<body>
    <?php include("includes/navbar.php"); ?>
    <!-- Main Content Starts -->
    <div id="dashboard-content">
        <div class="row">
            <?php include("includes/sidebar.php"); ?>
            <div class="col-md-10">
                <div id="left-content" class="m-5 bg-light">
                    <div class="col-md-6 p-5">
                        <h5 class="font-weight-bold mb-3">Update Slider</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="heading">Heading</label>
                                <input type="text" name="heading" id="heading" value="Best Traveller Inn" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea name="desc" id="desc" rows="2" class="form-control">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi eaque excepturi inventore?</textarea>
                            </div>
                            <div class="form-group">
                                <label for="img" class="d-block">Image</label>
                                <input type="file" name="new-img" id="img">
                                <input type="hidden" name="old-img" id="img" value="">
                                <img src="../assets/images/banner/City-At-Night-HD-Wallpaper.jpg" height="80" width="180" alt="">
                            </div>
                            <input type="submit" value="update slider" name="update-slider" class="btn btn-success up-c">
                        </form>
                    </div>
                    <div class="bg-light py-3 px-1 text-center"><p class="">copyright &copy;2021 All rights reserved | This Site is Developed By SUNNY  RAJPOOT <i class="fa fa-heart text-danger"></i></p></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Ends -->
    <!-- Footer -->
    <?php include("includes/footer.php"); ?>