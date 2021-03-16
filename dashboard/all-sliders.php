<?php include("includes/header.php"); ?>
<title>Traveller Inn Dashboard | Sliders</title>
</head>
<body>
    <?php include("includes/navbar.php"); ?>
    <!-- Main Content Starts -->
    <div id="dashboard-content">
        <div class="row">
            <?php include("includes/sidebar.php"); ?>
            <div class="col-md-10">
                <div id="left-content" class="m-5">
                    <div class="shadow-lg">
                        <div class="table-header bg-info clearfix p-3">
                            <h4 class="float-left text-white ml-2">List Of Sliders</h4>
                            <a href="add-slider.php" class="btn btn-light text-info float-right mr-3"><i class="fa fa-plus"></i></a>
                        </div>
                        <div class="table-responsive p-4">
                            <table class="table table-bordered table-striped text-center">
                                <thead class="bg-dark text-white up-c">
                                    <tr>
                                        <th>#</th>
                                        <th>Heading</th>
                                        <th>Description</th>
                                        <th>image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>World No Traveller Inn</td>
                                        <td>Lorem ipsum dolor sit amet Lorem, ipsum dolor.</td>
                                        <td><img src="../assets/images/banner/City-At-Night-HD-Wallpaper.jpg" height="50" width="50" class="rounded-circle" alt=""></td>
                                        <td><a href="" class="btn btn-danger"><i class="fa fa-trash mr-1"></i></a>
                                        <a href="edit-slider.php" class="btn btn-success"><i class="fa fa-pen"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Best Traveller Inn</td>
                                        <td>Lorem ipsum dolor sit amet Lorem, ipsum dolor.</td>
                                        <td><img src="../assets/images/banner/istockphoto-539346285-1024x1024.jpg" height="50" width="50" class="rounded-circle" alt=""></td>
                                        <td><a href="" class="btn btn-danger"><i class="fa fa-trash mr-1"></i></a>
                                        <a href="edit-slider.php" class="btn btn-success"><i class="fa fa-pen"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Famous Places</td>
                                        <td>Lorem ipsum dolor sit amet Lorem, ipsum dolor.</td>
                                        <td><img src="../assets/images/banner/lahore-2299773_1280.jpg" height="50" width="50" class="rounded-circle" alt=""></td>
                                        <td><a href="" class="btn btn-danger"><i class="fa fa-trash mr-1"></i></a>
                                        <a href="edit-city.php" class="btn btn-success"><i class="fa fa-pen"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Famous Cities</td>
                                        <td>Lorem ipsum dolor sit amet Lorem, ipsum dolor.</td>
                                        <td><img src="../assets/images/banner/1920x1080-City-At-Night-Hi-Res.jpg" height="50" width="50" class="rounded-circle" alt=""></td>
                                        <td><a href="" class="btn btn-danger"><i class="fa fa-trash mr-1"></i></a>
                                        <a href="edit-slider.php" class="btn btn-success"><i class="fa fa-pen"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Best Team</td>
                                        <td>Lorem ipsum dolor sit amet Lorem, ipsum dolor.</td>
                                        <td><img src="../assets/images/banner/img_3.jpg" height="50" width="50" class="rounded-circle" alt=""></td>
                                        <td><a href="" class="btn btn-danger"><i class="fa fa-trash mr-1"></i></a>
                                        <a href="edit-slider.php" class="btn btn-success"><i class="fa fa-pen"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <nav class="pagination mt-4">
                                <li class="page-item">
                                    <a href="" class="page-link">Prev</a>
                                </li>
                                <li class="page-item">
                                    <a href="" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="" class="page-link">Next</a>
                                </li>
                            </nav>
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