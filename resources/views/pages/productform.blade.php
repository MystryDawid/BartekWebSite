@extends('layouts.adminindex')

<?php 
    $data = [];
    foreach($categoris as $item){
        $data[$item['id']] = $item['Name'];
    }
?>


@section('content')
<br><br>
<div class="container">
    <div class="row m-auto">
        {!! Form::open(['method' => 'POST','enctype' => 'multipart/form-data','action' => 'BartekAdminUrbanController@AddProduct','class' => 'w-100'] )    !!}
        {{  Form::label('nazwa',"Nazwa")    }}
        {{  Form::text('nazwa',"",['class' => 'form-control', 'placeholder' => "Nazwa towaru"]) }}
        {{  Form::label('description',"Opis")   }}
        {{  Form::textarea('description',"",['class' => 'form-control', 'placeholder' => "Opis"])   }}
        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">{{"Kategorie"}}</span>
            </div>
            <div class="input-group-append "> 
                {{  Form::select('category', $data, 1,['class' => 'btn btn-dark']) }}
            </div>
            <div class="input-group-append"> 
                    {{  Form::label('Oncarousel',"Czy ma pojawić się na slajdach?",['class' => 'input-group-text']) }}
            <div class="input-group-text">
                {{  Form::checkbox('Oncarousel') }}
            </div>       
            </div>
            {{  Form::file('imgs[]',['multiple' => 'multiple','class' => 'btn btn-dark'])    }}
        </div>
        <h3><span class="badge badge-info justify-content-center d-flex">
            Jeśli chcesz aby dany obrazek był głownym obrazkiem dopisz na początek jego nazwy 1.
        </span></h3>
        <div class="justify-content-center d-flex">
            {{  Form::submit('Dodaj produkt',['class' => 'btn btn-dark btn-lg'])   }}
        </div>
        {!! Form::close() !!}
        
             
    </div>
</div>

@endsection


