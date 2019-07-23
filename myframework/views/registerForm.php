
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
        <div class="col-lg-12">



            <?

            function create_image($cap)

            {

                unlink("./assets/image1.png");

                global $image;

                $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");

                $background_color = imagecolorallocate($image, 255, 255, 255);

                $text_color = imagecolorallocate($image, 0, 255, 255);

                $line_color = imagecolorallocate($image, 64, 64, 64);

                $pixel_color = imagecolorallocate($image, 0, 0, 255);

                imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

                for ($i = 0; $i < 3; $i++) {

                    imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);

                }

                for ($i = 0; $i < 1000; $i++) {

                    imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);

                }

                $text_color = imagecolorallocate($image, 0, 0, 0);

                ImageString($image, 22, 30, 22, $cap, $text_color);



                $_SESSION["data"]= "";



imagepng($image, "./assets/image1.png");

}

            create_image($data["cap"]);

            echo "<img src='/assets/image1.png'>";

            ?>
            <form method="post" action="/register/registerAction">


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></i></span>
                    </div>
                    <input name="name" type="text" class="form-control" placeholder="Name">
                </div>


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></i></span>
                    </div>
                    <input name="lastname" type="text" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class=input-group-text"><i class="fa fa-user"></i></span>
                    </div>

                    <input name="usercatpcha" type="text" class="form-control" placeholder="captcha">

                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Submit" />
                </div>


            </form>
        </div>
    </div>
    <!-- /.row -->


</div>
<!-- /.container -->