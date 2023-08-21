<?php

class Home extends CI_Controller{
    public function _construct()
    {
        parent::__construct();
    }
    public function index(){
        $data['schedules'] = array();
        $data['locations'] = $this->CM->select_data("bms_location","*");
        $getinfo = $this->input->get();
        if(isset($getinfo['start'])) {
            $data['schedules'] = $this->CM->select_data("bus_schedule","*",$getinfo);
        }
        $this->load->view('home',$data);
    }
    public function booking($id){
        if($this->input->method()=='post'){
            $data = $_POST;
            $data['bus'] = $id;
            $this->CM->insert_data('bus_booking',$data);
            redirect(base_url('home/success'));
        }else{
            $data['id'] = $id;
            $this->load->view('booking',$data);
        }
    }
    public function success(){
        $this->load->view("success");
    }
}
?>