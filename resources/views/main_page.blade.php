@extends('layouts.main_layout')

@section('main_page')


    
    <div class="row justify-content-center " >
        
        @foreach($films as $film)
            
        <div class="card-columns d-inline-block col-8 " >
                <div class="card mt-5 mr-3 shadow-lg"   >
                    <div class="card-img">
                        <img src="{{$film->photo_src}}" alt="">
                    </div>
                </div>


               

        </div>
        @endforeach
    </div>

@endsection