<?php

class Directions {
    protected $direction;

    public function set_direction($direction){
        $this->direction = $direction;
    }

    public function get_info(){
        return $this->direction ? "Direction:" . $this->direction . "\n" : "unknown direction" . "\n";
    }
}

class Courses extends Directions{
    protected $course;

    public function set_course($course){
        $this->course = $course;
    }

    public function get_course(){
        return $this->course ? "Course:" . $this->course . "\n" : "unknown course" . "\n";
    }

    public function get_info(){
        return parent::get_info() . $this->get_course();
    }
}

class Groups extends Courses{
    protected $group;

    public function set_group($group){
        $this->group = $group;
    }

    public function get_group(){
        return $this->group ? "Group:" . $this->group . "\n" : "unknown group" . "\n";
    }

    public function get_info(){
        return parent::get_info() . $this->get_group();
    }
}

$person = new Groups();

$person->set_direction("Technical");
$person->set_course("PhysTech");
$person->set_group("1");
echo $person->get_info();
