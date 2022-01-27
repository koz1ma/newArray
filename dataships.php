<?php
        //Enter your code here, enjoy!
        //class newArray - act like array and should accept any type of data
        // 4 methods
        // getData
        // setData
        // pushData
        // deleteData
class newArray{
    private $data = [];
    
    // getData from index
    public function getData($index = null){
        if($index == null){
            return $this->data;
        }
        if(isset($this->data[$index])){
            return $this->data[$index];    
        }else{
            throw new Exception('Index not found.');
        }
    }
    // setDate from index
    public function setData($data, $index = 0){
        if(isset($this->data[$index])){
            $this->data[$index] = $data;
        }else{
            throw new Exception('Index not found.');
        }
    }
    
    // pushData in the end of array
    public function pushData($data){
        $this->data[] = $data;
    }
    
    // deleteData from index
    public function deleteData($index = 0){
        if(isset($this->data[$index])){
            unset($this->data[$index]);
        }else{
            throw new Exception('Index not found.');
        }
    }
}

$newArrayObj = new newArray();
$d = 'TEST';
$newArrayObj->pushData($d);
//print_r($newArrayObj->getData(-2));
$d2 = 'TESTSET';
$newArrayObj->setData($d2);
print_r($newArrayObj->getData());
$newArrayObj->deleteData();
print_r($newArrayObj->getData());


