@extends('layouts.user')
@section('content')

<div class="container">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            @for ($i = 0; $i < count($carousel); $i++)
                <li data-target="#myCarousel" data-slide-to="{{$i}}"
                    @if ($i == 1)
                    class="active"
                    @endif  ></li>
            @endfor
        </ol>
        
        <div class="carousel-inner justify-content-center  bg-dark">
            <?php $i = 0 ?>
            @foreach ($carousel as $item)
            
            @if ($i == 1)
                <div class="carousel-item active">
            @else
                <div class="carousel-item">
            @endif
                <div class="container d-flex justify-content-center">
                <a href="{{url('product/'.$item['Id']."/")}}"><img src="{{asset("public/images/".$item['Id']."/1.jpg")}}"></a>
                </div>
            </div>  
            <?php $i++ ?>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<br>

<div class="justify-content-center d-flex">
    <h2>- życzymy udanych zakupów - </h2>  
</div>

<br>

<div class="container">
        @foreach ($products as $groups)
            <div class="row justify-content-center d-flex">
                @foreach ($groups as $product)
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <a href="{{url('product/'.$product['Id']."/")}}">
                        <img src="{{asset("public/images/".$product['Id']."/1.jpg")}}" class="rounded mx-auto d-block" alt="{{$product['Nazwa']}}">
                        <br>
                        <h5 class="justify-content-center d-flex">{{$product['Nazwa']}}</h5>
                    </a>
                </div>
                @endforeach
            </div>
            <br><br>
        @endforeach
</div>

@endsection
