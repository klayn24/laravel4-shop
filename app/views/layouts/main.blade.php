<?php
/**
 * @var $data array - все данные
 * @var $langAll array - языки
 *
 */


$meta_d = preg_replace('/"/',"",strip_tags($data['meta']));
$meta_d = preg_replace("/'/","",$meta_d);
$meta_d = preg_replace("/&nbsp;/"," ",$meta_d);
$meta_d = preg_replace("/&lt;/","",$meta_d);
$meta_d = preg_replace("/&gt;/","",$meta_d);

?>

<!DOCTYPE html>
<html lang="<?=$data['lang']?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$meta_d?>">
    <meta name="author" content="<?=$meta_d?>">
    <title><?=strip_tags($data['title'])?></title>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/font-awesome.min.css') }}
    {{ HTML::style('css/prettyPhoto.css') }}
    {{ HTML::style('css/price-range.css') }}
    {{ HTML::style('css/animate.css') }}
    {{ HTML::style('css/main.css') }}
    {{ HTML::style('css/responsive.css') }}




    <!--[if lt IE 9]>
    {{ HTML::script('js/html5shiv.js') }}
    {{ HTML::script('js/respond.min.js') }}
    <![endif]-->

    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div><!--/header_top-->
    <?php
    /**
     * изменяем юрл, чтобы он оставался прежним, но заменялся язык
     */
    $url = explode('/', $_SERVER['REQUEST_URI']);
    $temp = array();

    if(isset($url[1]) && !isset($url[2]))
    {
        $temp = explode('?', $url[1]);
        unset($temp[0]);
    }

    unset($url[0]); unset($url[1]);
    $url = implode('/', $url);
    if(isset($temp[1]))
        $url .= "?".$temp[1];



    ?>
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/<?=$data['lang']?>"><img src="/images/home/logo.png" alt="<?=$langAll['title_4']?>" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                <?=$langAll['title_2']?>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">

                                <li><a href="/ru/<?=$url?>">Русский</a></li>
                                <li><a href="/en/<?=$url?>">English</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href=""><i class="fa fa-user"></i> Account</a></li>
                            <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            @if(Auth::check())
                                <li><a href="/<?=$data['lang']?>/users/logout" class="active"><i class="fa fa-sign-out"></i> <?=$langAll['title_19']?></a></li>
                            @else
                                <li><a href="/<?=$data['lang']?>/users/login" class="active"><i class="fa fa-lock"></i> <?=$langAll['title_3']?></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.html"><?=$langAll['title_5']?></a></li>

                            <li><a href="#"><?=$langAll['title_8']?></a></li>

                            <li><a href=""><?=$langAll['title_7']?></a></li>
                            <li><a href=""><?=$langAll['title_6']?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        {{ Form::open(['url'=>'search', 'method'=>'get', 'class'=>'searchform']) }}
                        {{ Form::text('search', null, ['placeholder'=>$langAll['title_9'], 'maxlength'=>40]) }}
                        <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>


        <!--сообщения разного рода-->
        <div class="text-center" >
            @if(Session::has('message_error'))
                <br>
                <p class="bg-danger bg">
                    <?=Session::get('message_error')?>
                    @if(!empty($errors->all()))
                        <br><br>
                        @foreach($errors->all() as $error)
                        {{ $error }}<br>
                        @endforeach
                    @endif
                </p>
            @elseif(Session::has('message_ok'))
                <br><p class="bg-success bg"><?=Session::get('message_ok')?></p>
            @endif
        </div>
        <!--Конец сообщениям-->


    </div><!--/header-bottom-->
</header><!--/header-->




@yield('content')






<footer id="footer"><!--Footer-->


    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Service</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">Online Help</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Order Status</a></li>
                            <li><a href="">Change Location</a></li>
                            <li><a href="">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">T-Shirt</a></li>
                            <li><a href="">Mens</a></li>
                            <li><a href="">Womens</a></li>
                            <li><a href="">Gift Cards</a></li>
                            <li><a href="">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">Terms of Use</a></li>
                            <li><a href="">Privecy Policy</a></li>
                            <li><a href="">Refund Policy</a></li>
                            <li><a href="">Billing System</a></li>
                            <li><a href="">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">Company Information</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Store Location</a></li>
                            <li><a href="">Affillate Program</a></li>
                            <li><a href="">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left"><?=$langAll['title_10']?></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->



{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/price-range.js') }}
{{ HTML::script('js/jquery.scrollUp.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/jquery.prettyPhoto.js') }}
{{ HTML::script('js/main.js') }}

</body>
</html>