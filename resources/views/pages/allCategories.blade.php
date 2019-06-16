@extends('layouts.adminindex')

@section('content')
<br><br>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kategoria</th>

                <th>Edytuj</th>
                <th>Usuń</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categoris as $category)
            <tr>
                <td style="width: 55%">{{$category->Name}}</td>
                <td style="width: 22%">
                    <a href="{{url("/BartekAdminUrban/StartEditCategory/".$category->id)}}" 
                        class="btn bg-dark text-white">Edytuj kategorię</a>
                </td>
                <td style="width: 33%">
                    <a href="{{url("/BartekAdminUrban/DeleteCategory/".$category->id)}}" 
                        class="btn bg-dark text-white">Usuń kategorię</a>    
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection
