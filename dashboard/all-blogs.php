<?php include("includes/header.php"); ?>
<title>Traveller Inn Dashboard | Users</title>
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
                            <h4 class="float-left text-white ml-2">List Of Blogs</h4>
                            <a href="add-blog.php" class="btn btn-light text-info float-right mr-3"><i class="fa fa-plus"></i></a>
                        </div>
                        <div class="table-responsive p-4">
                            <table class="table table-bordered table-striped text-center">
                                <thead class="bg-dark text-white up-c">
                                    <tr>
                                        <th>#</th>
                                        <th>Author</th>
                                        <th>City</th>
                                        <th>place</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Comments</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>sunny rajpoot</td>
                                        <td>okara</td>
                                        <td>goal chonk</td>
                                        <td>This is blog</td>
                                        <td><img src="../assets/images/download.png" height="50" width="50" class="rounded-circle" alt=""></td>
                                        <td> <a href="view-comments.php" class="btn btn-info text-white"><i class="fa fa-comments"></i><span class="ml-2">12</span></a></td>
                                        <td><a href="" class="btn btn-danger"><i class="fa fa-trash mr-1"></i></a>
                                        <a href="edit-blog.php" class="btn btn-success"><i class="fa fa-pen"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>fahad hassan</td>
                                        <td>Lahore</td>
                                        <td>Shahi killah</td>
                                        <td>This is blog</td>
                                        <td><img src="../assets/images/blog/Jinnah_Mausoleum.jpg" height="50" width="50" class="rounded-circle" alt=""></td>
                                        <td> <a href="view-comments.php" class="btn btn-info text-white"><i class="fa fa-comments"></i><span class="ml-2">78</span></a></td>
                                        <td><a href="" class="btn btn-danger"><i class="fa fa-trash mr-1"></i></a>
                                        <a href="edit-blog.php" class="btn btn-success"><i class="fa fa-pen"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>fahad hassan</td>
                                        <td>Faislabad</td>
                                        <td>Ghanta gher</td>
                                        <td>This is blog</td>
                                        <td><img src="../assets/images/blog/big_image_1.jpg" height="50" width="50" class="rounded-circle" alt=""></td>
                                        <td> <a href="view-comments.php" class="btn btn-info text-white"><i class="fa fa-comments"></i><span class="ml-2">23</span></a></td>
                                        <td><a href="" class="btn btn-danger"><i class="fa fa-trash mr-1"></i></a>
                                        <a href="edit-blog.php" class="btn btn-success"><i class="fa fa-pen"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>haider ali</td>
                                        <td>Islamabad</td>
                                        <td>Quid Masjid</td>
                                        <td>This is blog</td>
                                        <td><img src="../assets/images/blog/city-karachi-pakistan-6629649.jpg" height="50" width="50" class="rounded-circle" alt=""></td>
                                        <td> <a href="view-comments.php" class="btn btn-info text-white"><i class="fa fa-comments"></i><span class="ml-2">45</span></a></td>
                                        <td><a href="" class="btn btn-danger"><i class="fa fa-trash mr-1"></i></a>
                                        <a href="edit-blog.php" class="btn btn-success"><i class="fa fa-pen"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>sulman arif</td>
                                        <td>Karachi</td>
                                        <td>Quid Mizar</td>
                                        <td>This is blog</td>
                                        <td><img src="../assets/images/blog/frere-hall-cathedral-karachi-pakistan-very-prominent-tourists-attraction-city-137806434.jpg" height="50" width="50" class="rounded-circle" alt=""></td>
                                        <td> <a href="view-comments.php" class="btn btn-info text-white"><i class="fa fa-comments"></i><span class="ml-2">34</span></a></td>
                                        <td><a href="" class="btn btn-danger"><i class="fa fa-trash mr-1"></i></a>
                                        <a href="edit-blog.php" class="btn btn-success"><i class="fa fa-pen"></i></a>
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