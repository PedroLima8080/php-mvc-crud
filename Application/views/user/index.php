<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CRUD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../home/index">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../user/index">Usuários</a>
      </li>
    </ul>
    <div>
      <a class="text-danger btn btn-outline-danger" href="../auth/logout">Log out</a>
    </div>
  </div>
</nav>
<div class="mt-5 w-50 mx-auto">
    <h2 class="text-center">Usuários</h2>
    <hr class="mb-5 mt-1">

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php
                foreach ($data['users'] as $user) {
                    echo "
                        <tr>
                            <td>$user[id]</td>
                            <td>$user[name]</td>
                            <td>
                                <a href='./destroy/$user[id]' class='btn btn-danger'>
                                    <i class='fas fa-trash'></i>
                                </a>
                                <a href='./edit/$user[id]' class='btn btn-success'>
                                    <i class='fas fa-pen'></i>
                                </a>
                            </td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</div>