<?php

class Session implements sessionInterface{
    public function set($session, $var){
        $_SESSION[$session] = $var;
    }
    public function get($var){
        return $_SESSION[$var];
    }
    public function destroy(){
        session_destroy();
    }
}

?>