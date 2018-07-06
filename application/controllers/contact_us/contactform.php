<?php
class contactform extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
    }
	
	
	//custom validation function to accept only alphabets and space input
    function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
	
	
	function index()
    {
		$this->load->view('contact_form_view');
	
    }
	
	function form_submit()
	{
		/* 
        //run validation on form input
        if ($this->form_validation->run() == FALSE)
        {
            //validation fails
            $this->load->view('contact_form_view');
        } */
       /*  else
        { */
            // code to send mail
			//get the form data
            $name = $this->input->post('user_name');
            $from_email = $this->input->post('user_email');
            $tour_place = $this->input->post('tour_place');
            $tour_start_date = $this->input->post('tour_start_date');
            $tour_end_date = $this->input->post('tour_end_date');
            $comment = $this->input->post('comment');
            $number_of_adults = $this->input->post('number_of_adults');
            $number_of_child = $this->input->post('number_of_child');
            $child_age = $this->input->post('child_age');

			$subject = 'Tour enquire received on - '.date("Y-m-d H:i:s");  
			
            //set to_email id to which you want to receive mails
            $to_email = 'mdwtourism@gmail.com';
 
			$message = "You have received Tour enquire";
			
            //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'vinz.shinde@gmail.com';
            $config['smtp_pass'] = 'vinayatours';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes 
			
			
			$this->load->library('email');

			$this->email->from('vinz.shinde@gmail.com', 'Vinaya');
			$this->email->to('mdwtourism@gmail.com');

			$this->email->subject('Email Test');
			$this->email->message('Testing the email class.');

//$this->email->send();
			
			
			
			
             $this->load->library('email', $config);
             $this->email->initialize($config);                        

            //send mail
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);
			
            if ($this->email->send())
            {
                // mail sent
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
                redirect('contact-us');
            }
            else
            {
				echo 'in else';exit;
                //error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
                redirect('contact-us');
            }
        
        //}
		
		
	}
	
	
	
	
	
	
	
	
}
?>