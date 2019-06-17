@extends('layouts.user')
@section('content')


<div class="container">
<br><br>
    <div class="row">
      <div class="col-lg-6 col-md-12 justify-content-center">
            <div class="d-flex justify-content-center">
                <img class="BigImgProduct" src="{{asset($product[0]['path'])}}" id="expandedImg">
            </div>
            
          
          <br>
          <div class="justify-content-around d-flex">
            @foreach ($product as $image)
              <img class="smallImgProduct" src="{{asset($image['path'])}}" onclick="myFunction(this);">
            @endforeach
          </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <h2>{{$product[0]['Nazwa']}}</h2>
          {{$product[0]['Description']}}
      </div>
      
      
    </div>

</div>

<br><br><br>

<div class="container">
        <div class="justify-content-center d-flex">
            <h3>Inne produkty</h3>
        </div>
        <br>
   
        @include('components.otherProducts')

</div>


@endsection

