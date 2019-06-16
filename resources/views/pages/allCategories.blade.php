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
                    <button name="potwierdzenie" type="button" class="btn btn-lg btn-danger justify-content-center" data-toggle="popover" 
                        title="Jesteś pewien?"
                        data-placement="left"
                        data-html = "true"
                        data-content = 
                                '<a href = "{{url("/BartekAdminUrban/DeleteCategory/".$category->id)}}"
                                class="btn btn-danger text-white">Usuń</a>'
                        
                        >Usuń kategorię </button>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <h3 class="w-100"><div class=" justify-content-center w-100 badge badge-warning">
        Jeśli usuniesz daną kategorię wszystkie produkty z tą kategorią zostaną usunięte.
    </div></h3>
</div>

@endsection
