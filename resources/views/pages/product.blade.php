@extends('layouts.user')
@section('content')


<div class="container">
<br><br>
    <div class="row">
      <div class="col-lg-6 col-md-12 justify-content-center">
            <div class="d-flex justify-content-center">
                <img class="BigImgProduct" src="{{asset("public/storage/images/".$product['Id']."/1.jpg")}}" id="expandedImg">
            </div>
            
          
          <br>
          <div class="justify-content-around d-flex">
            @for ($i = 1; $i <= $images; $i++)
              <img class="smallImgProduct" src="{{asset("public/storage/images/".$product['Id']."/".$i.".jpg")}}" onclick="myFunction(this);">
            @endfor
          </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <h2>{{$product['Nazwa']}}</h2>
          {{$product['Description']}}
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

