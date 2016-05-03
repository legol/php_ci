<?php
class Pages extends CI_Controller {
		public function index()
		{
			$this->load->view('welcome_message');
		}

		// try http://106.185.33.7:9500/index.php/pages/view/test
        public function view($page = 'home')
        {
			log_message('info', 'Pages::view() is called with $page='.$page);

	        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
	        {
	                // Whoops, we don't have a page for that!
	                show_404();
	        }
	
	        $data['title'] = ucfirst($page); // Capitalize the first letter
	
	        $this->load->view('templates/header', $data);
	        $this->load->view('pages/'.$page, $data);
	        $this->load->view('templates/footer', $data);

        }
}
