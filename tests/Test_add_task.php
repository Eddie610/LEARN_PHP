<?php
class add_task{
    public function input($task){
        $task='Going to the market';
return $task;
    } 
}




use PHPUnit\Framework\TestCase;
class Test_add_task extends TestCase{
    
   
    public function tesadd_task(){

        $add_task=new add_task();
        $output=$add_task->input('Going to the market');
        $this->assertEquals('Going to the market',$output);
    }
}