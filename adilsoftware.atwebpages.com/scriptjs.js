function verifica(recid){
	if(confirm("Tem certeza que deseja excluir")){
		windows.location="excluir.php?idexc=" + recid
	}
}