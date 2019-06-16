@extends('layouts.adminindex')

@section('content')
<br><br>
<div class="container">
    @foreach ($categoris as $item)
        @if ($item->id == $id)

            <div class="container">
                <div class="row m-auto">
                    {!! Form::open(['method' => 'POST',
                                    'action' => 'BartekAdminUrbanController@UpdateCategory','class' => 'w-100'] )!!}
                    <div class="input-group mb-3">
                        {{  Form::text('Kategoria',$item->Name,['class' => 'form-control'])}}
                        {{  Form::hidden('idC',$item->id)}}
                        <div class="input-group-prepend">
                            <span class="input-group-text">Kategoria</span>
                            {{  Form::submit('Aktualizuj',['class' => 'btn btn-outline-secondary'])   }}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        @endif 
    @endforeach 
</div>

@endsection
