<div class="container">
    <div class="row justify-content-around">
            @foreach ($products as $product)
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <a href="{{url('product/'.$product['Id']."/")}}">
                        <img src="{{asset($product['path'])}}" class="rounded mx-auto d-block" alt="{{$product['Nazwa']}}">
                        <br>
                        <h5 class="justify-content-center d-flex">{{$product['Nazwa']}}</h5>
                    </a>
                </div>
            @endforeach
    </div>  
    <div class="row w-100 d-flex justify-content-center">
            @if ($products->currentPage() != 1)
            <div class="col-lg-2 text-right"><a href="{{$products->previousPageUrl()}}">Poprzednia strona</a></div> 
            @else
            <div class="col-lg-2"></div>
            @endif
                
                <div class="col-lg-auto"><a>{{$products->currentPage()}}</a></div>
                <div class="col-lg-2"><a href="{{$products->nextPageUrl()}}">Następna strona</a></div>
        
        
    </div>
</div>
