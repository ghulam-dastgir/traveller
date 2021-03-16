<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top bg-light py-4">
    <div class="container">
        <a href="index.php" class="navbar-brand"><img src="assets/images/magazines_1.png" alt="" class="" height="90" width="150"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"
                        data-target="#">Lahore</a>
                    <div class="dropdown-menu" id="dropdwon">
                        <a href="" class="dropdown-item text-center">Killah</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown" data-target="#">Karachi</a>
                    <div class="dropdown-menu" id="dropdwon">
                        <a href="" class="dropdown-item">Deria</a>
                        <a href="" class="dropdown-item">sumander</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a href="blog.php" class="nav-link">Blog</a></li>
                <li class="nav-item dropdown"><a href="about-us.php" class="nav-link">About Us</a></li>
                <li class="nav-item dropdown"><a href="contact-us.php" class="nav-link">Contact Us</a></li>
            </ul>
        </div>
        <div class="float-right">
            <a href="#login" class="mr-1" id="" data-toggle="modal"><i class="fa fa-lock mr-2"></i>Login</a><span
                class="text-danger">/</span><a href="#registration" class="ml-1" id="" data-toggle="modal"><i
                    class="fa fa-user mr-2"></i>Register</a>
        </div>
    </div>
</nav>
<!-- Login Modal Box Starts -->
<div class="modal fade" id="login" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold text-primary">Login Here</h4>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group font-weight-bold">
                        <label for="email"><i class="fa fa-envelope mr-2"></i>Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="User Email-Id">
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="password"><i class="fa fa-key mr-2"></i>Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="User Password">
                    </div>
                    <input type="submit" value="login" class="up-c btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Login Modal Box Ends -->
<!-- Registration Modal Box Ends -->
<div class="modal fade" id="registration" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold text-primary">Register Here</h4>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group font-weight-bold">
                        <label for="name"><i class="fa fa-user mr-2"></i>Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="User Name">
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="email"><i class="fa fa-envelope mr-2"></i>Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="User Email-Id">
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="password"><i class="fa fa-key mr-2"></i>Passwords</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="User Password">
                    </div>
                    <input type="submit" value="Register" class="up-c btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>