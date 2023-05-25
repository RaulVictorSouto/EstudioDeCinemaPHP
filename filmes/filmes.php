<?php
	 class Filme{

	 	
	 	public $nome;
	 	public $genero;
	 	public $diretores;
	 	public $roteirirstas;
	 	public $atores;
		public $trilhasonora;
		public $diretordearte;
		public $engenheirodesom;
		public $veiculodemidia;
		public $distrubuicao;

	 	function __construct($atrib = array()){
	 		$this->nome = $atrib['nome'];
	 		$this->genero = $atrib['genero'];
	 		$this->diretores = $atrib['diretores'];
	 		$this->roteirirstas = $atrib['roteirirstas'];
	 		$this->atores = $atrib['atores'];
	 		$this->trilhasonora = $atrib['trilhasonora'];
	 		$this->diretordearte = $atrib['diretordearte'];
	 		$this->engenheirodesom = $atrib['engenheirodesom'];
	 		$this->veiculodemidia = $atrib['veiculodemidia'];
	 		$this->distribuicao = $atrib['distrubuicao'];
	 	}

	 	public static function mostrar($pdo){
	 		$sth = $pdo->query("SELECT * FROM filmes");
	 		$sth->execute();
	 		$result = $sth->fetchALL(PDO::FETCH_ASSOC);
	 		return $result;
	 	}

	 	public function cadastrar($pdo){
	 		$sth = $pdo->prepare("INSERT INTO filmes (nome,genero,diretores,roteirirstas,atores,trilhasonora,diretordearte,engenheirodesom,veiculodemidia,distrubuicao) VALUES (:nome,:genero,:diretores,:roteirirstas,:atores,:trilhasonora,:diretordearte,:engenheirodesom,:veiculodemidia,:distrubuicao)");
	 		$sth->BindValue(':nome',$this->nome);
			$sth->BindValue(':genero',$this->genero);
			$sth->BindValue(':diretores',$this->diretores);
			$sth->BindValue(':roteirirstas',$this->roteirirstas);
			$sth->BindValue(':atores',$this->atores);
			$sth->BindValue(':trilhasonora',$this->trilhasonora);
			$sth->BindValue(':diretordearte',$this->diretordearte);
			$sth->BindValue(':engenheirodesom',$this->engenheirodesom);
			$sth->BindValue(':veiculodemidia',$this->veiculodemidia);
			$sth->BindValue(':distrubuicao',$this->distrubuicao);
			return $sth->execute();

	 	}

	 	public function deletar($pdo, $id){
	 		$sth = $pdo->prepare("DELETE FROM filmes WHERE id=:id LIMIT 1");
	 		$sth->BindValue(':id',$id);
	 		return $sth->execute();
	 	}

	 	public static function selecionar($pdo, $id){
	 		$sth = $pdo->prepare("SELECT * FROM filmes WHERE id=:id");
	 		$sth->BindValue(':id' ,$id);
	 		$sth->execute();
	 		return $sth->fetch(PDO::FETCH_ASSOC);

	 	}

	 	public function editar($pdo, $id){
	 		$sth = $pdo->prepare("UPDATE filmes SET nome=:nome, genero=:genero, diretores=:diretores, roteirirstas=:roteirirstas, atores=:atores, trilhasonora=:trilhasonora, diretordearte=:diretordearte, engenheirodesom=:engenheirodesom, veiculodemidia=: veiculodemidia, distrubuicao=:distrubuicao WHERE id=:id");
	 		$sth->BindValue(':nome',$this->nome);
	 		$sth->BindValue(':genero',$this->genero);
	 		$sth->BindValue(':diretores',$this->diretores);
	 		$sth->BindValue(':roteirirstas',$this->roteirirstas);
			$sth->BindValue(':atores',$this->atores);
			$sth->BindValue(':trilhasonora',$this->trilhasonora);
			$sth->BindValue(':diretordearte',$this->diretordearte);
			$sth->BindValue(':engenheirodesom',$this->engenheirodesom);
			$sth->BindValue(':veiculodemidia',$this->veiculodemidia);
			$sth->BindValue(':distrubuicao',$this->distrubuicao);
			$result = $sth->fetchALL(PDO::FETCH_ASSOC);
	 		return $result;
			
	 	}


	 }
?>