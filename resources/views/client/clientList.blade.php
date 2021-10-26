<!-- heredando de la plantilla base -->
@extends('welcome')

<!-- Editamos el Title de Pestaña -->
@section('title', 'Clients List')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-4">Clientes</h2>

                <table class="table table-bordered table-hover text-center">

                    <!-- Encabezado de Tabla" -->
                    <thead style="background-color: #95EEE3">
                        <tr>
                            <th>Nombre</th>
                            <th>Compañia</th>
                            <th>Telefono</th>
                            <th>Email</th>
                        </tr>
                    </thead>

                    <!-- Cuerpo de Tabla -->
                    <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{ $client -> nombre }}</td>
                            <td>{{ $client -> compañia }}</td>
                            <td>{{ $client -> telefono }}</td>
                            <td>{{ $client -> email }}</td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>

                <!-- Paginacion de Numero de clientes -->
                {{ $clients->links() }}

            </div>

        </div>

    </div>
@endsection