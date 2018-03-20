<body class="fix-header fix-sidebar">
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- Main wrapper  -->
<div id="main-wrapper">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login-content card">
                        <div class="login-form">
                            <h4>Login</h4>
                            <?php echo form_open('login/admin_login');?>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" required="required" class="form-control" placeholder="Enter User Name">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" required="required" class="form-control" placeholder="Password">
                                </div>
                                <input type="submit" value="Sign In" class="btn btn-primary btn-flat m-b-30 m-t-30">
                            <?= form_close();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Wrapper -->
