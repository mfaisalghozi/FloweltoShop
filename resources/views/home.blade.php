@extends('layouts.app')

@section('content')
<div class="container">
    <div class="homepage text-center">
        <div class="atas text-center" >
            <h1 class="judul">Welcome to Flowelto Shop</h1>
            <h4 class="subjudul">The Best Flower Shop in Binus University</h4>
        </div>
        <div class="cat">
                @foreach ($namee as $mov)
                    
                <div class="category">
                    <div class="catimg"><img src="/img/{{$mov -> photo}}" height="300" width="220"></div>
                    <div class="catname"><a>{{$mov -> title}}</a></div>
                <div class="details"><a href="/details/{{$mov -> id}}">See Products</a></div>
                </div>
                @endforeach
                
        </div>
    </div>
</div>
@endsection
