<?php

include"../../config/conexao.php";
$sql = $con->query("SELECT * FROM estado");

$resultado="";
$resultado .= "<tbody>";
while($row = $sql->fetch(PDO::FETCH_OBJ)){
	$result .= "<tr>";
	$result .= "<td>".$row->idestado."</td>";
	$result .= "<td>".$row->descricao."</td>";
	$result .= "<td>".$row->uf."</td>";
	$result .= "<td><a class='btn btn-default' id='editar' rel='".$row->idestado."'>Editar</a> <a href='#' class='btn btn-primary' id='detalhes' rel='".$row->id."'>Detalhes</a> <a href='#' class='btn btn-danger' id='excluir' rel='".$row->id."'>Excluir</a></td>";
	$result .= "</tr>";
} 	  
$resultado .="</tbody>";
