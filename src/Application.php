<?php
namespace FastStart;

class Application {
    public function getFrameworkPath() {
        return realpath(__DIR__.'/../');
    }

    public function getApplicationPath() {
        if(file_exists('./composer.json')) {
            return realpath($_SERVER['DOCUMENT_ROOT']);
        } else {
            return realpath($_SERVER['DOCUMENT_ROOT'].'/../');
        }
    }
}