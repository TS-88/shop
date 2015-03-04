<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function page()
	{
		$this->load->model('main_model');

		$config['base_url'] = base_url().'index.php/frontend/home/page/';
		$config['total_rows'] = $this->db->count_all('news');
		$config['per_page'] = 3; 
    	$config['use_page_numbers'] = TRUE;
		$config['num_links'] = 1;
 	    $config['uri_segment'] = 4;
	    $config['next_link'] = 'Older &rarr;';
	    $config['prev_link'] = '&larr; Newer';
		$config['full_tag_open'] = "<p style='text-align:center;margin: 0px;font-size: 25px;color:red'>";
		$config['full_tag_close'] = "</p>";

    	$limit = $config['per_page'];
  	  	$offset = $this->uri->segment(4);
  	  		if($offset < 1)
  	  		{
  	  			$offset = 0;
  	  		}
  	  		else
  	  		{
  	  			$offset = $offset * $limit - $limit;
  	  		}
  	  		
		$data['news'] = $this->main_model->page($config['per_page'],$offset);
		$this->pagination->initialize($config); 


		$this->load->view('header_view');
		$this->load->view('frontend/home_view', $data);
		$this->load->view('footer_view');

	}

}









