$(document).ready(function() {
    // Event delegation - funciona para TODOS los botones
    $(document).on('click', '.btn-editar', function() {
        try {
            const producto = JSON.parse($(this).attr('data-producto'));
            llenarInputProducto(producto);
        } catch(e) {
            console.error('Error parsing JSON:', e);
        }
    });
});

function llenarInputProducto(producto) {
    // Llenar inputs
    document.getElementById('inputIdProductoEditar').value = producto.id_producto || '';
    document.getElementById('inputNombreProductoEditar').value = producto.nombre || '';
    document.getElementById('selectCategoriaProductoEditar').value = producto.id_categoria || '';
    document.getElementById('precioIdProductoEditar').value = producto.precio || '';
    document.getElementById('inputCantidadProductoEditar').value = producto.stock || '';
    document.getElementById('selectMarcaProductoEditar').value = producto.id_marca || '';
    document.getElementById('inputModeloProductoEditar').value = producto.modelo || '';
    document.getElementById('inputCodigoAlfaProductoEditar').value = producto.sku || '';
    document.getElementById('inputFechaCreacionProductoEditar').value = producto.fecha_creacion || '';
    document.getElementById('selectEstadoProductoEditar').value = producto.estado || '';
    document.getElementById('inputImgNuevaEditar').value = producto.imagen_url || '';
    // CKEditor
    setTimeout(function() {
        if (CKEDITOR.instances['inputDescripProductoEditar']) {
            CKEDITOR.instances['inputDescripProductoEditar'].setData(producto.descripcion || '');
        }
    }, 100);
    
    // Refresh selectpicker si lo usas
    if (typeof $('.selectpicker').selectpicker === 'function') {
        $('.selectpicker').selectpicker('refresh');
    }
}