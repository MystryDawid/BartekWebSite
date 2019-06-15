<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-lg-1 col-1 text-nowrap pt-1">
            <a class="text-muted" href="#">Links to socialmedia</a>
        </div>
        <div class="col-lg-1 col-1 text-center">
            <a class="blog-header-logo text-dark" href="{{url('/')}}">LOGO</a>
        </div>
        <div class="col-lg-1 col-1 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
            </a>
        </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler align-items-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <nav class="nav d-flex  justify-content-center w-100">
                @foreach ($categoris as $item)
                    <a class="p-2 text-muted" href="#">{{$item['Name']}}</a>
                @endforeach
            </nav>
        </div>
    </nav>
    <div class="row">
        <div class="col">
            <div class="btn-group mr-2 w-100 justify-content-center " role="group" aria-label="First group">
                <a href="{{url("/BartekAdminUrban/StartAddCategory")}}" class="btn bg-dark text-white">Dodaj kategorię</a>
                <a href="{{url("/BartekAdminUrban/StartAddProduct")}}" class="btn bg-dark text-white">Dodaj produkt</a>
                <a href="{{url("/BartekAdminUrban/StartEditProduct")}}" class="btn bg-dark text-white">Edytuj produkt</a>
                <a href="{{url("/BartekAdminUrban/StartDelProduct")}}" class="btn bg-dark text-white">Usuń produkt</a>
                
                
                </div>
        </div>
    </div>
</div>