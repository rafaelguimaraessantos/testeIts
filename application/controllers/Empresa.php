<?php
/** 
 * @see Instancia do objecto Empresa
 * @author Rafael G. Santos
 */
 
class Empresa extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Empresa_model');
    } 

    /**
     * @see Listing of empresas
     */
    function index()
    {
        $data['empresas'] = $this->Empresa_model->get_all_empresas();
        
        $data['_view'] = 'empresa/index';
        $this->load->view('layouts/main',$data);
    }

    /**
     * @see Adding a new empresa
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'uf' => $this->input->post('uf'),
				'razao_social' => $this->input->post('razao_social'),
				'cnpj' => $this->input->post('cnpj'),
            );
            
            $empresa_id = $this->Empresa_model->add_empresa($params);
            redirect('empresa/index');
        }
        else
        {            
            $data['_view'] = 'empresa/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /**
     * @see Editing a empresa
     */
    function edit($id_empresa)
    {   
        // check if the empresa exists before trying to edit it
        $data['empresa'] = $this->Empresa_model->get_empresa($id_empresa);
        
        if(isset($data['empresa']['id_empresa']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'uf' => $this->input->post('uf'),
					'razao_social' => $this->input->post('razao_social'),
					'cnpj' => $this->input->post('cnpj'),
                );

                $this->Empresa_model->update_empresa($id_empresa,$params);            
                redirect('empresa/index');
            }
            else
            {
                $data['_view'] = 'empresa/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The empresa you are trying to edit does not exist.');
    } 

    /**
     * @see Deleting empresa
     */
    function remove($id_empresa)
    {
        $empresa = $this->Empresa_model->get_empresa($id_empresa);

        // check if the empresa exists before trying to delete it
        if(isset($empresa['id_empresa']))
        {
            $this->Empresa_model->delete_empresa($id_empresa);
            redirect('empresa/index');
        }
        else
            show_error('The empresa you are trying to delete does not exist.');
    }
    
}