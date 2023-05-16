<!DOCTYPE html>
<html>
<head>
    <title>Controle Usuários</title>
</head>
<body>
    <!-- Formulário de criação/atualização -->
    <h2>Criar/Atualizar Usuário</h2>
    <form>
        <input type="hidden" id="id">
        <label for="nome">Nome:</label>
        <input type="text" id="nome">
        <label for="email">Email:</label>
        <input type="email" id="email">
        <button type="button" onclick="salvarUsuario()">Salvar</button>
        <button type="button" onclick="limparFormulario()">Limpar</button>
    </form>
    
    <!-- Lista de usuários -->
    <h2>Lista de Usuários</h2>
    <table id="tabela-usuarios">
        <!-- Os usuários serão carregados aqui via AJAX -->
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
