<?php include("includes/header.php"); ?>
<title>Traveller Inn Dashboard | Update City</title>
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
                        <h5 class="font-weight-bold mb-3">Update City</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="name">City Name</label>
                                <input type="text" name="c_name" id="name" value="okara" class="form-control">
                            </div>
                            <input type="submit" value="update city" name="update-city" class="btn btn-success up-c">
                        </form>
                    </div>
                    <div class="bg-light py-3 px-1 text-center mt-5 pt-5"><p class="">copyright &copy;2021 All rights reserved | This Site is Developed By SUNNY  RAJPOOT <i class="fa fa-heart text-danger"></i></p></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Ends -->
    <!-- Footer -->
    <?php include("includes/footer.php"); ?>