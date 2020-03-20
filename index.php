<?php

require 'functions.php';

class Task {

    protected $description;

    protected $completed = false;

    public function __construct($description) {
        $this->description = $description;
    }

    public function isComplete() {
        return $this->completed;
    }

    public function complete() {
        $this->completed =  true;
    }

    public function getDescription() {
        return $this->description;
    }
}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')
];

$tasks[0]->complete();

new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');

require 'index.view.php';