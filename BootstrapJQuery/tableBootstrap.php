<?php
require_once './shared/header.php';
require_once './controller/autenticationController.php';
?>
<div>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        })
    </script>
    <br>
    <table id="example" class="table table-responsive table-bordered table-striped table-info">
        <thead>
            <tr>
                <th>
                    nome do componente
                </th>
                <th>
                    descrição
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    elemento 1
                </td>
                <td>
                    descrição 1
                </td>
            </tr>
            <tr>
                <td>
                    elemento 2
                </td>
                <td>
                    descrição 2
                </td>
            </tr>
            <tr>
                <td>
                    elemento 3
                </td>
                <td>
                    descrição 3
                </td>
            </tr>
            <tr>
                <td>
                    elemento 4
                </td>
                <td>
                    descrição 4
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php
require_once './shared/footer.php';
?>