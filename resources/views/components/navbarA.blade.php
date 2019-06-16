<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col text-nowrap pt-1">
            <a class="text-muted" href="#">Links to socialmedia</a>
        </div>
        <div class="col text-center">
            <a class="blog-header-logo text-dark" href="{{url('/')}}">LOGO</a>
        </div>
        <div class="col d-flex justify-content-end align-items-center">

            
                    {!! Form::open(['method' => 'GET','action' => 'BartekAdminUrbanController@searchA', 'class' => 'input-group', 'required','minlength'=>"1"] ) !!} 
                    {{  Form::text('nazwa',"",['class' => 'form-control input-group-append', 'placeholder' => "Nazwa towaru"]) }}
                    {{  Form::submit("Szukaj", ['class' => "input-group-append"]) }}
                    {!! Form::close() !!}
            


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
                    <a class="p-2 text-muted" href="{{url("/category/{$item['id']}")}}">{{$item['Name']}}</a>
                @endforeach
            </nav>
        </div>
    </nav>
    <div class="row">
        <div class="col">
            <div class="btn-group mr-2 w-100 justify-content-center " role="group" aria-label="First group">
                <a href="{{url("/BartekAdminUrban/StartAddCategory")}}" class="btn bg-dark text-white">Dodaj kategorię</a>
                <a href="{{url("/BartekAdminUrban/StartEditCategory")}}" class="btn bg-dark text-white">Edytuj kategorię</a>
                <a href="{{url("/BartekAdminUrban/StartAddProduct")}}" class="btn bg-dark text-white">Dodaj produkt</a>
                <a href="{{url("/BartekAdminUrban/StartEditProduct")}}" class="btn bg-dark text-white">Edytuj produkt</a>
                <a class="btn bg-dark text-white" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>