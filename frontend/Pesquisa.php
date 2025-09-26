<?php
    include 'Navbar.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Doença - Sistema de Diagnóstico</title>
    <link rel="stylesheet" href="css/pesquisa.css">
</head>
<body>
    <div class="container">
        <div class="pesquisa-container">
            <h1>Pesquisar Doença</h1>
            
            <div class="pesquisa-input-container">
                <input type="text" id="doencaInput" placeholder="Digite o nome da doença...">
                <div class="sugestoes-container" id="sugestoesContainer">
                    <!-- Sugestões serão inseridas aqui via JavaScript -->
                </div>
            </div>
            
            <div class="botoes-container">
                <button class="btn-pesquisar" onclick="pesquisarDoenca()">Pesquisar</button>
            </div>
        </div>
    </div>

    <script>
        // Função para pesquisar doença
        function pesquisarDoenca() {
            const doenca = doencaInput.value.trim();
            
            if (!doenca) {
                alert('Por favor, digite o nome de uma doença para pesquisar.');
                doencaInput.focus();
                return;
            }
            
            // Redireciona para a página de informações da doença
            window.location.href = `Informacoes.php?doenca=${encodeURIComponent(doenca)}&origem=pesquisa`;
        }
</body>
</html>