<div class="mt-5 w-50 mx-auto">
    <form action='<?php echo redirectBlade('user/update') ?>' method="POST">
        <h1 class="text-center">Editar usuário</h1>
        <input type="hidden" name="id" value="<?php echo $data['user']['id'] ?>">
        <div class="row">
            <div class="form-group col-md-12 mt-3">
                <label class="mb-2" for="name">Nome*</label>
                <input class="form-control" type="text" name="name" id="name" value="<?php echo $data['user']['name'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12 mt-3">
                <label class="mb-2" for="email">Email*</label>
                <input class="form-control" type="text" name="email" id="email" value="<?php echo $data['user']['email'] ?>">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="mt-5 btn btn-success">
                Alterar
            </button>
        </div>
    </form>
</div>