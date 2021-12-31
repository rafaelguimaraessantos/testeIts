<?php
/** 
 * @see Instancia do Objeto Cliente 
 * @author Rafael G. Santos
 */
class Cliente extends MY_controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cliente_model');
        $this->load->model('Empresa_model');
       
    } 

    /**
     * @see Listing of clientes
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        $params['termo'] = ($this->input->get('termo')) ? $this->input->get('termo') : null;
        $data['clientes'] = $this->Cliente_model->pesquisar($params);

        $data['filter'] = $params;
        $data['_view'] = 'cliente/index';
        $this->load->view('layouts/main',$data);
    }

    // /**
    //  * @see Adding a new empresa
    //  */
    // function add()
    // {   
    //     if(isset($_POST) && count($_POST) > 0)     
    //     {   
    //         $params = array(                    
    //                 'id_empresa' => $this->input->post('id_empresa'),
    //                 'nome' => $this->input->post('nome'),
    //                 'cpf_cnpj' => $this->input->post('cpf_cnpj'),
    //                 'data_cadastro' => date('Y-m-d H:i:s'),
    //                 'data_nascimento' => $this->dateFormaBD($this->input->post('data_nascimento')),
    //                 'telefone' => $this->input->post('telefone'),
    //                 'email' => $this->input->post('email'),
    //                 'cep' => $this->input->post('cep'),
    //                 'endereco' => $this->input->post('endereco'),
    //                 'rg' => $this->input->post('rg'),
    //                 'numero' => $this->input->post('numero')
    //             );
            
    //         $cliente_id = $this->Cliente_model->add_cliente($params);
    //             redirect('cliente/index');
    //     }
    //     else
    //     {            
    //         $data['empresas'] = $this->Empresa_model->get_all_empresas();
    //         $data['_view'] = 'cliente/add';
    //         $this->load->view('layouts/main',$data);
    //     }
    // }  



                                           

    /**
     * @see Adding a new cliente
     */
     function add()
     {   
         if(isset($_POST) && !empty($_POST))     
         {   
             $empresa = $this->Empresa_model->get_empresa($this->input->get('id_empresa'));
              var_dump($empresa);
             die(__FILE__.__LINE__);
             if(!empty($empresa)
              && strtoupper($empresa['uf'])!='PR' && strlen($this->input->post('cpf_cnpj'))=='14') {
                 $params = array(                    
                     'id_empresa' => $this->input->post('id_empresa'),
                     'nome' => $this->input->post('nome'),
                     'cpf_cnpj' => $this->input->post('cpf_cnpj'),
                     'data_cadastro' => date('Y-m-d H:i:s'),
                     'data_nascimento' => $this->dateFormaBD($this->input->post('data_nascimento')),
                     'telefone' => $this->input->post('telefone'),
                     'email' => $this->input->post('email'),
                     'cep' => $this->input->post('cep'),
                     'endereco' => $this->input->post('endereco'),
                     'rg' => $this->input->post('rg'),
                     'numero' => $this->input->post('numero')
                 );
             $idade = calculaIdade($this->$post['data_nascimento']);
             var_dump($idade);
             die(__FILE__.__LINE__);
            
                 $cliente_id = $this->Cliente_model->add_cliente($params);
                 redirect('cliente/index');
             }
         }
         else
         {      
             $data['empresas'] = $this->Empresa_model->get_all_empresas();
             $data['_view'] = 'cliente/add';
             $this->load->view('layouts/main',$data);
         }
     }  

    /**
     * @see Editing a cliente
     */
    function edit($id_cliente)
    {   
        // check if the cliente exists before trying to edit it
        $data['cliente'] = $this->Cliente_model->get_cliente($id_cliente);
        
        if(isset($data['cliente']['id_cliente']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_empresa' => $this->input->post('id_empresa'),
					'nome' => $this->input->post('nome'),
					'cpf_cnpj' => $this->input->post('cpf_cnpj'),
					'data_cadastro' => $this->input->post('data_cadastro'),
                    'data_nascimento' => $this->dateFormaBD($this->input->post('data_nascimento')),
					'telefone' => $this->input->post('telefone'),
					'email' => $this->input->post('email'),
					'cep' => $this->input->post('cep'),
					'endereco' => $this->input->post('endereco'),
                    'rg' => $this->input->post('rg'),
					'numero' => $this->input->post('numero')
                );

                $this->Cliente_model->update_cliente($id_cliente,$params);            
                redirect('cliente/index');
            }
            else
            {
                $data['empresas'] = $this->Empresa_model->get_all_empresas();
                $data['_view'] = 'cliente/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The cliente you are trying to edit does not exist.');
    } 

    /**
     * @see Deleting cliente
     */
    function remove($id_cliente)
    {
        $cliente = $this->Cliente_model->get_cliente($id_cliente);

        // check if the cliente exists before trying to delete it
        if(isset($cliente['id_cliente']))
        {
            $this->Cliente_model->delete_cliente($id_cliente);
            redirect('cliente/index');
        }
        else
            show_error('The cliente you are trying to delete does not exist.');
    }

    /**
     * @see recebe uma data e retorna um int da idade
     */
    function calculaIdade($date) {
         $nascimento=explode('/',$nascimento); //Cria um array com os campos da data de nascimento 
            $data=date('d/m/Y'); $data=explode('/',$data); //Cria um array com os campos da data atual 
            $anos=$data[2]-$nascimento[2]; //ano atual - ano de nascimento 
            if($nascimento[1] > $data[1]) return $anos-1; //Se o mês de nascimento for maior que o mês atual, diminui um ano 
            if($nascimento[1] == $data[1]){ //se o mês de nascimento for igual ao mês atual, precisamos ver os dias 
            if($nascimento[0] <= $data[0]) { return $anos; } else{ return $anos-1; } }

          return $anos; 
    }
}
