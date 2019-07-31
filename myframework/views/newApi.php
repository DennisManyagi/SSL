<?php

require_once "../bin/config.php";

$redirectURL = "http://localhost/fb-callback.php";

$permissions = ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $permissions);

echo $loginURL;




?>
<!-- Intro Content -->
<div class="row">
    <h1>FORM REQUEST</h1>
</div>

<div class="row">
    <div class="col-lg-12">
        <form method="post" action="/login/login">
            <input type="hidden" name="type" value="form">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></i></span>
                </div>
                <input name="email" type="text" class="form-control" placeholder="Email">
            </div>


            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></i></span>
                </div>
                <input name="password" type="text" class="form-control" placeholder="Password">
            </div>


            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="Submit" />
                <input type="button" class="btn btn-primary btn-block" value="Log In With Facebook" />
            </div>


        </form>
    </div>
</div>
<!-- /.row -->