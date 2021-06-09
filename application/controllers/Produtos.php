<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller{

	public function index(){	
		//CARREGA A MODEL PRODUTOS
		$this->load->model('produtos_model','produtos');
		//CRIA O ARRAY PARA ARMAZENAR OS DADOS E EXECUTA O GETPRODUTOS
		$data['produtos'] = $this->produtos->getProdutos();
		//CARREGA A VIEW LISTAR PRODUTOS E PASSA O ARRAY DE DADOS COMO PARAMETRO
		 return $this->load->view('listarprodutos', $data);
	
	}

	public function add(){
	
		//CARREGA A MODEL 
		$this->load->model('produtos_model','produtos');
		//CARREGA A VIEW
		$this->load->view('addprodutos');
	}

	public function salvar(){

		if($this->input->post('nome') == NULL):
			echo 'o campo nome nao pode ser vazio';
			echo '<a href="../produtos/add" title="voltar"> Voltar </a>';
		else:

			$this->load->model('produtos_model', 'produtos');

			$dados['nome'] = $this->input->post('nome'); 
			$dados['preco'] = $this->input->post('preco');
			$dados['ativo'] = $this->input->post('ativo');

			

			if ($this->input->post('id') != NULL) {
				$this->produtos->editarProdutos($dados, $this->input->post('id'));
			}else{
				$this->produtos->addProduto($dados);
			}

			header("Location: /cursocign");


		endif;

	}

	public function editar($id = NULL){

		if($id == NULL):
			header("Location: /cursocign");
		endif;

		$this->load->model('produtos_model', 'produtos');

		$query = $this->produtos->getProdutoById($id);

		if ($query == NULL) {
			header("Location: /cursocign");
		}
		
		$dados['produto'] = $query;

		$this->load->view('editarprodutos', $dados);

	}
	public function apagar($id = NULL){


		if($id == NULL):
			header("Location: /cursocign");
		endif;

		$this->load->model('produtos_model', 'produtos');

		$query = $this->produtos->getProdutoById($id);

		if ($query != NULL) {
			$this->produtos->apagarProduto($query->id);
			header("Location: /cursocign");
		}else{
			header("Location: /cursocign");
		}
	}

	public function detalhe($id=NULL){

		if($id == NULL):
			header("Location: /cursocign");
		endif;

		$this->load->model('produtos_model', 'produtos');

		$query = $this->produtos->getProdutoById($id);

		if ($query != NULL) {
			
			if($query->ativo == 1){

				$dados['ativo'] = 0;
				
			}else{

				$dados['ativo'] = 1;

			}

			$this->produtos->detalheProduto($dados,$query->id);
			header("Location: /cursocign");
		
		}else{

			header("Location: /cursocign");
		
		}
		
	}

}
