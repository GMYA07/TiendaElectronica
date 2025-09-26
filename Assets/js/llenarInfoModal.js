$(document).ready(function() {
    // Event delegation - funciona para TODOS los botones
    $(document).on('click', '.btn-infoModal', function() {
        try {
            const producto = JSON.parse($(this).attr('data-productoModal'));
            llenarInputProductoModal(producto);
        } catch(e) {
            console.error('Error parsing JSON:', e);
        }
    });
});

function llenarInputProductoModal(producto) {
     // Llenar elementos de texto (h4, p, div, span, etc.)
    document.getElementById('viewProductName').textContent = producto.nombre || '';
    document.getElementById('viewProductId').textContent = producto.id_producto || '';
    document.getElementById('viewProductCategory').textContent = tranformarIDCategoria(producto.id_categoria) || producto.id_categoria || '';
    document.getElementById('viewProductPrice').textContent = producto.precio ? '$' + parseFloat(producto.precio).toFixed(2) : '';
    document.getElementById('viewProductStock').textContent = producto.stock ? producto.stock + ' unidades' : '0 unidades';
    document.getElementById('viewProductSku').textContent = producto.sku || producto.sku || '';
    document.getElementById('viewProductBrand').textContent = transformarIDMarca(producto.id_marca) || producto.id_marca || '';
    document.getElementById('viewProductCreated').textContent = producto.fecha_creacion ? formatearFecha(producto.fecha_creacion) : '';

    // Llenar imagen si existe
    if (producto.imagen_url) {
        document.getElementById('viewProductImage').src = './Assets/img/productos/' + producto.imagen_url;
    }
    
    // Llenar descripción (puede contener HTML)
    if (document.getElementById('viewProductDescription')) {
        document.getElementById('viewProductDescription').innerHTML = producto.descripcion || 'Sin descripción disponible';
    }
    
    // Llenar modelo si tienes ese campo
    if (document.getElementById('viewProductModel')) {
        document.getElementById('viewProductModel').textContent = producto.modelo || '';
    }
    
    // Llenar estado con badge
    if (document.getElementById('viewProductStatus')) {
        const estadoBadge = generarBadgeEstado(producto.estado, producto.stock);
        document.getElementById('viewProductStatus').innerHTML = estadoBadge;
    }
}

function tranformarIDCategoria(id_categoria) {
    const categorias = {
        1: 'Computadoras'};

    return categorias[id_categoria] || 'Desconocida';
}

function transformarIDMarca(id_marca) {
    const marcas = {
        1: 'Lenovo'};

    return marcas[id_marca] || 'Desconocida';
}

// Función auxiliar para formatear fecha
function formatearFecha(fecha) {
    try {
        const fechaObj = new Date(fecha);
        return fechaObj.toLocaleDateString('es-ES', {
            day: '2-digit',
            month: '2-digit', 
            year: 'numeric'
        });
    } catch (error) {
        return fecha; // Retorna la fecha original si no se puede formatear
    }
}
