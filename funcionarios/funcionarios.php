<?php
	class Funcionarios{

		public $nome;
		public $rg;
		public $logradouro;
		public $numero;
		public $cidade;
		public $cep;
		public $funcao;
		public $salario;
		public $email;

		function __construct($atrib = array()){
			$this->nome = $atrib['nome'];
			$this->rg = $atrib['rg'];
			$this->logradouro = $atrib['logradouro'];
			$this->numero = $atrib['numero'];
			$this->cidade = $atrib['cidade'];
			$this->cep = $atrib['cep'];
			$this->funcao = $atrib['funcao'];
			$this->salario = $atrib['salario'];
			$this->email = $atrib['email'];
		}

		public static function mostrar($pdo){
	 		$sth = $pdo->query("SELECT * FROM funcionarios");
	 		$sth->execute();
	 		$result = $sth->fetchALL(PDO::FETCH_ASSOC);
	 		return $result;
	 	}

	 	public function cadastrar($pdo){
	 		$sth = $pdo->prepare("INSERT INTO funcionarios (nome, rg, logradouro, numero, cidade, cep, funcao, salario, email) VALUES (:nome, :rg, :logradouro, :numero, :cidade, :cep, :funcao, :salario, :email)");
	 		$sth->BindValue('nome',$this->nome);
			$sth->BindValue('rg',$this->rg);
			$sth->BindValue('logradouro',$this->logradouro);
			$sth->BindValue('numero',$this->numero);
			$sth->BindValue('cidade',$this->cidade);
			$sth->BindValue('cep',$this->cep);
			$sth->BindValue('funcao',$this->funcao);
			$sth->BindValue('salario',$this->salario);
			$sth->BindValue('email',$this->email);


		}

		public function deletar($pdo, $id){
	 		$sth = $pdo->prepare("DELETE FROM funcionarios WHERE id=:id LIMIT 1");
	 		$sth->BindValue(':id',$id);
	 		return $sth->execute();
	 	}

	 		public static function selecionar($pdo, $id){
	 		$sth = $pdo->prepare("SELECT * FROM funcionarios WHERE id=:id");
	 		$sth->BindValue(':id' ,$id);
	 		$sth->execute();
	 		return $sth->fetch(PDO::FETCH_ASSOC);

	 	}

	 	public function editar($pdo, $id){
	 		$sth = $pdo->prepare("UPDATE funcionarios SET nome=:nome, rg=:rg, logradoro=:logradouro, numero=:numero, cidade=:cidade, cep=:cep, funcao=:funcao, salario=:salario, email=:email WHERE id=:id");

			$sth->BindValue('nome',$this->nome);
			$sth->BindValue('rg',$this->rg);
			$sth->BindValue('logradouro',$this->logradouro);
			$sth->BindValue('numero',$this->numero);
			$sth->BindValue('cidade',$this->cidade);
			$sth->BindValue('cep',$this->cep);
			$sth->BindValue('funcao',$this->funcao);
			$sth->BindValue('salario',$this->salario);
			$sth->BindValue('email',$this->email);


			$result = $sth->fetchALL(PDO::FETCH_ASSOC);
	 		return $result;
	 	}


	}
?>