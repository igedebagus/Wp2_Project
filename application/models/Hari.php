<?php

class Hari extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('hari')->result_array();
    }
}
