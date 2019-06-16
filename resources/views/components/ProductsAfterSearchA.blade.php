<div class="container">
    <div class="row justify-content-around">
            @foreach ($products as $product)
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <a href="{{url('product/'.$product['Id']."/")}}">
                        <img src="{{asset("public/storage/images/".$product['Id']."/1.jpg")}}" class="rounded mx-auto d-block" alt="{{$product['Nazwa']}}">
                        <br>
                        <h5 class="justify-content-center d-flex">{{$product['Nazwa']}}</h5>
                    </a>
                    <div class="btn-group justify-content-center d-flex" role="group">
                        <button type="button" class="btn btn-secondary">Edytuj</button>
                        <button name="potwierdzenie" type="button" class="btn btn-lg btn-danger justify-content-center" data-toggle="popover" 
                        title="Jesteś pewien?"
                        data-placement="top"
                        data-html = "true"
                        data-content = 
                                '<a href = "{{url("/BartekAdminUrban/DeleteProduct/".$product['Id'])}}"
                                    class="btn btn-danger text-white">Usuń</a>'
                        
                        >Usuń</button>
                    </div>
                </div>
            @endforeach
    </div>  
    <br><br>
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
