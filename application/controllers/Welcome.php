<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		// $generator = $this->gen_one_to_three();
		// foreach ($generator as $value) {
		//     echo "$value\n";
		// }
		$range = $this->xrange(1, 1000000);
		var_dump($range); // object(Generator)#1
		var_dump($range instanceof Iterator); // bool(true)
	}

    public function test($aa,$bb,$cc){
    	print_r($_GET);
        echo '</br>';
    	echo 'aa:'.$aa.'</br>';
        echo 'bb:'.$bb.'</br>';
        echo 'cc:'.$cc.'</br>';
    }

	function gen_one_to_three() {
	    for ($i = 1; $i <= 3; $i++) {
	        // Note that $i is preserved between yields.
	        yield $i;
	    }
	}

	function xrange($start, $end, $step = 1) {
	    for ($i = $start; $i <= $end; $i += $step) {
	        yield $i;
	    }
	}
}
