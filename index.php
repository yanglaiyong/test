
<?php


class test
{
    public $dbl;
    public $db2;

    function __construct($instance)
    {
        $this->$db1 = register('dbs');
        $this->$db2 = $instance
    }

    public function index(){
        echo "hello world";
    }
}
