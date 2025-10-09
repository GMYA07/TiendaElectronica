<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if(isset($_GET['msg'])): ?>
<script>
    <?php if($_GET['msg'] == 'eliminado'): ?>
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: 'Producto eliminado correctamente',
            confirmButtonColor: '#3085d6'
        });
    <?php elseif($_GET['msg'] == 'error'): ?>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'No se pudo eliminar el producto',
            confirmButtonColor: '#d33'
        });
    <?php endif; ?>
</script>
<?php endif; ?>

<footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="./Assets/img/logoEmpresaAlterno.png" alt="Logo de SLee Dw">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <p>Somos una empresa dedicada a la venta de productos electrónicos de última generación, ofreciendo calidad, precios competitivos y un servicio confiable para que disfrutes de la mejor tecnología en tu día a día.</p>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2025 <b>YAMG</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>