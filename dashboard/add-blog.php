<?php include("includes/header.php"); ?>
<title>Traveller Inn Dashboard | Add Blog</title>
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
                        <h5 class="font-weight-bold mb-3">Add New Blog</h5>
                        <form action="" method="POST">
                            <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" value="Ghulam Dastrgir" readonly class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="city">City</label>
                                <select name="city" id="city" class="form-control">
                                    <option value="">--Select City--</option>
                                    <option value="1">okara</option>
                                    <option value="1">lahore</option>
                                    <option value="1">karachi</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 mt-4">
                                <label for="place">Place</label>
                                <input type="text" name="place" id="place" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="desc">Description</label>
                                <textarea name="desc" id="desc" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="img" class="d-block">Place Image</label>
                                <input type="file" name="new-img" id="img" class="">
                            </div>
                            <div class="form-group col-md-6 mt-4">
                                <input type="submit" value="add blog" name="add-blog" class="btn btn-success form-control up-c">
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