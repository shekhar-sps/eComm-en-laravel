<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
.custom-login{
    height:500px;
    padding-top:100px;
}
.slide-img{
    height:400px !important;
}
.trending-image{
    height:100px;
    width:50px;
}
.trending-item{
    float:left;
    width:20%;
}
.trending-wrapper{
    margin:40px;
}
.detail-img{
    height:200px;
}
.search-box{
    width:500px !important;
}
.searching-item{
    //float:left;
    width:20%;
}
</style>
</html>