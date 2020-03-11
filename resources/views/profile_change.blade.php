@extends('layouts.main_layout')

@section('profile_change')

    <div class="row ">
        <div class="container col-4 shadow-lg text-center">
            <form  action="" method="">
                    <p class="h4 mb-4">Редагування</p>

                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" name="u_name" placeholder="Імя" value="{{Auth::user()->name}}">

                    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" name="u_email" placeholder="Емейл" value="{{Auth::user()->email}}">

                    <input type="number" id="defaultLoginFormPassword" class="form-control mb-4" name="u_phone" placeholder="Номер телефону" value="{{Auth::user()->phone}}">

                <input type="text" class="invisible" name="u_id" value="{{Auth::user()->id}}">

                    <button id="btn" class="btn-info btn btn-block my-4" type="submit" onclick="profile_update(this.id)">Редагувати</button>

            </form>
        </div>
    </div>

    <script type="text/javascript">


        $('.btn-info').click(function (e) {
            e.preventDefault();
        var formData = {
            'name': $('input[name=u_name]').val(),
            'email': $('input[name=u_email]').val(),
            'phone': $('input[name=u_phone]').val(),
            'id' : $('input[name=u_id]').val()
        };
        $.ajax({
            url: "/profile_update",
            dataType:"text",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data:formData,
            complete: function () {
            },
            statusCode: {
                200: function (message) {
                    alert(message);
                    var status=document.getElementsByClassName('status');
                    status.innerHTML='<p>Success</p>';
                },
                403: function (jqXHR) {
                    var error = JSON.parse(jqXHR.responseText);
                    $("body").prepend(error.message);
                }
            },
            error: function (xhr, status, errorThrown) {
                alert(errorThrown + '\n' + status + '\n' + xhr.statusText);
            }
        });
    });
    </script>

@endsection