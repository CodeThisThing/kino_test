@extends('layouts.main_layout')

@section('main_page')




    <div class="container text-center">
        <div class="filters d-inline-flex col-10 text-center shadow-lg">
            <a href="/category/?category=бойовик">Бойовик</a>
            <a href="/category/?category=фентезі">Фентезі</a>
            <a href="/category/?category=історичний">Історичний</a>
            <a href="/category/?category=документальний">Документальний</a>
            <a href="/category/?category=ужаси">Ужаси</a>
            <a href="/category/?category=кримінал">Кримінал</a>
            <a href="/category/?category=детектив">Детектив</a>


        </div>
    </div>
    <div class="row">

        <div class="container col-4  mt-5">

                @foreach($films as $film)
                    <div class="card mt-5 mr-3 shadow-lg text-center">
                            <div class="card-title">
                                <h3>{{$film->title}}</h3>
                            </div>
                            <div class="view overlay">
                                <img class="img-fluid -mouse-pointer" src="{{$film->photo_src}}"  alt="" onclick="location.href='/film/{{$film->id}}'">
                            </div>
                    </div>

                @endforeach

        </div>
    </div>



@endsection