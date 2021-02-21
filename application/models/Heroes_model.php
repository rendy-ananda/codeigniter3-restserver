<?php

class Heroes_model extends CI_Model {

    public function get($id = null)
    {
        if ( $id === null ) {
            $get = $this->db->get('heroes')->result_array();

        } else {
            $get = $this->db->get_where('heroes', ['id' => $id])->row_array();
        }

        return $get;
    }

    public function getSingleByName($name, $except=null)
    {
        if ( $except === null ) {
            return $this->db->get_where('heroes', ['name' => $name])->row_array();
            
        } else {
            return $this->db->get_where('heroes', ['name' => $name, 'id <>' => $except])->row_array();
        }
    }
    
    public function delete($id)
    {
        $this->db->delete('heroes', ['id' => $id]);
        
        return $this->db->affected_rows();
    }

    public function create($data)
    {
        $this->db->insert('heroes', $data);

        return $this->db->affected_rows();
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('heroes', $data);

        return $this->db->affected_rows();
    }
    
}