<?php
session_start();

if(isset($_POST['submit'])){
     
    $pedido = array(
        'nome' => $_POST['nome'],
        'codigo' => $_POST['codigo'],
        'hora' => $_POST['hora']
    );
    
    $_SESSION['pedido'][] = $pedido;
}

if(isset($_POST['retirar'])){
    unset($_SESSION['pedido'][count($_SESSION['pedido'])-1]);
}
?>
<form action="teste.php" method="post">
<input type="text" placeholder="nome" name="nome">
<input type="text" placeholder="codigo" name="codigo">
<input type="text" placeholder="hora" name="hora">
<input type="submit" value="Colocar" name="submit">
<input type="submit" value="retirar" name="retirar">
</form>
<?php
    if(isset($_SESSION['pedido'])){
        foreach($_SESSION['pedido'] as $produto){
            print_r('Nome do produto:' . $produto['nome'] . '<br>');
            print_r('Código do produto:' . $produto['codigo'] . '<br>');
            print_r('Hora do produto:' . $produto['hora'] . '<br>');
        }
    }else{
        if(count($_SESSION['pedido']) == 0){
            echo 'Sem nada aqui :/';
        }
        $_SESSION['pedido'] = array();
    }

?>
