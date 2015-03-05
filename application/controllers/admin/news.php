<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	 
	public function index()
	{

		$this->load->model('main_model');
		$data['news'] = $this->main_model->getAllNews();

		$this->load->view('header_view');
		$this->load->view('admin/news_view', $data);
		$this->load->view('footer_view');
	}

	public function page()
	{
		$this->load->model('main_model');

		$config['base_url'] = base_url('index.php/admin/news/page/');
		$config['total_rows'] = $this->db->count_all('news');
		$config['per_page'] = 2; 
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
		$this->load->view('admin/news_view', $data);
		$this->load->view('footer_view');
	}
	

	public function add()
	{

		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');
		$data['date'] = $this->input->post('date');
		$data['author'] = $this->input->post('author');
		$data['img'] = $_FILES['userfile']['name'];

		$this->load->model('main_model');
		$this->main_model->addNews($data);	
		$this->do_upload();
		redirect('admin/news');
		

	}

	public function do_upload()
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000000';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload())
		{
			echo "chexav";
		}	
		else
		{
			echo "ok";
		}
	}	


	public function addResalt()
	{
		$this->load->view('header_view');
		$this->load->view('admin/add_news_view');
		$this->load->view('footer_view');
	}


	public function edit($id)
	{
		$this->load->model('main_model');
		$data['news'] = $this->main_model->getNewsById($id);	

		$this->load->view('header_view');
		$this->load->view('admin/edit_view',$data);
		$this->load->view('footer_view');

	}

	public function updateNews($id,$name)
	{
		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');
		$data['date'] = $this->input->post('date');
		$data['author'] = $this->input->post('author');
		$data['img'] = $_FILES['userfile']['name'];


		$this->load->model('main_model');
		$this->do_upload();
		$data['news'] = $this->main_model->updateNewsById($id,$data);
		redirect('admin/news');

	}

	public function delete($id)
	{
		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');
		$data['date'] = $this->input->post('date');
		$data['author'] = $this->input->post('author');

		$this->load->model('main_model');
		$data['news'] = $this->main_model->deleteNews($id,$data);
		redirect('admin/news');
	}

}

