<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ $settings->site_name }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/styles.css') }}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/magnific-popup.css') }}">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="app/css/rtl.css">-->

    <!--External fonts-->

    <link href="{{ asset('https://fonts.googleapis.com/css?family=Varela+Round') }}" rel='stylesheet' type='text/css'>
    <style>
        .padded-50{
            padding: 40px;
        }
        .text-center{
            text-align: center;
        }
    </style>

</head>


<body class=" ">

<div class="content-wrapper">

@include('includes.header')


<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">All of {{ $user->name }}'s posts</h1> 
    </div>
</div>

<div class="header-spacer"></div>

 <div class="row">
                        <div class="case-item-wrap">
                            
                            @foreach($posts as $post)
                            <a href="{{ route('post.single', ['slug' => $post->slug ]) }}">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="height:400px;">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="{{ $post->featured }}" alt="our case" style="height:200px;">
                                    </div>
                                    <h6 class="case-item__title text-center">
                                    <p>
                                    {{ $post->title }}
                                    </p></h6>
                                </div>
                            </div>    
                            </a>
                            @endforeach
                        </div>
                    </div>