<?php
class UserModel extends CI_Model {
	function __construct() {
		parent::__construct();
	}

    function getData()
    {
        $SQL = "SELECT * FROM games INNER JOIN data ON data.id = ( SELECT id FROM data WHERE data.type = games.id ORDER BY date DESC LIMIT 1 ) ORDER BY que ASC";
        $query = $this->db->query($SQL);
        return $query->result_array();
    }

    function insert($data,$table)
    {
        if($this->db->insert($table, $data))
        {
            return $this->db->insert_id();
        }else
        {
            return false;
        }
    }

    function checkEmail($email,$table)
    {
        $this->db->select("*");
		$this->db->from($table);
		$this->db->where('email',$email);
		$result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }else{
            return false;
        }
    }

    function checkForm($id,$fid)
    {
        $this->db->select("*");
		$this->db->from('forms_data');
		$this->db->where('forms_id',$fid);
        $this->db->where('athlete_id',$id);
		$result = $this->db->get();
        if ($result->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }
    
    function checkEmailByID($email,$id,$table)
    {
        $this->db->select("*");
		$this->db->from($table);
        $this->db->where_not_in('id',$id);
		$this->db->where('email',$email);
		$result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }else{
            return false;
        }
    }

    function updateByID($data,$id,$table)
    {
        $this->db->where('id',$id);
        if($this->db->update($table,$data))
        {
            return true;
        }else{
            return false;
        }
    }

    public function getByID($id,$company_id,$table)
    {
        $this->db->select("*");
		$this->db->from($table);
		$this->db->where('id',$id);
        $this->db->where('company_id',$company_id);
		$result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }else{
            return false;
        }
    }

    public function getID($id,$table)
    {
        $this->db->select("*");
		$this->db->from($table);
		$this->db->where('id',$id);
		$result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }else{
            return false;
        }
    }

    public function getTable($table)
    {
        $this->db->select("*");
		$this->db->from($table);
		$result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }else{
            return false;
        }
    }

    public function getByField($field, $value, $table)
    {
        $this->db->select("*");
		$this->db->from($table);
		$this->db->where($field,$value);
		$result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }else{
            return false;
        }
    }

    public function getMatka($type)
    {
        $this->db->select("*, week(date) as week, DAYOFWEEK(date) as day");
		$this->db->from('data');
		$this->db->where('type',$type);
        $this->db->order_by('date', 'ASC');
		$result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }else{
            return false;
        }
    }

    public function deleteByField($field, $value, $table)
    {
        $this->db->where($field,$value);
        if($this->db->delete($table))
        {
            return true;
        }else
        {
            return false;
        }
    }


    public function delete($id,$table)
    {
        $this->db->where('id',$id);
        if($this->db->delete($table))
        {
            return true;
        }else
        {
            return false;
        }
    }
}