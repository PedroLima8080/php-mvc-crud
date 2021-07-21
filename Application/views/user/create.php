<div class="mt-5 w-50 mx-auto">
    <form action='<?php echo redirectBlade('user/store') ?>' method="POST">
        <h1 class="text-center">Criar usuário</h1>
        <div class="row">
            <div class="form-group col-md-12 mt-3">
                <label class="mb-2" for="name">Nome*</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>
        </div>
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
        <div class="d-flex justify-content-center">
            <button type="submit" class="mt-5 btn btn-success">
                Cadastrar
            </button>
        </div>
    </form>
</div>