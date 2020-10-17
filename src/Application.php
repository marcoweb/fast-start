<?php
namespace FastStart;

class Application {
    private $configurations = [];
    private $route = null;

    public function getConfiguration($section) {
        $path_def = $this->getFrameworkPath().'/config/'.$section.'.config.php';
        $conf_def = (file_exists($path_def)) ? include($path_def) : [];
        $path_app = $this->getApplicationPath().'/config/'.$section.'.config.php';
        $conf_app = (file_exists($path_app)) ? include($path_app) : [];
        $this->configurations[$section] = array_merge_recursive($conf_def, $conf_app);
        return $this->configurations[$section];
    }

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