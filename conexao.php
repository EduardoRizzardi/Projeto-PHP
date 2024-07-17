<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurações do banco de dados
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "formulario_contato"; 

    // Cria conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    // Verifica se o formulário de inserção foi submetido
    if (isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['mensagem'])) {
        // Prepara os dados recebidos do formulário para inserção no banco de dados
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];

        // Monta a query SQL para inserção dos dados
        $sql = "INSERT INTO contato (nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem')";

        // Executa a query de inserção
        if ($conn->query($sql) === TRUE) {
            $id = $conn->insert_id; // Obtém o ID do registro inserido
            header("Location: cadastro_sucesso.php?id=$id");
            exit();
        } else {
            echo "Erro ao inserir dados: " . $conn->error;
        }
    }

    // Verifica se o formulário de exclusão foi submetido
    if (isset($_POST['action']) && $_POST['action'] == 'delete') {
        $id = $_POST['id'];

        // Monta a query SQL para exclusão do registro com o ID fornecido
        $sql = "DELETE FROM contato WHERE id=$id";

        // Executa a query de exclusão
        if ($conn->query($sql) === TRUE) {
            header("Location: exclusao_sucesso.php");
            exit();
        } else {
            echo "Erro ao excluir registro: " . $conn->error;
        }
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
