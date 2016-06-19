<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type"/>
       <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
       <script type="text/javascript" src="./js/jquery.maskedinput-1.3.1.min.js"></script>
                
        <style type="text/css">
         
            @import '../config/style.css';
        </style>
        
        <title>Cadastro de Clientes</title>
    </head>
    <body>
        
        
         <ul>
            <li><a class="active" href="../views/listaVeicDisp.php">Veículos disponíveis</a></li>

            <div class="dropdown">
                <li><a class="dropbtn">Cliente</a>
                    <div class="dropdown-content">
                        <a href="insereCliente.php">Inserir Cliente</a>
                        <a href="../views/listaClientes.php">Listar Clientes</a>
                    </div>
                </li>
            </div>
            <div class="dropdown">
                <li><a class="dropbtn">Veículo</a>
                    <div class="dropdown-content">
                        <a href="../models/insereVeiculo.php">Inserir Veículo</a>
                        <a href="../views/listaVeicDisp.php">Listar Veículos</a>

                    </div>
                </li>
            </div>
            <div class="dropdown">
                <li><a class="dropbtn">Marca</a>
                    <div class="dropdown-content">
                        <a href="../models/insereMarca.php">Inserir Marca</a>
                        <a href="../views/listaMarcaDisp.php">Listar Marcas</a>
                    </div>
                </li>
            </div>


            <div class="dropdown">
                <li><a class="dropbtn">Categoria</a>
                    <div class="dropdown-content">
                        <a href="../models/insereCatVeiculo.php">Inserir Categoria</a>
                        <a href="../views/listaCatVeicDisp.php">Listar Categorias</a>
                    </div>
                </li>
            </div>
        </ul>
    <center>
        <table align=‘center'>
            <center>
                <h1>Cadastrar Cliente</h1>
            </center>
            
            <tr><td align='center'>
                    <div id="quatro"> 
                         

                        
                        
<script type="text/javascript">          
jQuery(function($) {
    $.mask.definitions['~']='[+-]';
    //Inicio Mascara Telefone
	$('#tel').mask("(99) 9999-9999?9").ready(function(event) {
		var target, phone, element;
		target = (event.currentTarget) ? event.currentTarget : event.srcElement;
		phone = target.value.replace(/\D/g, '');
		element = $(target);
		element.unmask();
		if(phone.length > 10) {
			element.mask("(99) 99999-999?9");
		} else {
			element.mask("(99) 9999-9999?9");
		}
	});
        $('#cel').mask("(99) 9999-9999?9").ready(function(event) {
		var target, phone, element;
		target = (event.currentTarget) ? event.currentTarget : event.srcElement;
		phone = target.value.replace(/\D/g, '');
		element = $(target);
		element.unmask();
		if(phone.length > 10) {
			element.mask("(99) 99999-999?9");
		} else {
			element.mask("(99) 9999-9999?9");
		}
	});
	//Fim Mascara Telefone
    $("#cpf").mask("999.999.999-99");
   });

</script>
                        <form action="clienteInserido.php">
                            <label for="fname">Nome:</label>
                                <input type="text" name="nome" placeholder="Paulo Rodrigues" required>
                            
                            <label for="lname">Celular:</label>
                            <input type="text" name="celular"id="cel"placeholder=" 11 1111-1111" required>
                                <label for="lname">Telefone:</label>
                            <input type="text" name="telefone"id="tel"placeholder="11 1111-1111" required>
                            <label for="lname">Cpf:</label>
                                <input type="text" name="CPF"id="cpf"placeholder=" 123.456.789-10" required>
                            <label for="lname">Endereço:</label>
                                <input type="text" name="endereco"placeholder="Rua dos sonhos, 88"required>
                            <label for="lname">Data Nasc:</label>
                            <input type="date" name="dataNascimento" required>
                            <label for="lname">E-mail:</label>
                                <input type="email" name="email"placeholder="nome@e-mail.com" required>
                            <label for="sexo">Sexo:</label>
                            <select id="sexo" name="sexo"required>
        
                                <option value= 'feminino'>Feminino</option>
                                <option value='masculino'>Masculino</option>
                                <option value='outros'>Outros</option>
                            </select>

                            <input type="submit" value="Inserir Cliente" >
                            <p>
                            <a href="../views/listaClientes.php" class="button_voltar" >Cancelar e voltar</a>
                            </p>

                        </form>
                        
                    </div>
                </td></tr>
        </table>
    </center>
    </body>        
</html>

