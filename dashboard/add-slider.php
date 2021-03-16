<?php include("includes/header.php"); ?>
<title>Traveller Inn Dashboard | Add Slider</title>
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
                        <h5 class="font-weight-bold mb-3">Add New Slider</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="heading">Heading</label>
                                <input type="text" name="heading" id="heading" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea name="desc" id="desc" rows="2" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="img" class="d-block">Image</label>
                                <input type="file" name="img" id="img">
                            </div>
                            <input type="submit" value="add user" name="add-user" class="btn btn-success up-c">
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