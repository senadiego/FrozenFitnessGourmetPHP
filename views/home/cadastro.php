    <div id="conteudo">
        
        <div class="clear"></div>
        
        <div class="area_contato">
            <form id="formulario" method="post" action="<?php echo(PROJECTDIR)?>clientes/<?php echo($atualizacao)?> "> 
				
				 <input type="hidden" value="<?php echo($cliente->codCliente)?>" name="codCliente"/>
				 <input type="hidden" value="<?php echo($cliente->endereco->codEndereco)?>" name="codEndereco"/>
				 <input type="hidden" value="<?php echo($cliente->codUsuarioCliente)?>" name="codUsuarioCliente"/>
			
                <fieldset>
                    
                    <legend> Dados Pessoais</legend>
                    <div class="altura"> </div>
                        <label>Nome:</label> <input name="txtnomecliente" class="campo_nome" type="text" placeholder="Digite seu nome" value="<?php echo $cliente->nomeCliente; ?>">
                    <br> <label>Email:</label> <input  name="txtemailcliente" class="campo_nome" type="text" placeholder="nome@nome.com" value="<?php echo $cliente->emailCliente; ?>">
                    <br> <label>CPF:</label> <input  name="txtcpfcliente" class="campo_cpf" type="text" placeholder="111 111 111 11" value="<?php echo $cliente->cpfCliente; ?>">
                    <br> <label>Data de Nascimento:</label> <input  name="txtdtnascimento"  class="campo_data" type="text" placeholder="00/00/0000"  value="<?php echo $cliente->dtNascCliente; ?>">
                    <br> <label>Peso:</label> <input  name="txtpesocliente"  class="campo_nome" type="text" placeholder="00" value="<?php echo $cliente->peso; ?>">
                    <br> <label>Altura:</label> <input  name="txtalturacliente" class="campo_altura" type="text" placeholder="0.00" value="<?php echo $cliente->altura; ?>">
                    <br> <label>Celular:</label> <input  name="txtcelcliente" class="campo_celular" type="text" placeholder="00 9 9999 9999" value="<?php echo $cliente->celularCliente; ?>">
                    <br> <label>Telefone:</label> <input  name="txttelcliente" class="campo_telefone" type="text" placeholder="00 1111 2222" value="<?php echo $cliente->telefoneCliente; ?>" >
                   
                    <br>
                   
                <INPUT TYPE="radio" NAME="txtsexo" VALUE="F" checked> Feminino
                <INPUT TYPE="radio" NAME="txtsexo" VALUE="M"> Masculino
                <br>
                <div class="altura"> </div> 
                <tr>
                    <td class="campo_frm">Objetivo:</td>
                    <td >  <select size="1" name="codObjetivo">

                            <option selected value="Selecione">Selecione:</option>

                             
						 <?php
							
							foreach ($listaObjetivos as $cliente->objetivo){
						?>   
                         

                            <option value="<?php echo($cliente->objetivo->codObjetivo); ?>"><?php echo($cliente->objetivo->nomeObjetivo);?></option>
                        <?php
                            
							}

                        ?>

                        </select>
                    </td>
                  </tr>  
                  <p>  </p>

                </fieldset>     
                <fieldset>
                    <legend> Endereco</legend>
                    <div class="altura"> </div>
                    <br> <label>Logradouro</label> <input name="txtlogradouro" class="campo_logradouro" type="text" placeholder="Rua, Av " value="<?php echo $cliente->endereco->logradouro; ?>">               
                    <br> <label>Numero:</label> <input name="txtnumero" class="campo_numero" type="text" placeholder="00" value="<?php echo $cliente->endereco->numero; ?>">
                    <br> <label>Bairro:</label> <input name="txtbairro" class="campo_bairro" type="text" placeholder="Nome do Bairro" value="<?php echo $cliente->endereco->bairro; ?>">
                    <br> <label>CEP:</label> <input name="txtcep" class="campo_cep" type="text" placeholder="00000 000" value="<?php echo $cliente->endereco->cep; ?>">
					<br> <label>Complemento:</label> <input name="txtcomplemento" class="campo_rua" type="text" value="<?php echo $cliente->endereco->complemento; ?>">
                    <br> <label>Estado:</label>
                        <select size="1" name="codEstado">

						<option selected value="Selecione">Selecione:</option>		
						 
						 <?php
							
							foreach ($listaEstados as $end->cidade->estado){
						?>   
                         

                            <option value="<?php echo($end->cidade->estado->codEstado); ?>"><?php echo($end->cidade->estado->nomeEstado);?></option>
                        <?php
                            
							}

                        ?>
                        </select>
                     <label>Cidade:</label>
                        <select size="1" name="codCidade">
                           
                            <option selected value="Selecione">Selecione:</option>

                             
						 <?php
							
							foreach ($listaCidades as $end->cidade){
						?>   
                         

                            <option value="<?php echo($end->cidade->codCidade); ?>"><?php echo($end->cidade->nomeCidade);?></option>
                        <?php
                            
							}

                        ?>

                        </select>
                    <div class="altura"> </div>     

                    </fieldset>
                     <fieldset>
                    <legend> Login</legend>
                         <div class="altura"> </div>
                        
                            <br> <label>Usuario:</label> <input name="txtusuario" class="campo_usuario" type="text" placeholder="Digite um nome para seu Login" value="<?php echo $cliente->usuarioCliente; ?>">
                            <br> <label>Senha:</label> <input name="txtsenha" class="campo_senha" type="text" placeholder="Digite sua senha">
                            <br> <label>Confirmar Senha:</label> <input name="txtconfirmasenha" class="campo_confirmar_senha" type="text" placeholder="Digite sua senha novamente">
                           
                            <br>

                    <br> <input class="btn_contato" type="submit" value="Enviar"> 
                    <div class="altura"> </div>     
                </fieldset> 
            </form>
        </div>
        
        <div class="clear"></div>
        
        
			
     </div><!-- conteudo-->