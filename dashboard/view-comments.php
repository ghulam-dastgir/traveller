<?php include("includes/header.php"); ?>
<title>Traveller Inn Dashboard | Home</title>
</head>
<body>
    <?php include("includes/navbar.php"); ?>
    <!-- Main Content Starts -->
    <div id="dashboard-content">
        <div class="row">
            <?php include("includes/sidebar.php"); ?>
            <div class="col-md-10">
                <div id="left-content" class="m-5">
                    <div class="blog-content bg-light p-4 mb-2">
                        <div class="row">
                            <div class="main-heading mb-4 col-md-12">
                                <h3>Blog's Information<i class="fa fa-blog ml-2 text-primary"></i></h3>
                            </div>
                            <div class="col-md-8">
                                <h5>Author:<small class="ml-3">sunny rajpoot</small></h5>
                                <h5>City:<small class="ml-5">Lahore</small></h5>
                                <h5>Place:<small class="ml-4">Shahi Killah</small></h5>
                                <h5>Description:<small class="ml-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem ratione consequuntur ab dolorem fugit facere est aliquid pariatur illo quia?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate illum optio tenetur ipsa corporis rem veniam, modi, exercitationem consectetur cumque eum, debitis incidunt? Dignissimos temporibus maiores nam! Sit, beatae velit Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis totam tempore cumque.</small></h5>
                            </div>
                            <div class="col-md-4">
                                <img src="../assets/images/blog/681e8551af630002cfe471f79a55f077.jpg" class="card-img" alt="">
                            </div>
                        </div>
                        <!-- Total Comments -->
                    </div>
                    <div class="table-responsive p-4 shadow-lg">
                        <div class="table-header bg-info clearfix p-3">
                            <h4 class="float-left text-white ml-2 cap-c">list of users Comments</h4>
                        </div>
                        <table class="table table-sm table-bordered table-striped text-center">
                            <thead class="bg-dark text-white up-c">
                                <tr>
                                    <th>#</th>
                                    <th>User name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Comment</th>
                                    <th>Images</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>sunny rajpoot</td>
                                    <td>sunnyrajpoot67@gmail.com</td>
                                    <td>03070458338</td>
                                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                                    <td><img src="../assets/images/users/b.jpg" height="40" width="40" class="rounded-circle" alt=""></td>
                                    <td>
                                        <a href="view-userComment.php" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Fahad hassan</td>
                                    <td>fahad34@gmail.com</td>
                                    <td>03070458338</td>
                                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                                    <td><img src="../assets/images/users/a.jpg" height="40" width="40" class="rounded-circle" alt=""></td>
                                    <td>
                                        <a href="view-userComment.php" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>ali hassan</td>
                                    <td>alihassan@gmail.com</td>
                                    <td>03070458338</td>
                                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                                    <td><img src="../assets/images/users/c.jpg" height="40" width="40" class="rounded-circle" alt=""></td>
                                    <td>
                                        <a href="view-userComment.php" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>kashif ali</td>
                                    <td>kashifali89@gmail.com</td>
                                    <td>03070458338</td>
                                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                                    <td><img src="../assets/images/users/d.jpg" height="40" width="40" class="rounded-circle" alt=""></td>
                                    <td>
                                        <a href="view-userComment.php" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>zaman haider</td>
                                    <td>zamang675@gmail.com</td>
                                    <td>03070458338</td>
                                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                                    <td><img src="../assets/images/users/e.jpg" height="40" width="40" class="rounded-circle" alt=""></td>
                                    <td>
                                    <a href="view-userComment.php" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <nav class="pagination pagination-sm mt-4">
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
                    <div class="bg-light py-3 px-1 text-center"><p class="">copyright &copy;2021 All rights reserved | This Site is Developed By SUNNY  RAJPOOT <i class="fa fa-heart text-danger"></i></p></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Ends -->
    <!-- Footer -->
    <?php include("includes/footer.php"); ?>