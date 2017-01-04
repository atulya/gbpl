<?php session_start(); ?>
<?php include 'header.php'; ?>
<body>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Log in</div>
                <div class="panel-body">
                    <?php if(isset($_GET['msg'])){ if($_GET['msg'] == 'error'){ echo "<div class='alert alert-danger'>Invalid Credentials.</div>"; } } ?>
                    <form role="form" action="controller.php" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" required="required" name="username" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" required="required" name="password" type="password" value="">
                            </div>
                            <input name="login" value="Login" type="submit" class="btn btn-primary">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->		
    <?php include 'footer.php'; ?>
</body>

</html>