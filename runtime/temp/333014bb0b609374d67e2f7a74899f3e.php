<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\IDE\xampp\htdocs\BookHouse\public/../application/index\view\index\store.html";i:1515855839;}*/ ?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/bootstrap-theme.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/loader.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/common.css" type="text/css">
    <!--<link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/homestyle.css" type="text/css">-->
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/homestyle.css" type="text/css" media="screen and (min-width: 768px)">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/homestyle-s.css" type="text/css" media="screen and (max-width: 767px)">

    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/store.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/store-s.css" type="text/css">

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

<div class="store">
    <div class="store_title">The first selection</div>
    <div class="store_asstext">The latest and best books selected by our editorial office</div>
    <div class="store_books">
        <div class="store_book_h card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[0]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[0]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_h_1.jpg" alt="">
        </div>
        <div class="store_book_v card">
        <div class="book_info ">
            <div class="info_title center-block"><?php echo $bookname[1]; ?></div>
            <div class="info_author center-block"><?php echo $authorname[1]; ?></div>
            <div class="bookgrade center-block" style="color: #ffffec">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
            <button type="button" class="btn btn-default btn-lg center-block">Read</button>
        </div>
        <img src="<?php echo $DIR_IMG; ?>/bookpage_v_1.jpg" alt="">
    </div>
        <div class="store_book_v card">
        <div class="book_info ">
            <div class="info_title center-block"><?php echo $bookname[2]; ?></div>
            <div class="info_author center-block"><?php echo $authorname[2]; ?></div>
            <div class="bookgrade center-block" style="color: #ffffec">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
            <button type="button" class="btn btn-default btn-lg center-block">Read</button>
        </div>
        <img src="<?php echo $DIR_IMG; ?>/bookpage_v_2.jpg" alt="">
    </div>
        <div class="store_book_v card">
        <div class="book_info ">
            <div class="info_title center-block"><?php echo $bookname[3]; ?></div>
            <div class="info_author center-block"><?php echo $authorname[3]; ?></div>
            <div class="bookgrade center-block" style="color: #ffffec">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
            <button type="button" class="btn btn-default btn-lg center-block">Read</button>
        </div>
        <img src="<?php echo $DIR_IMG; ?>/bookpage_v_3.jpg" alt="">
    </div>
        <div class="store_book_v card">
        <div class="book_info ">
            <div class="info_title center-block"><?php echo $bookname[4]; ?></div>
            <div class="info_author center-block"><?php echo $authorname[4]; ?></div>
            <div class="bookgrade center-block" style="color: #ffffec">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
            <button type="button" class="btn btn-default btn-lg center-block">Read</button>
        </div>
        <img src="<?php echo $DIR_IMG; ?>/bookpage_v_4.jpg" alt="">
    </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[5]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[5]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_5.jpg" alt="">
        </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[6]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[6]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_6.jpg" alt="">
        </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[7]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[7]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_7.jpg" alt="">
        </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[8]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[8]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_8.jpg" alt="">
        </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[9]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[9]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_9.jpg" alt="">
        </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[10]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[10]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_10.jpg" alt="">
        </div>
    </div>
    <div class="store_books">
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[11]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[11]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_11.jpg" alt="">
        </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[12]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[12]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_12.jpg" alt="">
        </div>
        <div class="store_book_h card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[13]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[13]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_h_2.jpg" alt="">
        </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[14]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[14]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_13.jpg" alt="">
        </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[15]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[15]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_14.jpg" alt="">
        </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[16]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[16]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_15.jpg" alt="">
        </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[17]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[17]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_16.jpg" alt="">
        </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[18]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[18]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_17.jpg" alt="">
        </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[19]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[19]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_18.jpg" alt="">
        </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[20]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[20]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_19.jpg" alt="">
        </div>
        <div class="store_book_v card">
            <div class="book_info ">
                <div class="info_title center-block"><?php echo $bookname[21]; ?></div>
                <div class="info_author center-block"><?php echo $authorname[21]; ?></div>
                <div class="bookgrade center-block" style="color: #ffffec">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <button type="button" class="btn btn-default btn-lg center-block">Read</button>
            </div>
            <img src="<?php echo $DIR_IMG; ?>/bookpage_v_20.jpg" alt="">
        </div>
    </div>
</div>



</div>


<footer class="footer container-fluid navbar-fixed-bottom">
    <span>&copy; DZQ | <a href="home">Home</a></span>
</footer>


<script src="<?php echo $DIR_JS; ?>/jquery-3.2.1.js"></script>
<script src="<?php echo $DIR_JS; ?>/bootstrap.js"></script>
<script src="<?php echo $DIR_JS; ?>/jquery.uiAlertView-1.0.0.js"></script>
<script>

$(document).ready(function () {
    var Bmenu = $('.mobile-nav'),
        Blogo = $('.logo'),
        book_button_read = $('.book_info>button'),
        isopen = false;
    Bmenu.click(function(){menushow();});
    Blogo.click(function(){menushow();});
    book_button_read.click(function(){

        $.alertView('该书本由内测会员可观看<br>请耐心等待网站版本公测！');

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
