<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (isset($_GET['msg'])): ?>
    <script>
        <?php if ($_GET['msg'] == 'eliminado'): ?>
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: 'Producto eliminado correctamente',
                confirmButtonColor: '#3085d6'
            });
        <?php elseif ($_GET['msg'] == 'agregado'): ?>
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: 'Producto agregado correctamente',
                confirmButtonColor: '#3085d6'
            });
        <?php elseif ($_GET['msg'] == 'actualizado'): ?>
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: 'Producto actualizado correctamente',
                confirmButtonColor: '#3085d6'
            });
        <?php elseif ($_GET['msg'] == 'error'): ?>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Ocurrió un error en la operación',
                confirmButtonColor: '#d33'
            });
        <?php endif; ?>
    </script>
<?php endif; ?>