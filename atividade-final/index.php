<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        require("conexao.php");
        $listaProdutos = pg_query($connection, "SELECT * FROM produto") or die (pg_last_error());
        while($prod = pg_fetch_assoc($listaProdutos)){
            echo '<h2>' . $prod['nome'] . '</h2> </br>';
            echo 'Preço: R$' . number_format( $prod['preco'],2,',','.') . '</br>';
            echo '<img src="img/' . $prod['imagem'] . '"/><br>';
            echo '<a href="carrinho.php?acao=add&id='.$prod['id'].'">Comprar</a>';
            echo '<br/><hr/>';

        }
    ?>

</body>
</html>