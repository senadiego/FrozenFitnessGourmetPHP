<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>produtocms/index">
   <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
</form>

<div class="cadas">Cadastrar Produto</div>


    <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>produtocms/index">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Consultar Dados" />
        
    </form>

        <form class="frm" name="frmprodutos" method="post" action="<?php echo(PROJECTDIR)?>produtocms/<?php echo($atualizacao)?>">
            <input type="hidden" value="<?php echo($produto->codProduto)?>" name="codProduto"/>
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input class="caixa_frm" name="txtnomeProduto" type="text"   value="<?php echo($produto->nomeProduto)?>"    /></td>
                  </tr>
				  <tr>
                    <td class="campo_frm">Preço:</td>
                    <td><input class="caixa_frm"  name="txtprecoProduto" type="text"  value="<?php echo($produto->precoProduto)?>"  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Carboidrato:</td>
                    <td><input class="caixa_frm"  name="txtcarboidratoProduto" type="text"  value="<?php echo($produto->carboidratoProduto)?>"  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Calorias:</td>
                    <td><input class="caixa_frm" name="txtcaloriaProduto"  type="text" value="<?php echo($produto->caloriaProduto)?>" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Valor Energético:</td>
                    <td><input class="caixa_frm" name="txtvalorEnergeticoProduto" type="text" value="<?php echo($produto->valorEnergeticoProduto)?>" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Proteina:</td>
                    <td><input class="caixa_frm" name="txtproteinaProduto" type="text" value="<?php echo($produto->proteinaProduto)?>"  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Sódio:</td>
                    <td><input class="caixa_frm" name="txtsodioProduto" type="text" value="<?php echo($produto->sodioProduto)?>" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Gordura:</td>
                    <td><input class="caixa_frm" name="txtgordurasProduto" type="text" value="<?php echo($produto->gordurasProduto)?>"  /></td>
                  </tr>    
                
                  <tr>
                    <td class="campo_frm">Categoria:</td>
                    <td >  <select size="1" name="codcategoriaProduto">

                            <option selected value="Selecione">Selecione:</option>
                         <?php
                            require_once('controllers/categoria_controller.php');

                            $controllerCategoria = new categoria_controller();

                            $rs=$controllerCategoria->listarTodos();

                            $cont=0;

                            while ($cont < count($rs)){
        
                        ?>  

                            <option value="<?php echo($rs[$cont]->codCategoriaMateria); ?>"><?php echo($rs[$cont]->nomeCategoriaMateria);?></option>
                        <?php
                            
                            $cont++;
                        }


                        ?>
        
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Imagem Produto:</td>
                    <td><input  name="imagem" type="file" value=""  /></td>
                  </tr>
                     
                  <tr>
                    <td class="campo_frm">Descrição:</td>
                    <td><textarea name="txtdescricaoProduto" class="campo_desc" cols="35" rows="8" ><?php echo($produto->descricaoProduto)?></textarea></td> 
                  </tr>  
                

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>