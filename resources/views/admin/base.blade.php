<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary text-white">
        <div class="container">
            <a href=""class="navbar-brand">portal wala</a>
        <ul class="navbar-nav ml-auto">
            <li class="navbar-item">
                <a href="#"class="nav-link">home</a>
            </li>
            <li class="navbar-item">
                <a href="#"class="nav-link">about</a>
            </li>
            <li class="navbar-item">
                <a href="#"class="nav-link">contact</a>
            </li>
            <li class="navbar-item">
                <a href="{{route("login")}}"class="nav-link">login</a>
            </li>
            <li class="navbar-item">
                <a href="{{route("register")}}"class="nav-link">Register</a>
            </li>
            <li class="navbar-item">
                <a href="#"class="nav-link">service</a>
            </li>
            <li class="navbar-item">
                <a href="#"class="nav-link">apply</a>
            </li>
        </ul>
        </div>
    </nav>
    <div class="container mt-5">
    <div class="row">
    <div class="col-lg-3">
        <div class="list-group mt-2 ">
            <a href="#" class="list-group-item list-group-item-action active">our station</a>
            <a href="{{route("admin.dashboard")}}" class="list-group-item list-group-item-action">dashboard</a>
            <a href="{{route("admin.manage")}}" class="list-group-item list-group-item-action">manage requests</a>
            <a href="{{route("admin.portal.index")}}" class="list-group-item list-group-item-action">manage Portals</a>
            <a href="#" class="list-group-item list-group-item-action">logout</a>
            <a href="#" class="list-group-item list-group-item-action">bharatpay</a>
            <a href="#" class="list-group-item list-group-item-action">googlepay</a>
            <a href="#" class="list-group-item list-group-item-action">mobile recharge</a>
            <a href="#" class="list-group-item list-group-item-action">aadhar payment</a>
        </div>
    </div>


    @section('content')
        
    @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<!-- JavaScript Bundle with Popper -->
