<div class="cadas">Consulta de Estoque</div>
<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>estoque/cadastrar">
    <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
</form>

<form name="FrmPesquisa" method="post" action="home.php">
    
    <input class="pesquisarCms" type="text" name="lala" value="" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 
<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Produto / Ingrediente 
        </td>
        <td class="col_consulta">
            Quantidade
        </td>
        <td class="col_consulta">
           Data de Validade 
        </td>
        <td class="col_consulta">
            Opções
        </td>
    </tr>
    <tr class="linha_consulta">
        <td class="col_consulta">
            
        </td>
        <td class="col_consulta">
           
        </td>
        <td class="col_consulta">
          
        </td>
        <td class="col_consulta" >
            <a href="" class="link"> Editar </a>| <a href="" class="link">Excluir </a>
        </td>
    </tr>
    <tr class="linha_consulta">
        <td class="col_consulta">
            
        </td>
        <td class="col_consulta">
           
        </td>
        <td class="col_consulta">
          
        </td>
        <td class="col_consulta" >
            <a href="" class="link"> Editar </a>| <a href="" class="link">Excluir </a>
        </td>
    </tr>

</table>