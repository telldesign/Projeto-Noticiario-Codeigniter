<?php
defined('BASEPATH') OR exit('erro');

class Pagina extends CI_Controller {
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $dados['titulo'] = 'Home';
        $this->load->view('home', $dados);
    }

    public function servicos(){
        $dados['titulo'] = 'Serviços';
        $this->load->view('servicos', $dados);
    }

    public function clientes(){
        $dados['titulo'] = 'clientes';
        $this->load->view('clientes', $dados);
    }

    public function sobre(){
        $dados['titulo'] = 'Sobre';
        $this->load->view('sobre', $dados);
    }

    public function contato(){
        $this->load->helper('form');
        $this->load->library(array('form_validation', 'email'));

        // Regras de validação do furmulario
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required');   
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');   
        $this->form_validation->set_rules('assunto', 'Assunto', 'trim|required');
        $this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|required');

        //Testes de validação
        if($this->form_validation->run() == FALSE):
                $dados['formerror'] = validation_errors();
        else:
                $dados_form = $this->input->post();
                $this->email->from($dados_form['email'], $dados_form['nome']);
                $this->email->to('eduardo-tell@hotmail.com');
                $this->email->subject($dados_form['assunto']);
                $this->email->message($dados_form['mensagem']);
                if($this->email->send()){
                    $dados['formerror'] = 'Mensagem enviada!';        
                }else{
                    $dados['formerror'] = 'Erro!';    
                };
                
        endif;

        $dados['titulo'] = 'contato';
        $this->load->view('contato', $dados);
    }
}   