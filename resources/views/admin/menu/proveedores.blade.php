@include('admin.administrador')


<div class="container mt-4">
    <h2>Lista de Correos Proveedores</h2>
   
    <table class="table">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Contacto</th>
                <th scope="col">telefono</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $key => $proveedores)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $proveedores->nombre }}</td>
                    <td>{{ $proveedores->contacto }}</td>
                    <td>{{ $proveedores->telefono }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
