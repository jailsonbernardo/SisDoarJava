<?php
include"./config/conexao.php";
$sql = $con->query("SELECT * FROM contato");
$result = "";
$result .= "<table class='table table-striped'><tr><td>ID</td><td>NOME</td><td>EMAIL</td><td>AÇÕES</td></tr>";
while($row = $sql->fetch(PDO::FETCH_OBJ)){
	$result .= "<tr>";
	$result .= "<td>".$row->id."</td>";
	$result .= "<td>".$row->nome."</td>";
	$result .= "<td>".$row->email."</td>";
	$result .= "<td><a class='btn btn-default' id='editar' rel='".$row->id."'>Editar</a> <a href='#' class='btn btn-primary' id='detalhes' rel='".$row->id."'>Detalhes</a> <a href='#' class='btn btn-danger' id='excluir' rel='".$row->id."'>Excluir</a></td>";
	$result .= "</tr>";
} 	  
$result .= "</table>";

echo $result;
?>