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