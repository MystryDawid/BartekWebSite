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
        {{  Form::text('nazwa',$product[0]->Nazwa,['class' => 'form-control', 'placeholder' => "Nazwa towaru"]) }}
        {{  Form::label('description',"Opis")   }}
        {{  Form::textarea('description',$product[0]->Description,['class' => 'form-control', 'placeholder' => "Opis"])   }}
        {{  Form::label('category',"kategorie") }}
        {{  Form::select('category', $data, $product[0]->Category) }}
        {{  Form::label('Oncarousel',"Czy ma pojawić się na slajdach?") }}
        @if ($product[0]->Oncarousel)
        {{  Form::checkbox('Oncarousel',"", "checked") }}
        @else
        {{  Form::checkbox('Oncarousel') }}
        @endif
        <br>
        {{  Form::file('imgs[]',['multiple' => 'multiple'])    }}
        @foreach ($product as $image)
        <img class="smallImgProduct" src="{{asset($image['path'])}}">
            @endforeach
        {{  Form::submit('Edytuj')   }}
        {!! Form::close() !!}
    </div>

</div>

@endsection


