<?php include("includes/header.php"); ?>
<title>Traveller Inn Dashboard | Add User</title>
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
                        <h5 class="font-weight-bold mb-3">Add New User</h5>
                        <form action="" method="POST">
                            <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">User Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">User Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobile">User Mobile</label>
                                <input type="number" name="mobile" id="mobile" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">User Address</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="u-type">User Type</label>
                                <select name="u-type" id="u-type" class="form-control">
                                    <option value="0">Normal</option>
                                    <option value="1">Admin</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for=""></label>
                                <input type="submit" value="add user" name="add-user" class="btn btn-success up-c form-control mt-2">
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