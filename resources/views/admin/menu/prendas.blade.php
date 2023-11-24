@include('admin.administrador')
<!-- Añadir Prenda -->
<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="d-grid mx-auto">
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalPrendas">
                <i class="fa-solid fa-circle-plus"></i> Añadir Prenda
            </button>
        </div>
    </div>
</div>

<!-- Lista de Prendas -->
<div class="row mt-3">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <!-- Encabezados de la tabla -->
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Marca</th>
                        <th>Talla</th>
                        <th>Categoría</th>
                        <th>Proveedor</th>
                        <th>Precio</th>
                        <!-- Agrega más columnas según tus necesidades -->
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @php $i = 1; @endphp
                    @foreach($prendas as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->marca->nombre }}</td>
                        <td>{{ $row->talla->nombre }}</td>
                        <td>{{ $row->categoria->nombre }}</td>
                        <td>{{ $row->proveedor->nombre }}</td>
                        <td>{{ $row->precio }}</td>
                        <!-- Agrega más celdas según tus necesidades -->
                        <td>
                            <!-- Botón de editar -->
                            <a href="{{ url('prendas', [$row]) }}" class="btn btn-warning">
                                <i class="fa-solid fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <!-- Formulario para eliminar -->
                            <form method="POST" action="{{ url('prendas', [$row]) }}">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Lista de Prendas -->
<div class="row mt-3">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <!-- Encabezados de la tabla -->
                <thead>
                    <tr>
                        <!-- ... (otros encabezados) ... -->
                        <th>Imagen</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @php $i = 1; @endphp
                    @foreach($prendas as $row)
                    <tr>
                        <!-- ... (otras celdas) ... -->
                        <td>
                            <!-- Mostrar imagen -->
                            <img src="{{ asset($row->imagen_url) }}" alt="Imagen de la prenda" class="img-thumbnail" style="max-width: 100px;">
                        </td>
                        <td>
                            <!-- Botón de editar -->
                            <a href="{{ url('prendas', [$row]) }}" class="btn btn-warning">
                                <i class="fa-solid fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <!-- Formulario para eliminar -->
                            <form method="POST" action="{{ url('prendas', [$row]) }}">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal para Añadir Prenda -->
<div class="modal fade" id="modalPrendas" tabindex="-1" aria-hidden="true">
    <!-- Contenido del modal -->
    <!-- ... (código del modal) ... -->
</div>

