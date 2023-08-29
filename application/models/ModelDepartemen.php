<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelDepartemen extends CI_Model {
    function get_data_departemen()
    {
        return $this->db->get("departemen");
    }
    function get_data_departemen_by_id($id)
    {
        return $this->db->get_where("departemen", array("departemen_id" => $id));
    }
    function insert_data_departemen($data)
    {
        return $this->db->insert("departemen", $data);
    }
    function update_data_departemen($id, $data)
    {
        $this->db->where("departemen_id", $id);
        return $this->db->update("departemen", $data);
    }
    function delete_data_departemen($id)
    {
        $this->db->where("departemen_id", $id);
        return $this->db->delete("departemen");
    }
}