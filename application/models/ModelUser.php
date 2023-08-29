<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model {
    function cek_username($username)
    {
        return $this->db->get_where("admin", array('email' => $username));
    }

    function get_data_login($id)
    {
        return $this->db->get_where("admin", array("admin_id" => $id));
    }
}