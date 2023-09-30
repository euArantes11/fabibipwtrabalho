<?php
include_once "./app/conexao/Conexao.php";
include_once "./app/dao/UsuarioDAO.php";
include_once "./app/model/Usuario.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="formulario.css" media="screen">
        <title>Cadastro</title>
    </head>

    <body>  

        <div>
            <h1 id="titulo">Cadastro</h1>
            <p id="subtitulo">complete com as suas informações</p>
            <br>
        </div>

        
        <form method="post" action="app/controller/UserController.php">

            <fieldset class="grupo">
                
                <div class="campo">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text" name="nome" required>
                </div>

                <div class="campo">
                    <label for="sobrenome"><strong>Último nome</strong></label>
                    <input type="text" name="sobrenome" required>
                </div>

                <div class="campo">
                    <label for="cpf"><strong>cpf</strong></label>
                    <input type="cpf" name="cpf" id="cpf" maxlength="14" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.-]/g, '')" required>
                    <script src="app/js/main.js"></script>
                </div>
                <div class="campo">
                    <label for="idade"><strong>idade</strong></label>
                    <input type="number" name="idade" id="idade" maxlength="3" required>
                </div>

                <label><strong>indique o seu gênero</strong></label>
                <label>
                    <input type="radio" name="genero" id="genero" value="Masculino" checked>Masculino
                </label>
                <label>
                    <input type="radio" name="genero" id="genero" value="Feminino">Feminino
                </label>
                <label>
            </fieldset> 

            

            <div class="campo">
                
                    
            </div>
            <fieldset class="campo">
                <!-- Campo de tecnologias para escolha de 1 ou mais opções para marcar (checkbox) e css de classe "campo" -->
                <div>
                    <div class="campo">
                        <label for="cep"><strong>Cep</strong></label>
                        <input type="text" name="cep" id="cep" maxlength="8" required>
                    </div>

                    <div class="campo">
                        <label for="bairro"><strong>bairro</strong></label>
                        <input type="text" name="bairro" id="bairro" required>
                    </div>
    
                    <div class="campo">
                        <label for="Rua"><strong>Rua</strong></label>
                        <input type="text" name="rua" id="rua" required>
                    </div>
                    <div class="campo">
                        <label for="cidade"><strong>Cidade</strong></label>
                        <input type="cidade" name="cidade" id="cidade"  required>
                    </div>
                    <div class="campo">
                        <label for="estado"><strong>estado</strong></label>
                        <input type="text" name="estado" id="estado" required>
                    </div>
                    <div class="campo">
                        <label for="complemento"><strong>Complemento</strong></label>
                        <input type="text" name="complemento" id="complemento" required>
                    </div>
                    <div class="campo">
                        <label for="numero"><strong>numero</strong></label>
                        <input type="text" name="numero" id="numero" required>
                    </div>
                    
                </div>
                <!-- Botão para enviar o formulário -->
            <input class="botao" type="submit" name="cadastrar">

            
            </fieldset>
        </form>
        

        


        <script>
			const cepInput = document.getElementById('cep');
			const logradouroInput  = document.getElementById('rua');
			const bairroInput = document.getElementById('bairro');
			const cidadeInput = document.getElementById('cidade');
			const estadoInput = document.getElementById('estado');
	
			cepInput.addEventListener('blur', () => {
				const cep = cepInput.value.replace(/\D/g, '');
				if (cep.length === 8) {
					fetch(`https://viacep.com.br/ws/${cep}/json/`)
						.then(response => response.json())
						.then(data => {
							if (!data.erro) {
								logradouroInput.value = data.logradouro;
								bairroInput.value = data.bairro;
								cidadeInput.value = data.localidade;
								estadoInput.value = data.uf;
							} else {
								alert('CEP não encontrado.');
							}
						})
						.catch(error => console.error(error));
				}
			});
		</script>

    </body>

</html>