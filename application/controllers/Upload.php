<?php
    class Upload extends CI_Controller{
        public function index(){
            $this->load->view('upload',array('error' => ' '));
        }

        public function doUpload(){
            $config['upload_path']          = './assets/upload';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload',$config);

            if( ! $this->upload->doUpload('userfile')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload',$error);                
            }else{
                $data = array('upload_data' => $this->upload->data());
                $imageName = $data['upload_data']['file_name']; 
            }
        } 
    }
