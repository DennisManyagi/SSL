
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Welcome
        <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
    </ol>

    <!-- Intro Content -->
    <!-- Intro Content -->
    <div class="row">
        <h1>FORM REQUEST</h1>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <form method="post" action="/login/recv">
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
                    <label for="exampleFormControlTextarea1">Profile Info</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <label class="form-check-label">User Type:</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        New User
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                    <label class="form-check-label" for="defaultCheck2">
                        Returning User
                    </label>
                </div>
                <br>

                <label class="form-check-label">Gender:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Female
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                    <label class="form-check-label" for="exampleRadios3">
                        Other
                    </label>
                </div>
<br>
                <select class="custom-select">
                    <option selected>Where did you hear about us?</option>
                    <option value="1">Online</option>
                    <option value="2">Television</option>
                    <option value="3">Newspaper</option>
                </select>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Submit" />
                </div>


            </form>
        </div>
    </div>
    <!-- /.row -->


    <!-- Intro Content -->
    <div class="row">
        <h1>AJAX REQUEST</h1>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <form method="post" action="/register/registerAction">


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></i></span>
                    </div>
                    <input id="email" name="email" type="text" class="form-control" placeholder="Email">
                </div>


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></i></span>
                    </div>
                    <input id="password" name="password" type="text" class="form-control" placeholder="Password">
                </div>


                <div class="form-group">

                    <a href="javascript:void(0)" onclick="ASubmit()">LOGIN</a>

                </div>


            </form>
        </div>
    </div>
    <!-- /.row -->




</div>
<!-- /.container -->