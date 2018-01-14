<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\IDE\xampp\htdocs\BookHouse\public/../application/index\view\index\aboutme.html";i:1515854669;}*/ ?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/bootstrap-theme.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/loader.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/common.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/homestyle.css" type="text/css" media="screen and (min-width: 768px)">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/homestyle-s.css" type="text/css" media="screen and (max-width: 767px)">
    <title>Book Store</title>

</head>

<body>
<!--小屏幕菜单-->
<div id="mobile-menu" class="mobile-nav hidden-sm hidden-md hidden-lg">
    <ul>
        <li>
            <a href="home">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home
            </a>
        </li>
        <li>
            <a href="store">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Store
            </a>
        </li>
        <li>
            <a href="created">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Created
            </a>
        </li>
        <li>
            <a href="aboutme">
                <span class="glyphicon glyphicon-fire" aria-hidden="true"></span>About
            </a>
        </li>
    </ul>

</div>

<!--主内容-->
<div class="card main_body center-block">

    <!--顶部导航栏-->
    <div class="headnav">
        <!--非小屏菜单-->
        <ul class="navmenu row">
            <li class="col-sm-3 active">
                <a href="home">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home
                </a>
            </li>
            <li class="col-sm-3">
                <a href="store">
                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Store
                </a>
            </li>
            <li class="col-sm-3">
                <a href="created">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Created
                </a>
            </li>
            <li class="col-sm-3">
                <a href="aboutme">
                    <span class="glyphicon glyphicon-fire" aria-hidden="true"></span>About
                </a>
            </li>
        </ul>

        <div id="logo" class="logo text-center"><img src="<?php echo $DIR_IMG; ?>/logo.png" alt=""></div>

        <div class="menusec row">
            <div class="col-sm-7 col-sm-offset-2 col-xs-7 col-xs-offset-1" style="height: 100%;padding: 0;">
                <h4><?php echo $username; ?></h4>
            </div>
            <div class="col-sm-2 col-xs-4" style="height: 100%;padding: 0;">
                <a href="login">
                    <img src="<?php echo $DIR_IMG; ?>/avatar.jpg" class="userthumb img-circle">
                </a>
            </div>
        </div>

    </div>

    <div class="center-block" style="text-align: center;margin-top: 20px;">
    <a href="https://github.com/juzicheng" class="fa fa-github" style="font-size: 30em;"></a><h2>橘子橙</h2><h2>Juzi Cheng'Github</h2>
    </div>
</div>







<!--页脚-->
<footer class="footer container-fluid navbar-fixed-bottom">
    <span>&copy; DZQ | <a href="home">Home</a></span>
</footer>

<!--加载脚本-->
<script src="<?php echo $DIR_JS; ?>/jquery-3.2.1.js"></script>
<script src="<?php echo $DIR_JS; ?>/bootstrap.js"></script>
<script>

$(document).ready(function () {
    var Bmenu = $('.mobile-nav'),
        Blogo = $('.logo'),
        isopen = false;

    Bmenu.click(function(){menushow();});
    Blogo.click(function(){menushow();});
    function menushow() {
        if($(window).width()<768){
            if(isopen){
                Bmenu.width('0px');
                isopen = false;
            }else {
                Bmenu.width('100%');
                isopen = true;
            }
        }
    }
});
</script>


</body>
</html>
