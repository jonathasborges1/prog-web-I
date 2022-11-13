<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>

<style>

    table {
        border: 1px solid black;
    }
    th {
        border: 1px solid blue;
    }
    td {
        border: 1px solid purple;
    }
</style>
<body>

    <?php 
        require("conexao.php");
        session_start();
        if(!isset($_SESSION['carrinho'])){
            $_SESSION['carrinho'] = array();
        }

        // Add purchase
        if(isset($_GET['acao'])){
            // add carrinho
            if($_GET['acao'] == 'add'){
                $id = intval($_GET['id']);
                if(!isset($_SESSION['carrinho'][$id])){
                    $_SESSION['carrinho'][$id] = 1;

                }else {
                    $_SESSION['carrinho'][$id] += 1;
                }
            }
        }

        // Remove purchase
        if($_GET['acao'] == 'del'){
            $id = intval($_GET['id']);
            if(isset($_SESSION['carrinho'][$id])){
                unset($_SESSION['carrinho'][$id]);
            }
        }

        // Update purchase
        if($_GET['acao'] == 'up') {
            if(is_array($_POST['prod'])){
                foreach ($_POST['prod'] as $id => $qtd) {
                    $id = intval($id);
                    $qtd = intval($qtd);
                    if(!empty($qtd) || $qtd != 0){
                        $_SESSION['carrinho'][$id] = $qtd;
                    }else {
                        unset($_SESSION['carrinho'][$id]);
                    }
                }
            }
        }


    ?>

    <table>
        <caption>Carrinho de Compras</caption>
        <thead>
            <tr>
                <th width="244">Produto</th>
                <th width="79">Quantidade</th>
                <th width="89">Preço</th>
                <th width="100">SubTotal</th>
                <th width="100">Remover</th>
            </tr>
        </thead>

        <form action="?acao=up" method="post">
            <tfoot>
                <tr>
                    <td colspan="5"><input type="submit" value="Atualizar Página"></td>
                </tr>
                <tr>
                    <td colspan="5"><a href="index.php">Continuar Comprando</a></td>
                </tr>
            </tfoot>

            <tbody>
                <?php
                    if(count($_SESSION['carrinho']) == 0){
                        echo "<tr><td colspan = '5'> Não há produtos no carrinho</td></tr>";
                    }else{
                        $total = 0.0;
                        foreach($_SESSION['carrinho'] as $id => $qtd){
                            $resultado = pg_query($connection, "SELECT * FROM produto WHERE id='$id'") or die("Error when do search" . pg_last_error());
                        
                            while ($prod =  pg_fetch_assoc($resultado)){
                                $nome = $prod['nome'];
                                $preco = number_format($prod['preco'],2,',','.');
                                $sub = $prod['preco'] * $qtd;
                                $sub_mask = number_format($prod['preco'] * $qtd ,2,',','.');
        
                                $total = floatval($total) + floatval($sub);
        
                                echo '<tr>
                                        <td>'.$nome.'</td> 
                                            <td>
                                                <input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'">
                                            </td>
                                        <td>'.$preco.'</td>
                                        <td>'.$sub_mask.'</td>
                                        <td>
                                            <a href="?acao=del&id='.$id.'">Remover</a>
                                        </td>
                                    </tr>';
                            }
                        }
                        $total = number_format($total,2,',','.');
        
                        echo "<tr>
                                <td colspan = 4> Total </td> <td>R$".$total."</td>
                            </tr>";
                    }
                ?>

            </tbody>
        </form>
    </table>
</body>
</html>