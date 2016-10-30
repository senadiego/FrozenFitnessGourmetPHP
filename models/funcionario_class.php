
<?php
	class Funcionario{
		
		public $nomeFuncionarioLoja;
		public $cpfFuncionarioLoja;
		public $codFuncionarioLoja;
		public $usuarioFuncionario;
		public $senhaFuncionario;
        public $codTipoUsuario;
        public $codUsuario;
		public $confirmacaoSenha;
		
		public function __construct(){
            
            require_once('models/banco_dados.php');
		
            $conexao = new mysql_db();

            $conexao->conectar();
        }
		
		public function selectAll (){
            
			/*$sql = "select uc.codUsuarioFuncionarioLoja, u.codUsuario, u.usuario, u.senha, c.codFuncionarioLoja, c.nomeFuncionarioLoja, cpfFuncionarioLoja
                     from tblusuarioFuncionarioLoja as uc inner join tblusuario as u on 
                    (uc.codUsuario = u.codUsuario) inner join tblFuncionarioLoja as c on (c.codFuncionarioLoja = uc.codFuncionarioLoja)";*/
            $sql = "select uc.codUsuarioFuncionarioLoja, u.codUsuario, u.usuario, c.codFuncionarioLoja, c.nomeFuncionarioLoja, c.cpfFuncionarioLoja,
                    tu.codTipoUsuario, tu.nomeTipoUsuario from tblusuarioFuncionarioLoja as uc inner join tblusuario as u on 
                    (uc.codUsuario = u.codUsuario) inner join tblFuncionarioLoja as c on (c.codFuncionarioLoja = uc.codFuncionarioLoja) 
                    inner join tbltipousuario as tu on (tu.codTipoUsuario = u.codTipoUsuario);";
			
			$select = mysql_query($sql);
			
			$cont=0;
			while($rs = mysql_fetch_array($select)){
				
				$listaFuncionario[] = new Funcionario();
				  
				$listaFuncionario[$cont]->codFuncionarioLoja = $rs['codFuncionarioLoja'];
                $listaFuncionario[$cont]->nomeFuncionarioLoja = $rs['nomeFuncionarioLoja'];
				$listaFuncionario[$cont]->cpfFuncionarioLoja = $rs['cpfFuncionarioLoja'];
				$listaFuncionario[$cont]->nomeTipoUsuario = $rs['nomeTipoUsuario'];
				$listaFuncionario[$cont]->usuarioFuncionario = $rs['usuario'];
				$listaFuncionario[$cont]->codUsuario = $rs['codUsuario'];
                
				$cont++;							
			}
			
			return $listaFuncionario;
			
		}
		
		public function selectById($codFuncionarioLoja){
			
			  
			$sql = "select uc.codUsuarioFuncionarioLoja, u.codUsuario, u.usuario, u.senha, c.codFuncionarioLoja, c.nomeFuncionarioLoja, cpfFuncionarioLoja
                     from tblusuarioFuncionarioLoja as uc inner join tblusuario as u on 
                    (uc.codUsuario = u.codUsuario) inner join tblFuncionarioLoja as c on (c.codFuncionarioLoja = uc.codFuncionarioLoja) where c.codFuncionarioLoja=".$codFuncionarioLoja;
			
			$select = mysql_query($sql);
			
	
			if($rs = mysql_fetch_array($select)){
				
				$funcionario = new Funcionario();
				  
				$funcionario->codFuncionarioLoja = $rs['codFuncionarioLoja'];
                $funcionario->nomeFuncionarioLoja = $rs['nomeFuncionarioLoja'];
				$funcionario->cpfFuncionarioLoja = $rs['cpfFuncionarioLoja'];
				$funcionario->senhaFuncionario = $rs['senha'];
				$funcionario->usuarioFuncionario = $rs['usuario'];
                $funcionario->codUsuario = $rs['codUsuario'];
                
			}
			
			return $funcionario;
					 
		}
		
		public function update() {
			$sql = "update tblFuncionarioLoja set nomeFuncionarioLoja='".$this->nomeFuncionarioLoja."', cpfFuncionarioLoja='".$this->cpfFuncionarioLoja."' where codFuncionarioLoja=".$this->codFuncionarioLoja;
            
            mysql_query($sql);
            
            $sql2 = "update tblUsuario set usuario='".$this->usuarioFuncionario."', senha = '".$this->senhaFuncionario."' where codUsuario=".$this->codUsuario;
            
			if(mysql_query($sql2))
				return true;
			else
				return false;
		
		}
		
		public function delete($codFuncionarioLoja,$codUsuario) {
		
			$sql = "delete from tblUsuarioFuncionarioloja where codfuncionarioloja =".$codFuncionarioLoja;
			
            $sql2 = "delete from Funcionarioloja where codfuncionarioloja =".$codFuncionarioLoja;
            
            $sql3 = "delete from Usuario where codUsuario =".$codUsuario;

            echo($sql);
            echo($sql2);
            echo($sql3);
            
			/*if(mysql_query($sq3))
				return true;
			else
				return false;*/
		}
		
		public function insertFuncionario($novofuncionario) {
			
			$sql = "insert into tblfuncionarioLoja (nomeFuncionarioLoja,cpfFuncionarioLoja) values ('".$novofuncionario->nomeFuncionarioLoja."', '".$novofuncionario->cpfFuncionarioLoja."')";
			$last_id = "set @id = LAST_INSERT_ID()";
			$sql2 ="insert into tblusuario (usuario, senha, codTipoUsuario) values('".$novofuncionario->usuarioFuncionario."','".$novofuncionario->senhaFuncionario."','".$novofuncionario->codTipoUsuario."')";
			$sql3 = "insert into tblusuariofuncionarioloja (codFuncionarioLoja, codUsuario) values (@id, LAST_INSERT_ID())";
					
			mysql_query($sql);
            mysql_query($last_id);
			mysql_query($sql2);
			if(mysql_query($sql3))
				return true;
			else
				return false;
		
		}   
}		

?>