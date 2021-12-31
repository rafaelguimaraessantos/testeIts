<?php
/**
 * @see
 * @author
 */
class Empresa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get empresa by id_empresa
     */
    function get_empresa($id_empresa)
    {
        return $this->db->get_where('empresas',array('id_empresa'=>$id_empresa))->row_array();
    }
        
    /*
     * Get all empresas
     */
    function get_all_empresas()
    {
        $this->db->order_by('id_empresa', 'desc');
        return $this->db->get('empresas')->result_array();
    }
        
    /*
     * function to add new empresa
     */
    function add_empresa($params)
    {
        $this->db->insert('empresas',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update empresa
     */
    function update_empresa($id_empresa,$params)
    {
        $this->db->where('id_empresa',$id_empresa);
        return $this->db->update('empresas',$params);
    }
    
    /*
     * function to delete empresa
     */
    function delete_empresa($id_empresa)
    {
        return $this->db->delete('empresas',array('id_empresa'=>$id_empresa));
    }
}
