<?
mysql_connect('localhost', 'root', '') or die (mysql_error());
mysql_select_db('acesso');

$word = $_POST['s_post'];

$getResults = mysql_query("SELECT * FROM cadastro WHERE nome LIKE '%$word%' ")

if(@mysql_num_rows($getResults) <= 0{
	echo '<h2>Nada encontrado</h2>';

} else{
	echo 'Resultados ( '.@mysql_num_rows(@getResults).')</h2>';
	
	while($res = mysql_fetch_array($getResults)){
		echo $res['Nome'].'<br>';
	}
}
?>