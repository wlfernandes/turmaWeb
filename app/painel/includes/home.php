<?php require 'config/config.php'?>

<?php
/**
 * Created by PhpStorm.
 * User: Welin
 * Date: 27/09/2017
 * Time: 10:25
 */


$user = new src\Models\UserModel;

//cadastrar
/*
$user->create([
        'id'=>'4',
        'nome' => 'Claudomiro',
        'email' => 'claudomiro@gmail.com',
        'usuario'=> 'claudomiro',
        'senha'=>'123'
])
*/
//Delete
/*
$deletado = $user->delete('id',3);
dump($deletado);
*/
// findBy
$encontrado = $user->findBy('id', 2);
dump($encontrado);


?>

<h2 style="color: green"><i class="user icon"></i>Cadastrar usuário</h2>
<form class="ui form" method="post">
    <div class="filed">
        <label for="">Nome</label>
        <input type="text" name="nome" placeholder="Digite o nome">
        <input type="hidden" name="cadastrar">
    </div>
    <div class="filed">
        <label for="">Usuário</label>
        <input type="text" name="usuario" placeholder="Digite o Usuário">
        <input type="hidden" name="cadastrar">
    </div>
    <br>
    <div class="filed">
        <label for="">E-mail</label>
        <input type="text" name="email" placeholder="Digite o email">

    </div>
    <br>
    <div class="filed">
        <label for="">Senha</label>
        <input type="text" name="senha" placeholder="Digite a senha">

    </div>
    <br>

    <div class="filed">
       <button class="ui blue button" type="submit"><i class="check green icon"></i>Cadastrar</button>

    </div>

</form>

<div class="ui divider"></div>
<h2 style="color: green"><i class="users  icon"></i>Lista de Usuários cadastrados</h2>


    <table  width="100%" class="ui table">
        <thead style="background-color: #000; color: #fff;">
        <tr>
            <th>#</th>
            <th>nome</th>
            <th>User</th>
            <th>Email</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $user = new src\Models\UserModel;
        $users = $user->read();
            foreach ($users as $user):

        ?>
        <tr>
            <td><?php echo $user->id;?></td>
            <td><?php echo $user->nome;?></td>
            <td><?php echo $user->usuario;?></td>
            <td><?php echo $user->email;?></td>
            <td><button class="ui green button"><i class="edit icon"></i>Editar</button></td>
            <td><button class="ui red button"><i class="remove icon"></i>Remover</button></td>
            <td></td>

        </tr>
        <?php endforeach; ?>


        </tbody>

    </table>
