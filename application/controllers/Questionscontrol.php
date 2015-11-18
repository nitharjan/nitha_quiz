<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionscontrol extends CI_Controller {

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
                $this->load->helper('url');
                $this->load->model('Getquestions');
                $category = $this->input->get('category','');
                //var_dump($category);
		$buttongo = $this->input->get('gobutton','');
                $resultbtton=$this->input->get('resultbtton','');
                //var_dump($resultbtton);
		if ($buttongo != '') {
			// no guess provided, so create a guess and display it
			$newquestions = $this->Getquestions->getQuestions($category);
                        
                        $databag['newquestions']=$newquestions;
                        $databag['sCategory']=$category;
			$this->load->view('questionsview',$databag);
		}
		else if ($resultbtton != ''){
                   // var_dump($resultbtton);
                    $answer1=$this->input->get('1','');
                    $answer2=$this->input->get('2','');
                    $answer3=$this->input->get('3','');
                    $answer4=$this->input->get('4','');
                    $answer5 = $this->input->get('5','');
                    $category = $this->input->get('sCategory','');;
                    $answer = $this->Getquestions->checkAnswer($answer1,$answer2,$answer3,$answer4,$answer5,$category);
                    $databag['correctResult']=$answer;
                    $this->load->view('resultview',$databag);
		}
	}
}
