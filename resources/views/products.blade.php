@extends('layouts.app')


@section('content')
<div style='height:70vh' class="section">
<div class="container justify-content-center h-100">
    <div class="row text-center">
        <div class="col-md-12">
            <h1 class="judul">Our {{$prod -> catname}} Collection</h1>
        </div>
        <form style="margin-top: 20px" action="/products/{{$prod -> id}}/search" method="GET">
          <input type="text" name="search" placeholder="Search flower by name.." value="{{ old('search') }}">
          <input type="submit" value="SEARCH">
        </form>
        <form style="margin-top: 20px; margin-left: 50px" action="/products/{{$prod -> id}}/searchharga" method="GET">
          <input type="text" name="search" placeholder="Search flower by price.." value="{{ old('search') }}">
          <input type="submit" value="SEARCH">
        </form>
        </div>

        <div class="row">
          @guest
          @foreach ($flower as $flo)
            <div class="text-center col-md-3">
        
            <div class="card" style="width: 282px; margin-top: 7%; margin-bottom:7%;">
                <img class="card-img-top" src="/image/{{$flo -> productimg}}" style="height: 280px; width: 280px" alt="Flower">
                <div class="card-body">
                  <a href="/details/{{$flo -> id}}" class="btn" style="font-size: 25px">{{$flo -> productname}}</a>
                  <h5 class="card-title" style="color: pink">Rp. {{$flo -> productprice}}</h5>

                </div>
              </div>
            </div>
              @endforeach  
             
               
          @else    
          @if (Auth::user()->roleid === 1)
          @foreach ($flower as $flo)
            <div class="text-center col-md-3">
        
            <div class="card" style="width: 282px; margin-top: 7%">
                <img class="card-img-top" src="/image/{{$flo -> productimg}}" style="height: 280px; width: 280px" alt="Flower">
                <div class="card-body">
                  <a href="/details/{{$flo -> id}}" class="btn" style="font-size: 25px">{{$flo -> productname}}</a>
                  <h5 class="card-title" style="color: pink"> Rp. {{$flo -> productprice}}</h5>
                  <a style="background-color:pink; border-color:pink" href="/details/{{$flo -> id}}" class="btn btn-primary">Delete Flower</a>
                  <a style="margin-top:10px; background-color:pink; border-color:pink" href="/update/{{$flo -> id}}" class="btn btn-primary">Update Flower</a>

                </div>
              </div>
            </div>
              @endforeach   
          @else
          @foreach ($flower as $flo)
            <div class="text-center col-md-3">
        
            <div class="card" style="width: 282px; margin-top: 7%; margin-bottom:7%;">
                <img class="card-img-top" src="/image/{{$flo -> productimg}}" style="height: 280px; width: 280px" alt="Flower">
                <div class="card-body">
                  <a href="/details/{{$flo -> id}}" class="btn" style="font-size: 25px">{{$flo -> productname}}</a>
                  <h5 class="card-title" style="color: pink">Rp. {{$flo -> productprice}}</h5>

                </div>
              </div>
            </div>
              @endforeach   
              @endif 
              @endguest

           
    </div>
    <div> {{ $flower->links() }} </div>
</div>
</div>
@endsection