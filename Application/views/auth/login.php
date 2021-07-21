<div class="mt-5 w-50 mx-auto">
    <form action='<?php echo redirectBlade('auth/auth') ?>' method="POST">
        <h1 class="text-center">Login</h1>
        <div class="row">
            <div class="form-group col-md-12 mt-3">
                <label class="mb-2" for="email">Email*</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12 mt-3">
                <label class="mb-2" for="password">Senha*</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
        </div>
        <a href='<?php echo redirectBlade('auth/register') ?>' class="mt-2 d-block">Registre-se aqui!</a>
        <div class="d-flex justify-content-center">
            <button type="submit" class="mt-5 btn btn-success">
                Login
            </button>
        </div>
    </form>
</div>