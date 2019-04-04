<?php

require_once "./Queue.php";

class QueueTest extends \PHPUnit\Framework\TestCase
{
    public function testIsEmptyQueue()
    {
        $queue = new Queue();
        $this->assertTrue($queue->isEmpty());
    }

    public function testNotEmptyQueue()
    {
        $queue = new Queue();
        $queue->add("Red");
        $this->assertFalse($queue->isEmpty());
    }

    public function testOneSize()
    {
        $queue = new Queue();
        $queue->add("Red");
        $this->assertEquals(1,$queue->size());
    }

    public function testEmptyRemove()
    {
        $queue = new Queue();
        $this->assertNull($queue->pop());
    }

    public function testOnePop()
    {
        $queue = new Queue();
        $queue->add("Red");
        $this->assertEquals("Red", $queue->pop());
    }
   public function testMultiPop()
    {
        $queue = new Queue();
        $queue->add("Green");
        $queue->add("Blue");
        $queue->add("Yellow");

        $this->assertEquals("Green",$queue->pop());
        $this->assertEquals("Blue",$queue->pop());
        $this->assertEquals("Yellow",$queue->pop());
    }

    public function testPopAndPush()
    {
        $queue = new Queue();
        $queue->add("Green");
        $queue->add("Blue");
        $queue->add("Yellow");

        $queue->pop();
        $queue->pop();

        $queue->add("Red");

        $this->assertEquals("Yellow",$queue->pop());
        $this->assertEquals("Red",$queue->pop());
    }


}