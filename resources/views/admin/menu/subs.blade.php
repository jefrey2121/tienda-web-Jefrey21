@include('admin.administrador')

<div class="container mt-4">
    <h2>Lista de Correos Electrónicos Suscritos</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscripciones as $key => $subscripcion)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $subscripcion->correo }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary btn-copy" data-clipboard-text="{{ $subscripcion->correo }}">
                            Copiar
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Incluye el script de Clipboard.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

<!-- Script personalizado para copiar al portapapeles -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inicializa Clipboard.js
        var clipboard = new ClipboardJS('.btn-copy', {
            // Configura el evento de clic para seleccionar el texto dinámicamente
            text: function(trigger) {
                return trigger.getAttribute('data-clipboard-text');
            }
        });

        // Evento cuando se copia al portapapeles
        clipboard.on('success', function(e) {
            // Puedes agregar lógica adicional o mostrar una notificación
            console.log('Texto copiado:', e.text);
        });

        // Evento si hay un error al copiar al portapapeles
        clipboard.on('error', function(e) {
            console.error('Error al copiar:', e.action);
        });
    });
</script>
