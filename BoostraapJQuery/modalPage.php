<!DOCTYPE html>
<html>
    <?php
     require_once './controller/autenticationController.php';
    require_once './shared/header.php';
    ?>
    <a href="#" class="btn btn-success"  data-bs-toggle="modal"
        data-bs-target="#confirmarModal">Abrir modal</a>
    
    <!-- The Modal -->
    <div class="modal" id="confirmarModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Bem vindo!!!</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Modal body..
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>




    <?php
    require_once './shared/footer.php';
    ?>
</html>
