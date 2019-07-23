
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
    <div class="row">
        <h1>Profile Picture Form</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <form method="post" action="/profile/updatePicture" enctype="multipart/form-data">

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></i></span>
                    </div>
                    <input name="myfile" type="file" class="form-control" placeholder="Email">
                </div>




                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Submit" />
                </div>


            </form>
        </div>
    </div>
    <!-- /.row -->


            </form>
        </div>
    </div>
    <!-- /.row -->




</div>
<!-- /.container -->