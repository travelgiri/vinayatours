<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller {

	public function index()
	{
		$this->load->view('welcome_message_new');
	}
	
	public function view($page)
    {
		if($page == 'about-us')
		{
			$this->load->view('about-us');
		}
		if($page == 'group-tours')
		{
			$this->load->view('group_tours');
		}
		if($page == 'kerala-group-tour-one')
		{
			$this->load->view('group-tours/kerala-group-tour-one');
		}
		if($page == 'kerala')
		{
			$this->load->view('kerala_package');
		}
		if($page == 'maharashtra')
		{
			$this->load->view('maharashtra_package');
		}
		if($page == 'mahabaleshwar-hills')
		{
			$this->load->view('maharashtra/mahabaleshwar_hills');
		}
		if($page == 'mahabaleshwar-vishranti')
		{
			$this->load->view('maharashtra/mahabaleshwar_vishranti');
		}
		if($page == 'himachal')
		{
			$this->load->view('himachal_package');
		}
		if($page == 'goa')
		{
			$this->load->view('goa_package');
		}
		if($page == 'goa-delight')
		{
			$this->load->view('goa/goa-delight');
		}
		if($page == 'kashmir')
		{
			$this->load->view('kashmir_package');
		}
		if($page == 'karnataka')
		{
			$this->load->view('kashmir_package');
		}
		if($page == 'rajashthan')
		{
			$this->load->view('rajashthan_package');
		}
		if($page == 'manali-volvo')
		{
			$this->load->view('manali/manali-volvo-package');
		}
		if($page == 'manali-car')
		{
			$this->load->view('manali/manali-car-package');
		}
		if($page == 'simla-manali-car')
		{
			$this->load->view('manali/simla-manali');
		}
		if($page == 'simla-manali-volvo')
		{
			$this->load->view('manali/simla-manali-volvo');
		}
		if($page == 'chandigarh-manali')
		{
			$this->load->view('manali/chandigarh-manali');
		}
		if($page == 'chandigarh-manali-tours')
		{
			$this->load->view('manali/chandigarh-manali-2');
		}
		if($page == 'dalhousie-manali-tours')
		{
			$this->load->view('manali/dalhousie-manali-tours');
		}
		if($page == 'kerala-one')
		{
			$this->load->view('kerala/kerala_4n_5d');
		}
		if($page == 'kerala-two')
		{
			$this->load->view('kerala/kerala_5n_6d');
		}
		if($page == 'kerala-three')
		{
			$this->load->view('kerala/kerala_6n_7d');
		}
		if($page == 'mount-abu')
		{
			$this->load->view('rajashthan/mount-abu');
		}
		if($page == 'kerala-houseboat')
		{
			$this->load->view('kerala/kerala_houseboat/kerala-houseboat-packages');
		}
		if($page == 'kerala-houseboat-1')
		{
			$this->load->view('kerala/kerala_houseboat/kerala-houseboat-1');
		}
		if($page == 'kerala-houseboat-2')
		{
			$this->load->view('kerala/kerala_houseboat/kerala-houseboat-2');
		}
		if($page == 'kerala-houseboat-3')
		{
			$this->load->view('kerala/kerala_houseboat/kerala-houseboat-3');
		}
		if($page == 'kerala-houseboat-4')
		{
			$this->load->view('kerala/kerala_houseboat/kerala-houseboat-4');
		}
		
		if($page == 'gallery')
		{

			$this->load->view('gallery');
		}
		if($page == 'kerala-group-tour')
		{
			$this->load->view('group-tours/kerala-group-tour');
		}
		if($page == 'himachal-group-tour')
		{
			$this->load->view('group-tours/himachal-group-tour');
		}
		if($page == 'mini-himachal-group-tour')
		{
			$this->load->view('group-tours/mini-himachal-group-tour');
		}
		if($page == 'mini-himachal-winter')
		{
			$this->load->view('group-tours/mini-himachal-winter');
		}
		if($page == 'mini-himachal-summer')
		{
			$this->load->view('group-tours/mini-himachal-summer');
		}
		if($page == 'simla-manali-agra')
		{
			$this->load->view('manali/simla-manali-agra');
		}
		if($page == 'dalhousie-manali-5N-6D')
		{
			$this->load->view('manali/dalhousie-manali-5N-6D');
		}
		 if($page == 'chandigarh-manali-6N-7D')
		{
			$this->load->view('manali/chandigarh-manali-6N-7D');
		}
		if($page == 'delhi-manali-agra-4N-5D')
		{
			$this->load->view('manali/delhi-manali-agra-4N-5D');
		}
		if($page == 'delhi-manali-agra-5N-6D')
		{
			$this->load->view('manali/delhi-manali-agra-5N-6D');
		}
		if($page == 'delhi-manali-agra-volvo-5N-6D')
		{
			$this->load->view('manali/delhi-manali-agra-volvo-5N-6D');
		}
		
		
		if($page == 'testimonial')
		{
			$this->load->view('testimonial');
		}

    }
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/welcome.php */