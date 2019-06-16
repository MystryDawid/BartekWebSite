@extends('layouts.adminindex')

@section('content')
<br><br>
<div class="container">
    <div class="row m-auto">
        {!! Form::open(['method' => 'POST','action' => 'BartekAdminUrbanController@AddProduct','class' => 'w-100'] )!!}
        {{  Form::label('nazwa',"Nazwa")}}
        {{  Form::text('nazwa',"",['class' => 'form-control', 'placeholder' => "Nazwa towaru"])}}
        {{  Form::label('description',"Opis")}}
        {{  Form::textarea('description',"",['class' => 'form-control', 'placeholder' => "Opis"])}}
        {{  Form::label('category',"kategorie")}}
        {{ Form::select('category', array('L' => 'Large', 'S' => 'Small')) }}<br>
        {{ Form::file('imgs',['multiple' => 'multiple']) }}

        
        {!! Form::close() !!}
    </div>
</div>

@endsection


<?php 
/*

*/?>

