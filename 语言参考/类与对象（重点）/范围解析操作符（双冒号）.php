<?php
class Super
{
    const name = 'vic';
    private $age = 18;

    protected function getAge()
    {
        print_r($this->age);
    }
}

class Child extends Super
{
    const name = 'kongxs';

    public function getInfo()
    {
        echo parent::name; // vic
        echo $this->getAge(); // 18
        echo self::name; // kongxs
    }
}
$ins = new Child();
$ins->getInfo();
