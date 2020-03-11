@extends('layouts.main_layout')

@section('film_page')
<div class="row">

    <div class="container shadow-lg col-8 mt-5 ">
        <h2>{{$film->title}}</h2>
        <div class="about_film d-inline-flex">
            <div class="img">
                <img class="img-fluid" src="/{{$film->photo_src}}" alt="">
            </div>
            <div class="film_info ml-5">
                <p>{{$film->subtitle}}</p>
                <p>Жанр: {{$film->category}}</p>
                <i id="{{$film->id}}" class="fa fa-heart fa-3x" onclick="add_favorite(this.id)"></i>
            </div>
        </div>
        <div class="film_content text-center">
            <h2>Опис</h2>
            <p>{{$film->content}}</p>
        </div>
    </div>
    <div class="container shadow-lg mt-5 mb-5 col-8 text-center">
        <iframe class="" width="1050" height="600" src="{{$film->trailer_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>


</div>
<script type="text/javascript">
function add_favorite(film_id) {
    $.ajax(
        {
            url:'/addFavorite',
            type: 'POST',
            dataType:"text",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                "_token": "{{ csrf_token() }}",
                film_id:film_id},
            complete: function() {
                document.getElementById(film_id).style.color='red';
            },
            statusCode: {
                200: function(message) {
                    alert(message);
                },
                403: function(jqXHR) {
                    var error = JSON.parse(jqXHR.responseText);
                    $("body").prepend(error.message);
                }
            },
            error:function(xhr, status, errorThrown) {
                alert(errorThrown+'\n'+status+'\n'+xhr.statusText);
            }
        }
    )

}



</script>
@endsection