<?php

class Page extends CI_Controller {

   function ajax()
   {
      $json['error'] = '';
      $json['error'] = '';
      echo json_encode($json);

 $this->load->view('header');
     /// or if you want html back//
      $data['page_title'] = 'Your title 2';
      $this->load->view('content', $data);//ajax.php on your view
   }

}
?>
