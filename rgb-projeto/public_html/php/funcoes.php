<?php	

	//Funções para consulta e exibição dos textos

	function texto_legenda ($value)
	{
		$consulta_legenda = "SELECT texto FROM tab_imagens WHERE codigo = $value ";
		$consulta = mysql_query($consulta_legenda) or die(' Erro na query:');
		
		return $consulta;
	}
	
	function redes_social ($value)
	{
		$consulta_social = "SELECT nome FROM tab_links_sociais WHERE codigo = $value ";
		$link = query($consulta_social);
		
		return $link;
	}
?>