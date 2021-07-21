<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CRUD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../user/index">Usuários</a>
      </li>
    </ul>
    <div>
      <a class="text-danger btn btn-outline-danger" href="../auth/logout">Log out</a>
    </div>
  </div>
</nav>
<div class="mt-5 w-50 mx-auto">
    <h1 class="text-center">Home </h1>

    <h4 class="mt-3 mb-3">Você fez login como:</h4>
    <?php
    echo '
            Nome: ' . $data['user']['name'] . ' <br>
            Email: ' . $data['user']['email'] . ' <br>
        ';
    ?>
</div>