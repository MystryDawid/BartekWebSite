@extends('layouts.adminindex')

@section('content')
<br><br>
<div class="container">
    <div class="row m-auto">
        {!! Form::open(['method' => 'POST','action' => 'BartekAdminUrbanController@AddCategory','class' => 'w-100'] )!!}
        <div class="input-group mb-3">
            {{  Form::text('Kategoria',"",['class' => 'form-control'])    }}
            <div class="input-group-prepend">
                <span class="input-group-text">Kategoria</span>
                {{  Form::submit('Dodaj',['class' => 'btn btn-outline-secondary'])   }}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection
