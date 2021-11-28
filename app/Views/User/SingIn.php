<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="mb-3">
                <h3>Registro</h3>
            </div>
            
            <?php echo form_open('UserController/validateSingIn'); ?>
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
                    <label for="Email">Email</label>
                    <?php echo form_input([
                        'name' => 'email',
                        'placeholder' => 'Email',
                        'class' => 'form-control',
                    ]); ?>
                    <span class="text-danger">
                        <?= isset($validation)
                            ? display_error($validation, 'email')
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
                <label class="mb-3">
                    <input type="checkbox" name="RememberMe"> Remember Me
                </label>

                <a href="#" class="float-end text-decoration-none">Reset Password</a>

                <div class="mb-3">
                    <?php echo form_submit(
                        'save',
                        'Registrarse',
                        "class='btn btn-primary'"
                    ); ?>
                </div>

                <hr>

                <p class="text-center mb-0">If you have not account <a href="#">Register Now</a></p>
                
            </div>
        </div>
    </div>
</div>
