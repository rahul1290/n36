<img src="<?php echo base_url('admin/news_ctrl/image_resize/banner1.png/205/310'); ?>" />

<!DOCTYPE html>
<html lang="en">
<?php if(isset($header)){ print_r($header); }?>

<body class="sb-nav-fixed">
        <?php if(isset($topnav)){ print_r($topnav); }?>
        <div id="layoutSidenav">
            <?php if(isset($sidenav)){ print_r($sidenav); }?>
                <div id="layoutSidenav_content">
            
                <?php if(isset($body)){ print_r($body); }?>
            
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
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
    </body>
</html>