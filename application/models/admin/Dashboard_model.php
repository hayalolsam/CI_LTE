<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }


    public function todolist($user_id=null)
    {
        $this->db->select('todo-list.*,users.username');
				if($user_id!= null){
					$this->db->where('user_id',$user_id);
				}
				$this->db->join('users', 'users.id = todo-list.user_id', 'left');
        $query = $this->db->get('todo-list');
        return $query->result();
    }
		public function todochange($id,$checked,$changer){
			$data = array(
				'status' => $checked,
				'changer' => $changer,
				'updated' => time()
			);
			$this->db->where('id', $id);
			$query = $this->db->update('todo-list', $data);
			return $this->db->last_query();
    }
		public function todoup($id,$text){
			$data = array(
				'title' => $text,
				'status' => 0,
				'created' => time(),
				'updated' => 0,
			);
			$this->db->where('id', $id);
			$query = $this->db->update('todo-list', $data);
			return $this->db->last_query();
    }
		public function tododel($id){
			$this->db->where('id', $id);
			$query = $this->db->delete('todo-list');
			return $this->db->last_query();
    }
		public function todoadd($id,$text){
			$data = array(
				'user_id' => $id,
				'title' => $text,
				'status' => 0,
				'created' => time()
			);
			$query = $this->db->insert('todo-list',$data);
			return $this->db->last_query();
    }
		public function chatrecord(){
			
       $this->db->select('chat.*,users.username');
			$this->db->order_by('id', 'ASC');
			$this->db->limit(10); 
			$this->db->join('users', 'users.id = chat.userId', 'left');
			$query = $this->db->get('chat');
			return $query->result();
    }
		
		public function chatsend($userid,$message){
			$data = array(
				'userId' => $userid,
				'message' => $message,
				'updateDate' => date("Y-m-d H:i:s",time())
			);
			$query = $this->db->insert('chat',$data);
		}
    public function get_count_record($table)
    {
        $query = $this->db->count_all($table);

        return $query;
    }


    public function disk_totalspace($dir = DIRECTORY_SEPARATOR)
    {
        return disk_total_space($dir);
    }


    public function disk_freespace($dir = DIRECTORY_SEPARATOR)
    {
        return disk_free_space($dir);
    }


    public function disk_usespace($dir = DIRECTORY_SEPARATOR)
    {
        return $this->disk_totalspace($dir) - $this->disk_freespace($dir);
    }


    public function disk_freepercent($dir = DIRECTORY_SEPARATOR, $display_unit = FALSE)
    {
        if ($display_unit === FALSE)
        {
            $unit = NULL;
        }
        else
        {
            $unit = ' %';
        }

        return round(($this->disk_freespace($dir) * 100) / $this->disk_totalspace($dir), 0).$unit;
    }


    public function disk_usepercent($dir = DIRECTORY_SEPARATOR, $display_unit = FALSE)
    {
        if ($display_unit === FALSE)
        {
            $unit = NULL;
        }
        else
        {
            $unit = ' %';
        }

        return round(($this->disk_usespace($dir) * 100) / $this->disk_totalspace($dir), 0).$unit;
    }


    public function memory_usage()
    {
        return memory_get_usage();
    }


    public function memory_peak_usage($real = TRUE)
    {
        if ($real)
        {
            return memory_get_peak_usage(TRUE);
        }
        else
        {
            return memory_get_peak_usage(FALSE);
        }
    }


    public function memory_usepercent($real = TRUE, $display_unit = FALSE)
    {
        if ($display_unit === FALSE)
        {
            $unit = NULL;
        }
        else
        {
            $unit = ' %';
        }

        return round(($this->memory_usage() * 100) / $this->memory_peak_usage($real), 0).$unit;
    }
}
