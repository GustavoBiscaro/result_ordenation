<?php
try {
    $pdo = new PDO("mysql:dbname=projeto_ordenar;host=127.0.0.1","root","");

}catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}
?>

<form method="get">
    <select name="ordem">
        <option></option>
        <option value="nome">Pelo nome</option>
        <option value="idade">Pela idade</option>
    </select>
</form>

<table border="1" width="400">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php
    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0) {

        foreach($sql->fetchAll() as $usuario):
            ?>

            <tr>
                <td><?php echo $usuario['nome']; ?></td>
                <td><?php echo $usuario['idade']; ?></td>
            </tr>


                <?php
        endforeach;
    }
    ?>
</table>