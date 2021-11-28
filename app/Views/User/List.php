    <div class="container">
        <div class="row">
            <a href="<?php echo base_url(); ?>/SingIn" class="btn btn-info" role="button">Nuevo</a>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scopre="col">Id</th>
                        <th scopre="col">Nombre de Usuario</th>
                        <th scopre="col">Email</th>
                        <th scopre="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) {
                        echo '<tr scopre="row">';
                        echo '<td>' . $user['id'] . '</td>';
                        echo '<td>' . $user['name'] . '</td>';
                        echo '<td>' . $user['email'] . '</td>';
                        echo '<td>';
                        echo form_button([
                            'name' => 'edit',
                            'type' => 'submit',
                            'class' => 'btn btn-warning',
                            'content' => '<i class="bi bi-pencil"></i>',
                        ]);
                        echo '</td>';
                        echo '</tr>';
                    } ?>
                </tbody>
            </table>                    
        </div>
    </div>
