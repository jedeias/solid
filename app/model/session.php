<?php

class Session implements sessionInterface{
    function __construct() {
        
        session_start();
    }
   
    function set($sessionName, $var) {
        $_SESSION[$sessionName] = $var;
    }

    function get($name) {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        }
        return null;
    }
   
    function destroy() {
        session_destroy();
    }
}

?>