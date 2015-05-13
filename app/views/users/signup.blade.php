@extends('layouts.main')

<?php
/**
 * @var $data array - все данные
 * @var $langAll array - языки
 *
 */
?>


@section('content')
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2><?=$langAll['title_11']?></h2>
                        {{ Form::open(['url'=>'users/sign-in', 'method'=>'post']) }}
                            {{ Form::text('email', null, ['placeholder'=>'Email', 'maxlength'=>30]) }}
                            <input name="password" value="" type="password" maxlength="20" placeholder="<?=$langAll['title_15']?>">
                            <button type="submit" class="btn btn-default"><?=$langAll['title_16']?></button>
                        {{ Form::close() }}

                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or"><?=$langAll['title_13']?></h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2><?=$langAll['title_12']?></h2>
                        {{ Form::open(['url'=>'users/create-new-account', 'method'=>'post']) }}
                        {{ Form::text('login', null, array('placeholder'=>$langAll['title_14'], 'maxlength'=>20)) }}
                        {{ Form::email('email', null, array('placeholder'=>'Email', 'maxlength'=>30)) }}

                        <input name="password" value="" type="password" maxlength="20" placeholder="<?=$langAll['title_15']?>">
                        <input name="password_confirmation" value="" type="password" maxlength="20" placeholder="<?=$langAll['title_17']?>">
                        <button type="submit" class="btn btn-default"><?=$langAll['title_18']?></button>

                        {{ Form::close() }}
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->

@stop