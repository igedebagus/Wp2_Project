<?php

class Jam extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('jam')->result_array();
    }
}
