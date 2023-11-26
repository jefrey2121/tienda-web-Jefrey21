@include('admin.administrador')
<!-- Añadir Prenda -->
<div class="row mt-3">
    <div class="col-md-4 offset-md-4 d-flex justify-content-between align-items-center">
        <h2 class="text-start">Lista de Prendas</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="d-grid gap-2">
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalPrendas">
                <i class="fa-solid fa-circle-plus"></i> Añadir Prenda
            </button>
        </div>
    </div>
</div>


<!-- Lista de Prendas -->
<div class="container mt-4"" style="overflow-x: auto;">
    <table class="table">

        <!-- Encabezados de la tabla -->
        <thead>
            <tr>
                <th  scope="col">Marca</th>
                <th  scope="col">Talla</th>
                <th  scope="col">Categoría</th>
                <th  scope="col">Proveedor</th>
                <th  scope="col">Precio</th>
                <th  scope="col">Descripcion</th>
                <th  scope="col">Material</th>
                <th  scope="col">Estado</th>
                <th  scope="col">Stock</th>
                <th  scope="col">Imagen</th>
                <th  scope="col">Editar</th>
                <th  scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @php $i = 1; @endphp
            @foreach($prendas as $row)
            <tr>
                <td class="align-middle text-center" scope="row">{{ optional($row->marca)->nombre_marca }}</td>
                <td class="align-middle text-center" scope="row">{{ optional($row->talla)->talla }}</td>
                <td class="align-middle text-center" scope="row">{{ optional($row->categoria)->nombre }}</td>
                <td class="align-middle text-center" scope="row">{{ optional($row->proveedor)->nombre }}</td>
                <td class="align-middle text-center" scope="row">{{ $row->precio }}</td>
                <td class="align-middle text-center" scope="row">{{ $row->descripcion }}</td>
                <td class="align-middle text-center" scope="row">{{ $row->material }}</td>
                <td class="align-middle text-center" scope="row">{{ $row->estado }}</td>
                <td class="align-middle text-center" scope="row">{{ $row->existencias }}</td>
                <td class="align-middle text-center" scope="row">
                    <!-- Mostrar imagen -->
                    <img src="{{ asset('storage/img_prendas/' . basename($row->imagen_url)) }}" alt="Imagen" class="img-thumbnail" style="max-width: 100px;">
                </td>
                <td class="align-middle text-center" scope="row">
                    <a href="{{ url('prendas/' . $row->id_prendas . '/edit') }}" class="btn btn-warning">
                        <i class="ri-edit-line"></i>
                    </a>
                </td>

                        <!-- Botón de Eliminar -->
                <td class="align-middle text-center" scope="row">
                    <form method="POST" action="{{url('prendas',[$row])}}">
                  @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="ri-delete-bin-7-line"></i></button>
                    </form>
                </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal para Añadir/Editar Prenda -->
<div class="modal fade" id="modalPrendas" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titulo_modal">Añadir Prenda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <form id="frmPrendas" method="POST" action="{{ route('prendas.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        
                    
                    
                    <!-- Aquí agrega los campos que deseas mostrar y editar -->
                    <div class="col-md-2">
                         <div class="mb-2">
                            <label for="marca">Marca:</label>
                         <select name="id_marca" class="form-control" required>
                              <!-- Opciones para seleccionar la marca -->
                             @foreach($marca as $row)
                              <option value="{{ $row->id_marca }}">{{ $row->nombre_marca }}</option>
                             @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="col-md-1"> 
                    <div class="mb-3">
                        <label for="talla">Talla:</label>
                        <select name="id_talla" class="form-control" required>
                            <!-- Opciones para seleccionar la talla -->
                            @foreach($tallas as $talla)
                                <option value="{{ $talla->id_talla }}">{{ $talla->talla }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="col-md-2"> 
                    <div class="mb-3">
                        <label for="precio">Precio:</label>
                        <input type="number" name="precio" class="form-control" required>
                    </div>
                    </div>
                   
                     <div class="col-md-4">
                  <div class="mb-3">
                      <label for="id_proveedor">Proveedor:</label>
                      <select name="id_proveedor" class="form-control" required>
                          <!-- Opciones para seleccionar el proveedor -->
                          @foreach($proveedores as $proveedor)
                              <option value="{{ $proveedor->id_proveedor }}">{{ $proveedor->nombre }}</option>
                          @endforeach
                      </select>
                  </div>
                  </div>
                  <div class="col-md-4">
                <div class="mb-2">
                    <label for="descripcion">Descripción:</label>
                    <input type="text" name="descripcion" class="form-control">
                </div>
                </div>
                <div class="col-md-4">
                <div class="mb-3">
                    <label for="material">Material:</label>
                    <input type="text" name="material" class="form-control">
                </div>
                </div>
                <div class="col-md-3">
                <div class="mb-3">
                    <label for="estado">Estado:</label>
                    <select name="estado" class="form-control" required>
                        <option value="nuevo">Nuevo</option>
                        <option value="usado">Usado</option>
                    </select>
                </div>
                </div>
                <div class="col-md-2">
                <div class="mb-3">
                    <label for="existencias">Stock:</label>
                    <input type="number" name="existencias" class="form-control" value="0">
                </div>
                </div>
                <div class="col-md-3">
                <div class="mb-3">
                    <label for="categoria">Categoría:</label>
                        <select name="id_categoria" class="form-control" required>
                  <!-- Opciones para seleccionar la categoría -->
                          @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id_categoria }}">{{ $categoria->nombre }}</option>
                         @endforeach
                        </select>
                </div>
                </div>
                <div class="col-md-4"> 
                    <div class="mb-3">
                 <label for="imagen">Imagen:</label>
                 <input type="file" name="imagen" class="form-control" accept="image/*" onchange="previewImage(this)">
                 <!-- Vista previa de la imagen -->
                 <img id="imagen-preview" class="img-thumbnail mb-0" style="max-width: 220px; display: none;">
             
<!-- Script para la vista previa de la imagen -->
<script>
    function previewImage(input) {
        var preview = document.getElementById('imagen-preview');
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
            preview.style.display = 'block'; 
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.style.display = 'none'; 
        }
    }
</script>

                </div>
             </div>
             
                    <!-- Agrega más campos según tus necesidades -->
                    
            
            <div class="modal-footer">
                 <div class="d-grid col-md-1 mx-3">
                        <button class="btn btn-success" type="submit"><i class="fa solid fa-floppy-disk"></i>Guardar</button>
                    </div>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>
</div>


