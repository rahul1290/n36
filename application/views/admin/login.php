<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>News-36</title>
        <link href="<?php echo base_url('assets/admin/css/styles.css');?>" rel="stylesheet" />
        <script src="<?php echo base_url('assets/admin/all.min.js'); ?>" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">News-36.com</h3></div>
                                    <div class="card-body">
                                        <form name="f1" method="POST" action="<?php echo base_url('admin');?>">
                                            <div class="form-group">
                                                <label class="small mb-1">Identity</label>
                                                <input class="form-control py-4" name="identity" id="identity" type="text" placeholder="enter your identity" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Password</label>
                                                <input class="form-control py-4" id="password" name="password" type="password" placeholder="Enter password" />
                                            </div>
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <input class="btn btn-primary" type="submit" value="Login" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; <?php echo base_url(); ?> 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?php echo base_url('assets/admin/jquery-3.5.1.min.js'); ?>" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/admin/bootstrap.bundle.min.js'); ?>" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/admin/js/scripts.js'); ?>"></script>
    </body>
</html>
