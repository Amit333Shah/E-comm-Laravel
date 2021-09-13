<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style>
    .custom-product{
        height:500px;
        padding-top:50px;
    }
    .bak{
        color:black;
    }
    .slide-style{
        height:300px;
    }
    }
    #img-item{
        height:200px;
    }
    .tranding-img{
        height:100px;
        width:80%;
        border:2px solid black;
    }
    .tranding-items{
        float: left;
        width:20%;
    }
    .tranding-wrapper{
        margin:20px;

    }
    .detail-img{
        height:100%;
        width:300px;
    }
    .btn-detail{
        padding-bottom:10px;
    }
    .search-box{
        width:500px;
    }
    .cart-items{
        border-bottom: 2px solid black;
        padding:20px;
        margin:10px;
    }
    .cart-img{
        height:70 %;
        width:50%;
    }
    .custom-order{
        height:500px;
    }
</style>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>

<!-- <script>
    // $(document).ready(function(){

    //     $("button").click(function(){
    //         alert("hello")
    //     })
    // })
</script> -->
</html>