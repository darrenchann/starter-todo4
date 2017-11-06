<?php

if (!class_exists('PHPUnit_Framework_TestCase')) {
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}

/**
 * Verifies that the collection of tasks has more uncompleted tasks than
 * completed ones.
 */
class TaskListTest extends PHPUnit_Framework_TestCase {

    private $tasks;

    /**
     * Sets up a task to test with.
     */
    public function setUp() {
        $this->tasks = new Tasks();
    }

    /**
     * Checks that there are more uncompleted tasks than completed ones.
     */
    public function testMoreUncompleted() {
        $tasks = $this->tasks->all();
        $numTasks = count($tasks);
        $numUncompleted = 0;

        foreach ($tasks as $task) {
            if ($task->status != 2) {
                $numUncompleted++;
            }
        }

        $this->assertGreaterThan($numTasks - $numUncompleted, $numUncompleted);
    }
}
