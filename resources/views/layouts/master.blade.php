<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        UPLOADCARE_PUBLIC_KEY = 'acb109c698d98153f637';
    </script>
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
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">


    <!-- Styles -->
    <style>
        body {
            background: url("https://s11.postimg.org/o6n00wfc3/6806_tall.jpg");
            background-size: 100% auto;
            background-repeat: no-repeat;
        }
        #gauge {
            height: 440px;
            width: 100%;
        }
        #reviews {
            font-family: 'Gloria Hallelujah', cursive;
            font-size: 30pt;
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

        h4{
            color: black;
            font-family: "Courier";
            font-size: 20px;
            margin: 10px 0 0 10px;
            white-space: nowrap;
            overflow: hidden;
            width: 30em;
            animation: type 4s steps(60, end);
        }

        h4:nth-child(2){
            animation: type2 8s steps(60, end);
        }

        h4 a{
            color: black;
            text-decoration: none;
        }
        .right-align {
            float: right;
            text-align: center;
        }



        .clearfix {
            float:left;
            overflow: auto;
            zoom: 1;
        }

        #tinypic {
            text-align: center;
        }

        /*span{*/
            /*animation: blink 1s infinite;*/
        /*}*/

        @keyframes type{
            from { width: 0; }
        }

        @keyframes type2{
            0%{width: 0;}
            50%{width: 0;}
            100%{ width: 100; }
        }

        @keyframes blink{
            to{opacity: .0;}
        }

        .error {
            color: red;
        }

        .yellowtail {
            font-family: 'Permanent Marker', cursive;
        }


    </style>
</head>
<body>

<ul id="slide-out" class="side-nav">
    <li><div class="userView">

            <form class="search" action="/search" method="GET">
                <input type="text" name="search" value=""/>
                <button class="btn waves-effect waves-light submit" type="submit" name="action">search dates
                    <i class="material-icons right">send</i>
                </button>
            </form>
    </div></li><br><Br><Br><Br>
    <li><a href="{{ URL::to('/') }}"><i class="material-icons">home</i> home page </a></li>
    <li><a href="{{ URL::to('/dates/create') }}"><i class="material-icons">library_add</i> add a review</a></li>
    <li><a href="{{ URL::to('/dates') }}"><i class="material-icons">pageview</i> browse reviews</a></li>
    <li><a href="{{ URL::to('/faq') }}"><i class="material-icons">live_help</i> faq</a></li>

</ul>
<a href="#" data-activates="slide-out" class="button-collapse  btn-floating btn-large waves-effect waves-light menu"><i class="large material-icons blue">view_headline</i></a>



<div class="searchbar">@yield('searchbar')</div>
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
    $(document).ready(function(){
        $('.tooltipped').tooltip({delay: 50});
        $('.button-collapse2').sideNav({
                    menuWidth: 300, // Default is 240
                    edge: 'left', // Choose the horizontal origin
                    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                    draggable: true // Choose whether you can drag to open on touch screens
                }
        );

    });
$(function(){
    $("#gauge").dxLinearGauge({
        scale: {
            startValue: 0,
            endValue: 10,
            tickInterval: 1,
            tick: {
                color: "#536878"
            },
            label: {
                indentFromTick: -3
            }
        },
        rangeContainer: {
            offset: 10,
            ranges: [
                { startValue: 0, endValue: 3, color: "#92000A" },
                { startValue: 4, endValue: 6, color: "#E6E200" },
                { startValue: 7, endValue: 10, color: "#77DD77" }
            ]
        },
        valueIndicator: {
            offset: 20
        },
        subvalueIndicator: {
            offset: -15
        },
        "export": {
            enabled: true
        },
        title: {
//           text: "Issues Closed (with Min and Max Expected)",
            font: { size: 28 }
        },
        value: 17,
        subvalues: [0, 10]
    });
});




</script>


</html>
