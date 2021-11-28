<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="mb-3">
                <h3>Login Stack Assessment</h3>
            </div>
            <form action="<?php echo base_url(
                'UserController/validateLogin'
            ); ?>" method="POST">
                <div class="shadow p-4">                  
                    <div class="mb-3">
                        <label for="name">Nombre de Usuario</label>
                        <?php echo form_input([
                            'name' => 'name',
                            'placeholder' => 'User Name',
                            'class' => 'form-control',
                        ]); ?>
                        <span class="text-danger">
                        <?= isset($validation)
                            ? display_error($validation, 'name')
                            : '' ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="Password">Password</label>
                        <?php echo form_input([
                            'name' => 'password',
                            'placeholder' => 'Password',
                            'type' => 'password',
                            'class' => 'form-control',
                        ]); ?>
                        <span class="text-danger">
                        <?= isset($validation)
                            ? display_error($validation, 'password')
                            : '' ?>
                    </span>
                    </div>
                    <div class="mb-3">
                        <?php echo form_submit(
                            'save',
                            'Login',
                            "class='btn btn-primary'"
                        ); ?>
                    </div>

                    <hr>

                    <p class="text-center mb-0">If you have not account <a href="#">Register Now</a></p>
                    
                </div>
            </form>
            
        </div>
    </div>
</div>