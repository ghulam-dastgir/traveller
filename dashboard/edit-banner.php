<?php include("includes/header.php"); ?>
<title>Traveller Inn Dashboard | Update Banner</title>
</head>
<body>
    <?php include("includes/navbar.php"); ?>
    <!-- Main Content Starts -->
    <div id="dashboard-content">
        <div class="row">
            <?php include("includes/sidebar.php"); ?>
            <div class="col-md-10">
                <div id="left-content" class="m-5 bg-light">
                    <div class="col-md-12 p-5">
                        <h5 class="font-weight-bold mb-3">Update Banner</h5>
                        <form action="" method="POST">
                            <div class="row">
                            <div class="form-group col-md-6">
                                <label for="heading">Heading</label>
                                <input type="text" name="heading" id="heading" value="Our Blog" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="page-name">Page Name</label>
                                <select name="page-name" id="page-name" class="form-control">
                                    <option value="">--Select Page--</option>
                                    <option value="1" selected>Blog</option>
                                    <option value="1">About Us</option>
                                    <option value="1">Contact Us</option>
                                    <option value="1">Feedback</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="desc">Description</label>
                                <textarea name="desc" id="desc" rows="2" class="form-control">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, aliquam.</textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="img" class="d-block">Place Image</label>
                                <input type="file" name="new-img" id="img" class="">
                                <input type="hidden" name="lod-img" id="" class="">
                                <img src="../assets/images/banner/1920x1080-City-At-Night-Hi-Res.jpg" height="50" width="100" alt="">
                            </div>
                            <div class="col-md-6 mt-5">
                                <input type="submit" value="update banner" name="update-banner" class="btn btn-success up-c form-control">
                            </div>
                            </div>
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