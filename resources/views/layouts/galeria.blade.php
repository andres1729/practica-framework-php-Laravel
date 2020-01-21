@extends("layouts.plantilla")

@section("cabecera")


@endsection

@section("infogeneral")

<p>Informacion general de la pagina</p>

    @if(count($alumnos))

    <table width="50%" border="1">
    @foreach($alumnos as $persona)

        <tr>

          <td>
            {{$persona}}
          </td>
        </tr>
    @endforeach
    </table>

    @else
        {{"sin alumnos"}}


    @endif



@endsection

@section("pie")


@endsection
