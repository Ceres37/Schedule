@extends('layouts.MainLayout')
@section('con')
    <div class="col-lg-12">

            <nav class="navbar navbar-dark  bg-primary">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    &#9776;
                </button>
                <div class="col-lg-10">
                <div class="collapse" id="exCollapsingNavbar">
                    <div class="bg-inverse p-a-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Привет <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Рассписание</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Шаблон</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Печать</a>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            </nav>

    </div>
    <div class="container">
        <div>
            <select class="form-control form-control-lg-10" type="text" placeholder=".form-control-lg">
                <option value="1">Первый курс</option>
                <option value="2">Второй курс</option>
                <option value="3">Третий курс</option>
                <option value="4">Четвертый курс</option>
            </select>
        </div>
    </div>
    @endsection
