<?php

    include_once 'person.php';

    class Book {
        // Properties
        public $title;
        public $author;
        public $year;
        public $description;

        function __construct($title, Person $author, $year, $description) {
            $this->title = $title;
            $this->author = $author;
            $this->year = $year;
            $this->description = $description;
        }

        function get_title() {
            return $this->title;
        }
        function get_author() {
            return $this->author->get_name();
        }
        function get_year() {
            return $this->year;
        }
        function get_description() {
            return $this->description;
        }
        function get_authorFullName() {
            return $this->author->get_name() . " "  . $this->author->get_lastname();
        }
        function get_authorBirthDate() {
            return $this->author->get_dateOfBirth();
        }

    }
?>