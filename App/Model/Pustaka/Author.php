<?php

class Author {
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type) {
        if ($type == 'brief') {
            return [
                'name' => $this->name
            ];
        } else if ($type == 'detailed') {
            return [
                'name' => $this->name,
                'description' => $this->description
            ];
        }
    }
}