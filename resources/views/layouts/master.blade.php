<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ratemydate</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Bungee+Hairline|Coming+Soon|Covered+By+Your+Grace|Crafty+Girls|Fredericka+the+Great|Give+You+Glory|Homemade+Apple|Kranky|Megrim|Nothing+You+Could+Do|Pacifico|Reenie+Beanie|Sansita+One|Six+Caps|Special+Elite|Yellowtail" rel="stylesheet">


    <!-- Styles -->
    <style>
        body {
            background: url("https://s11.postimg.org/o6n00wfc3/6806_tall.jpg");
            background-size: 100% auto;
            background-repeat: no-repeat;
        }


        #title {
            font-size: 200px;
            font-family: 'Megrim', cursive;
            color: #ED7112;
            margin-left:20%;
        }

        #slogan {
            font-family: 'Fredericka the Great', cursive;
            margin-top: -15%;
            color: #F04747;
            text-align: right;
            font-size: 60px;

        }

        .menu {
            padding-size: 20%;
            width: 20px;
            height: 20px;
        }

        .main-box {
            background-color: #fff;
            background-color: rgba(255,255,255,0.5);
            height: 600px;
            width: 75%;
            margin-left: 15%;
        }
        label {
            color: black;
            font-size: 16px;
        }
        .input-field label {
            color: #000;
        }
        .ScrollStyle {
            max-height: 600px;
            overflow-y: scroll;
        }


    </style>
</head>
<body>


<ul id="slide-out" class="side-nav">
    {{--<li><div class="userView">--}}

    {{--<a href="#!user"><img class="circle" src="#"></a>--}}
    {{--<a href="#!name"><span class="white-text name">John Doe</span></a>--}}
    {{--<a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>--}}
    {{--</div></li>--}}
    <li><a href="{{ URL::to('/dates/create') }}"><i class="material-icons">library_add</i> add a review</a></li>
    <li><a href="{{ URL::to('/dates') }}"><i class="material-icons">pageview</i> browse reviews</a></li>
    <li><a href="{{ URL::to('/faq') }}"><i class="material-icons">live_help</i> faq</a></li>

</ul>
<a href="#" data-activates="slide-out" class="button-collapse  btn-floating btn-large waves-effect waves-light menu"><i class="large material-icons blue">view_headline</i></a>




<div class="headline">
    @section('headline')
        <p id="title">ratemydate</p>
        <p id="slogan">the secret weapon of online daters</p>
    @show
</div>


<div class="container">
    @yield('content')
</div>

</body>

<script type="text/javascript">


    $(document).ready(function() {
        $('select').material_select();
    });


    // Initialize collapse button
    $(".button-collapse").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    $('.collapsible').collapsible();
</script>
</html>
