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
        {!! Form::open(['method' => 'POST','enctype' => 'multipart/form-data','action' => 'BartekAdminUrbanController@UpdateProduct','class' => 'w-100'] )    !!}
        {{  Form::hidden('id',$product[0]->Id)   }}
        {{  Form::label('nazwa',"Nazwa")    }}
        {{  Form::text('nazwa',$product[0]->Nazwa,['class' => 'form-control', 'placeholder' => "Nazwa towaru"]) }}
        {{  Form::label('description',"Opis")   }}
        {{  Form::textarea('description',$product[0]->Description,['class' => 'form-control', 'placeholder' => "Opis"])   }}
        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">{{"Kategorie"}}</span>
            </div>
            <div class="input-group-append">  
                {{  Form::select('category', $data, $product[0]->Category,['class' => 'btn btn-dark']) }}
            </div>
            <div class="input-group-append"> 
            {{  Form::label('Oncarousel',"Czy ma pojawić się na slajdach?",['class' => 'input-group-text']) }}
            <div class="input-group-text">
                @if ($product[0]->Oncarousel)
                {{  Form::checkbox('Oncarousel',"", "checked") }}
                @else
                {{  Form::checkbox('Oncarousel') }}
                @endif
            </div>
            </div>
        {{  Form::file('imgs[]',['multiple' => 'multiple','class' => 'btn btn-dark'])    }}
    </div>
        <div class="justify-content-center d-flex">
        @foreach ($product as $image)
            <div class="justify-content-center">
                <img class="smallImgProduct" src="{{asset($image['path'])}}"><br>
                {{  Form::checkbox('toDelete[]',$image['id']) }}
            </div>
        @endforeach
        </div>
        <h3><span class="badge badge-info justify-content-center d-flex">
            Zaznacz jeśli chcesz usunąć obrazek.
        </span></h3>
    
        <br>
        <div class="justify-content-center d-flex">
            {{  Form::submit('Edytuj',['class' => 'btn btn-dark btn-lg'])   }}
        </div>
        {!! Form::close() !!}
    </div>

</div>

@endsection


