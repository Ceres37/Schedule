<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>
    <!-- Fonts -->

    <style>@import "http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css";</style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <title>Hello, world!</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{route('schedule')}}">Расписание ИАТ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link bg-success " href="javascript: void(0)" style="color: white; border-radius: 5px; margin-right: 5px" onclick="generateTable(1)">
                    1 курс <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-success " href="javascript: void(0)" style="color: white; border-radius: 5px; margin-right: 5px" onclick="generateTable(2)">
                    2 курс<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-success " href="javascript: void(0)" style="color: white; border-radius: 5px; margin-right: 5px" onclick="generateTable(3)">
                    3 курс <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-success " href="javascript: void(0)" style="color: white; border-radius: 5px; margin-right: 5px" onclick="generateTable(4)">
                    4 курс<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-success" href="#" style="color: white; border-radius: 5px; margin-right: 5px">
                    5 курс<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <select class="form-control" id="listTeachers">
                    <option value="none">Не выбрано!</option>
                    @foreach($teachers as $teacher => $value)
                        <option value="{{$teacher}}">{{$value}}</option>
                        @endforeach
                </select>
            </li>
            {{--<div  class = "date-group date"  data-provide = "datepicker navbar fixed-bottom" style="margin-left: 50px" >--}}
            {{--<input  type = "text"  class = "form-control" >--}}
            {{--<div  class = "input-group-addon" >--}}
            {{--<span  class = " glyphicon glyphicon-th " > </span >--}}

            {{--</div >--}}
            {{--</div >--}}
        </ul>

    </div>
</nav>
@yield('con')
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{asset('js/classes.js')}}"></script>
</body>
</html>