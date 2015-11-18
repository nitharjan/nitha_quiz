<?php

class Getquestions extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getQuestions($category) {
        $this->load->database();
        $databeOfQuestions = array();
        $result = $this->db->get_where('questions', array('category_id' => $category));

        foreach ($result->result() as $row) {
            //$row is an object - attributes are column names
            $databeOfQuestions[] = array('id' => $row->id,
                'question_name' => $row->question_name,
                'answer1' => $row->answer1,
                'answer2' => $row->answer2,
                'answer3' => $row->answer3,
                'answer4' => $row->answer4);
        }
        return $databeOfQuestions;
    }

    function checkAnswer($answer1, $answer2, $answer3, $answer4, $answer5, $category) {
        $this->load->database();
        $dbanswer = array();
        $result = $this->db->get_where('questions', array('category_id' => $category));

        foreach ($result->result() as $row) {
            //$row is an object - attributes are column names
            $dbanswer[] = $row->answer;
        }
        //var_dump($dbanswer[0]);
        $good=0;
        if ($answer1 == $dbanswer[0]){
            $good++;
        }
        if ($answer2 == $dbanswer[1]){
            $good++;
        }
        if ($answer3 == $dbanswer[2]){
            $good++;
        }  
        if ($answer4 == $dbanswer[3]){
            $good++;
        }
        if ($answer5 == $dbanswer[4]){
            $good++;
        }
        
        //var_dump($good);
        return $good;
    }

}
