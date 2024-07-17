<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Cadastro Sucesso</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: rgb(70, 119, 126);
        }
        .container {
            text-align: center;
            color: #00FF08;
            background-color: #333;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px 10px #ffffff57;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            background-color: #00FF08;
            color: black;
            font-weight: 700;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 10px;
        }
        a:hover {
            background-color: #00cc06;
        }
    </style>
</head>
<body>
  
    <div class="container">
        <!--Mostra uma mensagem na tela dizendo que foi cadastrado e exibe o número do ID -->
        <h2>Você foi cadastrado e o seu ID é: <?php echo htmlspecialchars($_GET['id']); ?></h2>
         <!--link para voltar a pagina inicial-->
        <a href="index.html">Voltar para a página inicial</a>
       
    </div>
</body>
</html>