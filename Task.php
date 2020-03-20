<?php

class Task {

    protected $description;

    protected $completed = false;

    // public function __construct($description) {
    //     $this->description = $description;
    // }

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