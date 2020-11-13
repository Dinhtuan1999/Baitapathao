<?php
class grandfather {
    public $run;
    public $age;
    public function __construct($run,$age)
    {
        $this->run =$run;
        $this->age =$age;
    }
    function toSing(){
        return $this->age.$this->run;
    }
}
class father extends grandfather{
    public $sing;
    public function __construct($run, $age,$sing)
    {
        $this->sing =$sing;
        parent::__construct($run, $age);
    }
    function toSing()
    {
        return parent::toSing();
    }
}
class child extends father {
    public function __construct($run, $age, $sing)
    {
        parent::__construct($run, $age, $sing);
    }
    function toSing()
    {
        return parent::toSing();
    }
}
$grandfather = new Grandfather(12,60);
echo $grandfather->toSing();
