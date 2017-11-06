<?php

if (!class_exists('PHPUnit_Framework_TestCase')) {
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}

/**
 * Verifies if the task entity accepts property values that meet the form
 * validation rules, and rejects ones that don't.
 */
class TaskTest extends PHPUnit_Framework_TestCase {

    private $task;

    /**
     * Sets up a task to test with.
     */
    public function setUp() {
        $this->task = new Task();
    }

    public function testName() {
        $name = 'Task #1';

        $this->task->name = $name;
        $this->assertNotEquals($name, $this->task->getName());
    }

    public function testName2() {
        $name = 'Task 1';

        $this->task->name = $name;
        $this->assertEquals($name, $this->task->getName());
    }

    public function testName3() {
        $name = 'Task1234567890123456789012345678901234567890123456789012345678901';

        $this->task->name = $name;
        $this->assertNotEquals($name, $this->task->getName());
    }

    public function testPriority1() {
        $priority = '0';

        $this->task->priority = $priority;
        $this->assertNotEquals($priority, $this->task->getPriority());
    }

    public function testPriority2() {
        $priority = '1';

        $this->task->priority = $priority;
        $this->assertEquals($priority, $this->task->getPriority());
    }

    public function testPriority3() {
        $priority = 'a';

        $this->task->priority = $priority;
        $this->assertNotEquals($priority, $this->task->getPriority());
    }

    public function testSize1() {
        $size = '0';

        $this->task->size = $size;
        $this->assertNotEquals($size, $this->task->getSize());
    }

    public function testSize2() {
        $size = '3';

        $this->task->size = $size;
        $this->assertEquals($size, $this->task->getSize());
    }

    public function testSize3() {
        $size = '-';

        $this->task->size = $size;
        $this->assertNotEquals($size, $this->task->getSize());
    }

    public function testGroup1() {
        $group = '0';

        $this->task->group = $group;
        $this->assertNotEquals($group, $this->task->getGroup());
    }

    public function testGroup2() {
        $group = '5';

        $this->task->group = $group;
        $this->assertNotEquals($group, $this->task->getGroup());
    }

    public function testGroup3() {
        $group = '2';

        $this->task->group = $group;
        $this->assertEquals($group, $this->task->getGroup());
    }
}
