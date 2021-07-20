<div class="mt-5 w-50 mx-auto">
    <form action="./store" method="POST">
        <h1 class="text-center">Registre-se</h1>
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
        <a href="./login" class="mt-2 d-block">Faça login aqui!</a>
        <div class="d-flex justify-content-center">
            <button type="submit" class="mt-5 btn btn-success">
                Registrar
            </button>
        </div>
    </form>
</div>