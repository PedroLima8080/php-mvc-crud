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

    <a href="../home/index" class="mt-2 d-block">Voltar para a home</a>
</div>