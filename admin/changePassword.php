<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Change Password</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <?php echo $this->session->flashdata('submit_msg'); ?>
                    <div class="col-md-12">
                        <form autocomplete="off" role="form" method="POST" action="<?php echo site_url('client_profile/updatePassword'); ?>" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Old Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="opass" id="opass" required="required" class="form-control" placeholder="Old Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">New Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="npass" id="npass" required="required" class="form-control" placeholder="New Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Re-Type Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="rpass" id="rpass" onkeyup="check()" required="required" class="form-control" placeholder="Re-Type Password">
                                    <span style="color:red;" id='message'></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                    <input type="button" class="btn btn-default" value="Cancel">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->
<script>
    function check() {
        if (document.getElementById('npass').value === document.getElementById('rpass').value) {
            document.getElementById('message').innerHTML = "";
        } else {
            document.getElementById('message').innerHTML = "Password is not match.";
        }
    }
</script>