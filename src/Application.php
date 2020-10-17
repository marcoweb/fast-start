<?php
namespace FastStart;

class Application {
    private $frameworkPath = null;
    private $applicationPath = null;

    public function getFrameworkPath() {
        return __DIR__;
    }

    public function getApplicationPath() {
        return $_SERVER['DOCUMENT_ROOT'];
    }
}