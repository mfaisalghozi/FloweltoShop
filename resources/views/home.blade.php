@extends('layouts.app')

@section('content')
<div class="container">
    <div class="homepage text-center">
        <div class="atas text-center" >
            <h1 class="judul">Welcome to Flowelto Shop</h1>
            <h4 class="subjudul">The Best Flower Shop in Binus University</h4>
        </div>
        <div class="cat">
                -- @foreach ($cat as $catt)
                    
                <div class="category">
                    <div class="catimg"><img src="/img/{{$catt -> catimg}}" height="300" width="220"></div>
                    <div class="catname"><a>{{$catt -> catname}}</a></div>
                <div class="details"><a href="/details/{{$catt -> id}}">See Products</a></div>
                </div>
                @endforeach
                
        </div>
    </div>
</div>
@endsection
