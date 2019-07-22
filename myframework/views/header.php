<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

<!--POP OVER REQUIRED SCRIPT -->
    <script src="https://v4-alpha.getbootstrap.com/assets/js/vendor/tether.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="assets/modern-business.css" rel="stylesheet">

    <script>
        $(document).(function(){
            $('[data-toggle="popover"]').popover();
        });
    </script>

</head>

<body>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ERROR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><?echo @$_GET["msg"]?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<? if(@$_GET["msg"] || @$GET["msg"] != ""){?>

<script type="text/javascript">setTimeout(function(){$("#myModal").modal()}, 500);</script>

<? } ?>

<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Launch Photo Modal
</button> -->


<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">


                <?//var_dump($data["navigation"]);

                $index = "myButtons";

                $menuLinkid = basename($_SERVER['PHP_SELF'],"php");

                if($menuLinkid == "about") {

                    $index = 'myActiveButton';

                }elseif ($menuLinkid == "photos"){

                    $index = 'mySecondButton';
                }


                foreach($data["navigation"] as $key=>$link){?>
                    <li class="nav-item active">
                    <?if($key == "login" && @$_SESSION["isloggedin"] && @$_SESSION["isloggedin"] ==1){?>

                        <a class="nav-link" href="/crud" style="<?=xs$this->urlPathParts[0] == "crud"?"color:orange":""?>">CRUD</a>
                        <li>
                        <li class="nav-item active"><a class="nav-link" href="/logout">LOGOUT</a>
                    <?}else{?>

                    <a class="<?=$index?>" href="<?=$link?>"><?=strtoupper($key)?></a>
                </li>
<?}?>
                <?
                }
                ?>



            </ul>
        </div>
    </div>
</nav>


