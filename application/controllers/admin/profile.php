<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile extends Common_Auth_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('profile_m');
        $this->load->library('form_validation');
    }

    public function index($id = NULL) {
        // Fetch a notice or set a new one
        $id = $this->the_user->user_id; 
      
        if ($id) {
            $this->data['profile'] = $this->profile_m->my_model_get($id);
            count($this->data['profile']) || $this->data['errors'][] = 'Profile Data could not be found';
        } else {
            $this->data['profile'] = $this->profile_m->get_new();
        }

        // Set up the form
        $rules = $this->profile_m->rules;
        $this->form_validation->set_rules($rules);

        // Process the form
        if ($this->form_validation->run() == TRUE) {
            $data = $this->profile_m->array_from_post(array(
                'username',
                'phone',
            ));
            $this->profile_m->save($data, $id);
            redirect('admin/profile');
        }

        // Load the view
        $this->data['user_profile_info'] = $this->profile_m->get_by('id', $id);
        $this->data['meta_title'] = 'My Profile';
        $this->data['meta_sub_title'] = '';
        
        $this->data['single'] = $this->profile_m->get_single($id);
        $this->load_view('admin/profile', $this->data);
    }
    
    public function upload_avatar($message = NULL){
        $this->load->database();
        
        $config['upload_path'] = FCPATH. 'uploads/users/';
        $config['allowed_types'] ='gif|jpg|png';
        $config['max_size'] = 1024 * 8 ;
        $config['encrypt_name'] = FALSE; 
        
        $this->load->library('upload');
        
        $files = $_FILES; 
        $cpt = count($_FILES['files']['name']); 
        for($i=0; $i<$cpt; $i++)
        {
            $_FILES['files']['name'] = $files['files']['name'][$i];
            $_FILES['files']['type'] = $files['files']['type'][$i];
            $_FILES['files']['tmp_name'] = $files['files']['tmp_name'][$i];
            $_FILES['files']['error'] = $files['files']['error'][$i];
            $_FILES['files']['size'] = $files['files']['size'][$i];
            
            $this->upload->initialize($config);
            $this->upload->do_upload('files');
            $tmp = $this->upload->data();
            
                $this->load->library('image_lib');
                //thumbnail config
                $config_t['source_image'] = 'uploads/users/' . $tmp['file_name'];
                $config_t['new_image'] = 'uploads/users/thumbs/' . $tmp['file_name'];
                $config_t['create_thumb'] = FALSE;
                $config_t['maintain_ratio'] = TRUE;
                $config_t['width'] = 250;
                $config_t['height'] =250;
                //end of config
                
                    $this->load->library('image_lib', $config_t);
                    $this->image_lib->initialize($config_t);
                    if (!$this->image_lib->resize())
                       $message =  "Failed." . $this->image_lib->display_errors();
                //resize config
                $config_r['source_image'] = 'uploads/users/' . $tmp['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_r['width'] = 80;
                $config_r['height'] =80;
                $config_r['quality'] = 100 ;
                //end of config
                
                    $this->load->library('image_lib', $config_r); 
                    $this->image_lib->initialize($config_r);
                    if (!$this->image_lib->resize())
                        $message = 'Failed. ' . $this->image_lib->display_errors(); 
                    
                    
                    
                $this->load->library('image_lib');
                //thumbnail config
                $config_t['source_image'] = 'uploads/users/' . $tmp['file_name'];
                $config_t['new_image'] = 'uploads/users/thumbs/small/' . $tmp['file_name'];
                $config_t['create_thumb'] = FALSE;
                $config_t['maintain_ratio'] = TRUE;
                $config_t['width'] = 20;
                $config_t['height'] =20;
                //end of config
                
                    $this->load->library('image_lib', $config_t);
                    $this->image_lib->initialize($config_t);
                    if (!$this->image_lib->resize())
                       $message =  "Failed." . $this->image_lib->display_errors();
                //resize config
                $config_r['source_image'] = 'uploads/users/' . $tmp['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_r['width'] = 29;
                $config_r['height'] =29;
                $config_r['quality'] = 100 ;
                //end of config
                
                    $this->load->library('image_lib', $config_r); 
                    $this->image_lib->initialize($config_r);
                    if (!$this->image_lib->resize())
                        $message = 'Failed. ' . $this->image_lib->display_errors(); 
                    
                    
         $data = array(
             'image' => $tmp['file_name']
         );
         $user_id = $this->the_user->user_id; 
        $this->db->where('id', $user_id);
        if (!$this->db->update('users', $data)) 
                 echo 'Database Insert Failed for unkown reason'; 
        } 
        
        redirect('admin/profile', $message);
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

