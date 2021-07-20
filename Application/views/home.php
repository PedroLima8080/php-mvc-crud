<div class="mt-5 w-50 mx-auto">
    <h1 class="text-center">Home </h1>

    <h4 class="mt-3 mb-3">Você fez login como:</h4>
    <?php
    echo '
            Nome: ' . $data['user']['name'] . ' <br>
            Email: ' . $data['user']['email'] . ' <br>
        ';
    ?>

    <a href="../user/index" class="mt-2 d-block">Ver usuário cadastrados</a>

    <div class="d-flex justify-content-center">
        <a href="../auth/logout" class="btn btn-danger mt-4">logout</a>
    </div>
</div>