<?php
	 class Equipamentos{

	 	
	 	public $tipo;
	 	public $marca;
	 	public $modelo;
	 	public $informacoes;
	 	public $estado;

	 	function __construct($atrib = array()){
	 		$this->tipo = $atrib['tipo'];
	 		$this->marca = $atrib['marca'];
	 		$this->modelo = $atrib['modelo'];
	 		$this->informacoes = $atrib['informacoes'];
	 		$this->estado = $atrib['estado'];
	 	}

	 	public static function mostrar($pdo){
	 		$sth = $pdo->query("SELECT * FROM equipamentos");
	 		$sth->execute();
	 		$result = $sth->fetchALL(PDO::FETCH_ASSOC);
	 		return $result;
	 	}

	 	public function cadastrar($pdo){
	 		$sth = $pdo->prepare("INSERT INTO equipamentos (tipo, marca, modelo, informacoes, estado) VALUES (:tipo, :marca, :modelo, :informacoes, :estado)");
	 		$sth->BindValue(':tipo',$this->tipo);
	 		$sth->BindValue(':marca',$this->marca);
	 		$sth->BindValue(':modelo',$this->modelo);
	 		$sth->BindValue(':informacoes',$this->informacoes);
	 		$sth->BindValue(':estado',$this->estado);
			return $sth->execute();

	 	}

	 	public function deletar($pdo, $id){
	 		$sth = $pdo->prepare("DELETE FROM equipamentos WHERE id=:id LIMIT 1");
	 		$sth->BindValue(':id',$id);
	 		return $sth->execute();
	 	}

	 	public static function selecionar($pdo, $id){
	 		$sth = $pdo->prepare("SELECT * FROM equipamentos WHERE id=:id");
	 		$sth->BindValue(':id' ,$id);
	 		$sth->execute();
	 		return $sth->fetch(PDO::FETCH_ASSOC);

	 	}

	 	public function editar($pdo, $id){
	 		$sth = $pdo->prepare("UPDATE equipamentos SET tipo=:tipo, marca=:marca, modelo=:modelo, informacoes=:informacoes, estado=:estado WHERE id=:id");
	 		$sth->BindValue(':tipo',$this->tipo);
	 		$sth->BindValue(':marca',$this->marca);
	 		$sth->BindValue(':modelo',$this->modelo);
	 		$sth->BindValue(':informacoes',$this->informacoes);
	 		$sth->BindValue(':estado',$this->estado);
	 	
			$result = $sth->fetchALL(PDO::FETCH_ASSOC);
	 		return $result;
			
	 	}


	 }
?>