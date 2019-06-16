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
        {{  Form::label('category',"kategorie") }}
        {{  Form::select('category', $data) 
        
        
        }}<br>
        {{  Form::file('imgs[]',['multiple' => 'multiple'])    }}
        {{  Form::submit('Click me!')   }}
        {!! Form::close() !!}
    </div>
</div>

@endsection


