<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\IDE\xampp\htdocs\BookHouse\public/../application/index\view\index\home.html";i:1515858462;}*/ ?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/bootstrap-theme.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/loader.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/common.css" type="text/css">
    <!--<link rel="stylesheet" href="css/homestyle.css" type="text/css">-->
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/homestyle.css" type="text/css" media="screen and (min-width: 768px)">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/homestyle-s.css" type="text/css" media="screen and (max-width: 767px)">
    <title>Book Store</title>

</head>

<body>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

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
        <li style="margin-top: 20px"><a href="#banner">For You</a></li>
        <li><a href="#bookshow">Books</a></li>
        <li><a href="#authors">Authors</a></li>
        <li style="margin-top: 20px"><a href="<?php echo url('admin/index/logout'); ?>">退出</a></li>
    </ul>

</div>

<div class="card main_body center-block">

    <!--顶部导航栏-->
    <div class="headnav">
        <!--非小屏幕导航-->
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

    <!--Banner区书籍推荐块-->
    <div class="banner" id="banner">
        <!--标题-->
        <div class="recTitle"><span>For You</span></div>
        <!--展示块-->
        <div class="recbooks">
            <!--卡片  ----  1  -->
            <div class="recbook card">
                <!--背景-->
                <div class="bg" style="background-image: url('<?php echo $DIR_IMG; ?>/bookpage_v_1.jpg')"></div>
                <!--封面-->
                <div class="book card"><a href="#"><img src="<?php echo $DIR_IMG; ?>/bookpage_v_1.jpg" alt=""></a></div>
                <!--信息  Start-->
                <div class="bookinfo">
                    <!--标题-->
                    <div class="booktitle"><span><?php echo $bookname[1]; ?></span></div>
                    <!--作者-->
                    <div class="bookauthors"><?php echo $authorname[1]; ?></div>
                    <!--标记-->
                    <div class="bookgrade" style="color: #98f261">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </div>
                    <!--读者-->
                    <div class="bookreader">
                        <div class="img-circle"><img src="<?php echo $DIR_IMG; ?>/author_img_1.jpg" class="img-circle"></div>
                        <div class="img-circle"><img src="<?php echo $DIR_IMG; ?>/author_img_2.jpg" class="img-circle"></div>
                        <div class="img-circle">50+</div>
                    </div>
                </div>
                <!--信息  End-->
            </div>
            <!--卡片  ----  1  End-->

            <!--卡片  ----  2  -->
            <div class="recbook card">
                <div class="bg" style="background-image: url('<?php echo $DIR_IMG; ?>/bookpage_v_2.jpg')"></div>
                <div class="book card"><a href="#"><img src="<?php echo $DIR_IMG; ?>/bookpage_v_2.jpg" alt=""></a></div>
                <div class="bookinfo">
                    <div class="booktitle"><span><?php echo $bookname[2]; ?></span></div>
                    <div class="bookauthors"><?php echo $authorname[2]; ?></div>
                    <div class="bookgrade" style="color: #7f23f1">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </div>
                    <div class="bookreader">
                        <div class="img-circle"><img src="<?php echo $DIR_IMG; ?>/author_img_3.jpg" class="img-circle"></div>
                        <div class="img-circle"><img src="<?php echo $DIR_IMG; ?>/author_img_4.jpg" class="img-circle"></div>
                        <div class="img-circle">50+</div>
                    </div>
                </div>
            </div>
            <div class="recbook card">
                <div class="bg" style="background-image: url('<?php echo $DIR_IMG; ?>/bookpage_v_3.jpg')"></div>
                <div class="book card"><a href="#"><img src="<?php echo $DIR_IMG; ?>/bookpage_v_3.jpg" alt=""></a></div>
                <div class="bookinfo">
                    <div class="booktitle"><span><?php echo $bookname[3]; ?></span></div>
                    <div class="bookauthors"><?php echo $authorname[3]; ?></div>
                    <div class="bookgrade" style="color: #f0333a;">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </div>
                    <div class="bookreader">
                        <div class="img-circle"><img src="<?php echo $DIR_IMG; ?>/author_img_5.jpg" class="img-circle"></div>
                        <div class="img-circle"><img src="<?php echo $DIR_IMG; ?>/author_img_6.jpg" class="img-circle"></div>
                        <div class="img-circle">50+</div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!--底部作品展示块-->
    <div class="recommended row">
        <!--左：书籍展示-->
        <div class="bookshow col-sm-8" id="bookshow">
            <div class="recTitle"><span>Books</span></div>
            <div class="Bookrowser">
                <div class="bs-books">
                    <div class="bs-book">
                        <div class="bs-book-pic card"><img src="<?php echo $DIR_IMG; ?>/bookpage_v_4.jpg"></div>
                        <div class="bs-book-info">
                            <div class="bbi-title"><?php echo $bookname[4]; ?></div>
                            <div class="bbi-author"><?php echo $authorname[4]; ?></div>
                            <div class="bbi-grade">
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                        </div>
                    </div>
                    <div class="bs-book">
                        <div class="bs-book-pic card"><img src="<?php echo $DIR_IMG; ?>/bookpage_v_5.jpg"></div>
                        <div class="bs-book-info">
                            <div class="bbi-title"><?php echo $bookname[5]; ?></div>
                            <div class="bbi-author"><?php echo $authorname[5]; ?></div>
                            <div class="bbi-grade">
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                        </div>
                    </div>
                    <div class="bs-book">
                        <div class="bs-book-pic card"><img src="<?php echo $DIR_IMG; ?>/bookpage_v_6.jpg"></div>
                        <div class="bs-book-info">
                            <div class="bbi-title"><?php echo $bookname[6]; ?></div>
                            <div class="bbi-author"><?php echo $authorname[6]; ?></div>
                            <div class="bbi-grade">
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bs-books">
                    <div class="bs-book">
                        <div class="bs-book-pic card"><img src="<?php echo $DIR_IMG; ?>/bookpage_v_7.jpg"></div>
                        <div class="bs-book-info">
                            <div class="bbi-title"><?php echo $bookname[7]; ?></div>
                            <div class="bbi-author"><?php echo $authorname[7]; ?></div>
                            <div class="bbi-grade">
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                        </div>
                    </div>
                    <div class="bs-book">
                        <div class="bs-book-pic card"><img src="<?php echo $DIR_IMG; ?>/bookpage_v_8.jpg"></div>
                        <div class="bs-book-info">
                            <div class="bbi-title"><?php echo $bookname[8]; ?></div>
                            <div class="bbi-author"><?php echo $authorname[8]; ?></div>
                            <div class="bbi-grade">
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                        </div>
                    </div>
                    <div class="bs-book">
                        <div class="bs-book-pic card"><img src="<?php echo $DIR_IMG; ?>/bookpage_v_9.jpg"></div>
                        <div class="bs-book-info">
                            <div class="bbi-title"><?php echo $bookname[9]; ?></div>
                            <div class="bbi-author"><?php echo $authorname[9]; ?></div>
                            <div class="bbi-grade">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--右：作者展示-->
        <div class="author col-sm-4" id="authors">
            <div class="recTitle"><span>Authors</span></div>
            <div class="RECauthors">
                <a href="#">
                    <div class="authorblock">
                        <div class="AHthumb"><img src="<?php echo $DIR_IMG; ?>/author_img_1.jpg" class="img-circle"></div>
                        <div class="AHname"><?php echo $authorname[8]; ?></div>
                    </div>
                </a>
                <a href="#">
                    <div class="authorblock">
                        <div class="AHthumb"><img src="<?php echo $DIR_IMG; ?>/author_img_2.jpg" class="img-circle"></div>
                        <div class="AHname"><?php echo $authorname[1]; ?></div>
                    </div>
                </a>
                <a href="#">
                    <div class="authorblock">
                        <div class="AHthumb"><img src="<?php echo $DIR_IMG; ?>/author_img_3.jpg" class="img-circle"></div>
                        <div class="AHname"><?php echo $authorname[2]; ?></div>
                    </div>
                </a>
                <a href="#">
                    <div class="authorblock">
                        <div class="AHthumb"><img src="<?php echo $DIR_IMG; ?>/author_img_4.jpg" class="img-circle"></div>
                        <div class="AHname"><?php echo $authorname[3]; ?></div>
                    </div>
                </a>
                <a href="#">
                    <div class="authorblock">
                        <div class="AHthumb"><img src="<?php echo $DIR_IMG; ?>/author_img_5.jpg" class="img-circle"></div>
                        <div class="AHname"><?php echo $authorname[4]; ?></div>
                    </div>
                </a>
                <a href="#">
                    <div class="authorblock">
                        <div class="AHthumb"><img src="<?php echo $DIR_IMG; ?>/author_img_6.jpg" class="img-circle"></div>
                        <div class="AHname"><?php echo $authorname[13]; ?></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<footer class="footer container-fluid navbar-fixed-bottom">
    <span>&copy; DZQ | <a href="home">Home</a></span>
</footer>


<script src="<?php echo $DIR_JS; ?>/jquery-3.2.1.js"></script>
<script src="<?php echo $DIR_JS; ?>/bootstrap.js"></script>
<script src="<?php echo $DIR_JS; ?>/plug-in.min.js"></script>
<script>
$tbefore = new Date().getTime();
    $(window).on('load', function () {
        $tafter = new Date().getTime();
        $t = $tafter-$tbefore
        if($t<1000){
            setTimeout(function () { $('body').addClass('loaded'); },1500-$t);
        }else {
            $('body').addClass('loaded');
        }

    });
$(document).ready(function () {
    var Bmenu = $('.mobile-nav'),
        Blogo = $('.logo'),
        book_a = $('.book>a'),
        isopen = false;

    Bmenu.click(function(){menushow();});
    Blogo.click(function(){menushow();});
    book_a.click(function(){
        $.Pop(
            '该书本由内测会员可观看，尽请期待版本公测！',//内容
            'alert'//标题
            )
    });

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
