<?php
include_once "conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT) ;

if(empty($dados['nome'])){
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>
        Error! Need to fill in the Name.
    </div>"];
}elseif(empty($dados['email'])){
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>
        Error! Need to fill in the E-mail.
    </div>"];
}elseif(empty($dados['texto'])){
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>
        Error! Need to fill in the text.
</div>"];
}else{
    $sql = "INSERT INTO teste2.cadastro (nome, email, texto) VALUES (:nome, :email, :texto);";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $dados['nome']);
    $stmt->bindParam(':email', $dados['email']);
    $stmt->bindParam(':texto', $dados['texto']);
    if ($stmt->execute()){
        $retorna = ['erro' => false, 'msg' => "<div class='alert alert-info' role='alert'>
        Successfully registered user!
    </div>"];
    }else{
        $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>
        User not registered error!
    </div>"];
    }
};

echo json_encode($retorna);


?>