<div class="cadas">Cadastrar Promoção</div>



    <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>promocao/index">
   <input class="btnVoltar" name="btnvoltar" type="submit" value="Voltar" />
</form>




        <form class="frm" name="frmprodutos" method="post" action="">
            
            <table>
                  
                  <tr>
                    <td class="campo_frm">Nome:</td>
                    <td><input class="caixa_frm" name="txtNomePromocao"type="text"   value=""    /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Data Inicial:</td>
                    <td><input class="caixa_frm"  name="txtDtInicial" type="text"  value=""  /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Data Final:</td>
                    <td><input class="caixa_frm" name="txtDtFinal"  type="text" value="" /></td>
                  </tr>
                  <tr>
                    <td class="campo_frm">Valor desconto %:</td>
                    <td><input class="caixa_frm" name="txtDesconto" type="text" value="" /></td>
                  </tr>
               

                  <tr>
                      
                    <td></td>
                    <td><input class="btnSalvar" name="btnsalvar" type="submit" value="Salvar" /></td>
                    
                  </tr>
                
                </table>
            
            </form>