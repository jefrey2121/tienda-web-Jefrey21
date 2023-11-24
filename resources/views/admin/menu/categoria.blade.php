@include('admin.administrador')


<div class="container mt-4">
    <h2>Categorias</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">categoria</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $key => $categoria)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $categoria->nombre }}</td>
                    <td>
                       -
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
