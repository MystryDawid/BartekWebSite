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

            
                    {!! Form::open(['method' => 'GET','action' => 'PagesController@search', 'class' => 'input-group', 'required','minlength'=>"1"] ) !!} 
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
</div>