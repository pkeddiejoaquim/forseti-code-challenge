<?php
$site = file_get_contents('https://www.gov.br/compras/pt-br/acesso-a-informacao/noticias');
$param1 = '<a class="summary url" href="';
$param2 = ' title="collective.nitf.content"';
$param3 = '<span class="summary-view-icon"><i class="icon-day"></i>';
$param4 = '<span class="summary-view-icon"><i class="icon-hour"></i>';
$v_p1	= 'title';
$v_p2	= 'por';

$v_url1  = explode($param1 , $site);
array_shift($v_url1);

 
echo "Link de Noticias :".count($v_url1)."<br><br><br>";
echo "tipo do Dado :".gettype($v_url1)."<br><br>";


foreach ($v_url1 as  $key=> &$value) {
	$v_pos=(strpos($value,'publicado'));

		$url		= substr( $value,0,(strpos($value,$v_p1)-2));
    	$titulo		= substr( $value,(strpos($value,$v_p1)+32),);
		$por		= substr( $titulo,(strpos($titulo,$v_p2)+3),);
		
        echo "URL :".strlen($url)." - "."$url <br>";
		echo "Descrição :".strlen($titulo)." - "."$titulo<br>";
	    echo "chave $key: e valor $value \n ";
    }

echo "\n";
print_r($v_url1);

//echo '<pre>';var_dump($v_url1);echo '</pre>';

//foreach ($v_url1 as $value) {
//	    echo "$value <br>";
//    }
