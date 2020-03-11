@extends("layouts.main_layout")

@section('favorite_page')

    <div class="row">

        <div class="container col-4 mt-5">
            @foreach($favorite_films as $object)
                @foreach($films as $film)
                    @if($film->id==$object->film_id)
                    <div class="card mt-5 mr-3 shadow-lg text-center">
                        <div class="card-title" onclick="location.href='/film/{{$film->id}}'">
                            <h3>{{$film->title}}</h3>
                        </div>
                        <div class="card-img">
                            <img class="img-fluid" src="{{$film->photo_src}}" alt="">
                        </div>
                    </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>

@endsection