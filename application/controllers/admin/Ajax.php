<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('number');
        $this->load->model('admin/dashboard_model');
    }


	public function index()
	{
		$datas=$this->input->post();
		//print_r($datas);
		die("");
		//$this->load->view('public/home', $this->data);
	}
	public function todolist()
	{
		$c=$this->input->post("is");//true or false
		if($c == "true"){
			$checked=1;//end stask
		}else{
			$checked=0;//start task
		}
		$id=str_replace("todoCheck","",$this->input->post("id"));//todo-list->id
		$changer=$this->input->post("user");//todo-list->id
    die($this->dashboard_model->todochange($id,$checked,$changer));
		//print_r($datas);
		/*Array ( [is] => true [id] => todoCheck1 [user] => 1> ) 1*/
		//$this->load->view('public/home', $this->data);
		
	}
	public function todoup()
	{
		$text=$this->input->post("text");
		$id=$this->input->post("id");
    die($this->dashboard_model->todoup($id,$text));
		//print_r($datas);
		/*Array ( [is] => true [id] => todoCheck1 [user] => 1> ) 1*/
		//$this->load->view('public/home', $this->data);
		
	}
	public function tododel()
	{
		$id=$this->input->post("id");
    die($this->dashboard_model->tododel($id));
		//print_r($datas);
		/*Array ( [is] => true [id] => todoCheck1 [user] => 1> ) 1*/
		//$this->load->view('public/home', $this->data);
		
	}
	public function todoadd()
	{
		$id=$this->input->post("user");
		$text=$this->input->post("text");
    die($this->dashboard_model->todoadd($id,$text));
		//print_r($datas);
		/*Array ( [is] => true [id] => todoCheck1 [user] => 1> ) 1*/
		//$this->load->view('public/home', $this->data);
		
	}
	
	public function chat(){
		$userid=$this->session->userdata["user_id"];
		$frameworks_dir=$this->input->post("dir");
		$chatrecord=$this->dashboard_model->chatrecord();
		foreach($chatrecord as $c){date_default_timezone_set('Europe/Istanbul');?>
			<div class="direct-chat-msg <?php if($c->userId==$userid){echo 'right';}?>">
				<div class="direct-chat-infos clearfix">
					<span class="direct-chat-name float-<?php if($c->userId==$userid){echo 'right';}else{echo 'left';}?>"><?php echo $c->username;?></span>
					<span class="direct-chat-timestamp float-<?php if($c->userId==$userid){echo 'left';}else{echo 'right';}?>"><?php echo timespan(strtotime($c->updateDate),time())." ago";?></span>
				</div>
				<img class="direct-chat-img" src="<?php echo base_url($frameworks_dir . '/adminlte/img/'); ?>user3-128x128.jpg" alt="message user image">
				<div class="direct-chat-text">
					<?php echo $c->message;?>
				</div>
			</div>
		<?php }
		$message=$this->input->post("message");
		if(trim($message) != ""){
			$this->dashboard_model->chatsend($userid,$message);
		}
		die();
		
	}
}
