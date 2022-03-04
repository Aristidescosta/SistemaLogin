<?php
    session_start();
    if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['password'])){
        //Acessa
        include_once('confg.php');
        
        $userName = $_POST['nome'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        
        $sql = "SELECT * FROM formulario WHERE nome = '$userName' or email = '$email'";
        $result = $conexao -> query($sql);
        /* print_r($sql); 
        print_r($result);  */
        if(mysqli_num_rows($result) < 1){
            $result1 = mysqli_query($conexao, "INSERT INTO formulario(nome,email,senha) Values ('$userName', '$email', '$password')");
            echo '<p>Usuario cadastrado com sucesso!</p>';
        }
        else{
            echo '<p>Usuario existente</p>';
        }
    }
    else{
        //Não acessa
        header('Location: index.php');
    }
?>