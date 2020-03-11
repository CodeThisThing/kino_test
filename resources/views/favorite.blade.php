@extends("layouts.main_layout")

@section('favorite_page')

    <div class="row">

        <div class="container col-4 mt-5">
            @foreach($favorite_films as $object)
                @foreach($films as $film)
                    @if($film->id==$object->film_id)
                    <div class="card mt-5 mr-3 shadow-lg text-center">
                        <div class="card-title d-inline-flex justify-content-between" >
                            <h3 class="ml-5">{{$film->title}}</h3>
                            <i id="{{$film->id}}" class="fa fa-heart fa-3x mt-3 mr-3 " style="color: red" onclick="del_favorite(this.id)" ></i>
                        </div>
                        <div class="card-img">
                            <img class="img-fluid" src="{{$film->photo_src}}" onclick="location.href='/film/{{$film->id}}'" alt="">
                        </div>
                    </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>

    <script type="text/javascript">
        function del_favorite(film_id) {
            $.ajax(
                {
                    url: '/delFavorite',
                    type: 'POST',
                    dataType: "text",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        "_token": "{{ csrf_token() }}",
                        film_id: film_id
                    },
                    complete: function () {
                        document.getElementById(film_id).style.color = 'Gray';
                    },
                    statusCode: {
                        200: function (message) {
                            alert(message);
                        },
                        403: function (jqXHR) {
                            var error = JSON.parse(jqXHR.responseText);
                            $("body").prepend(error.message);
                        }
                    },
                    error: function (xhr, status, errorThrown) {
                        alert(errorThrown + '\n' + status + '\n' + xhr.statusText);
                    }
                }
            )
        };






    </script>

@endsection