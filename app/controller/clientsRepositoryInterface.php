<?php

interface clientsRepositoryInterface{
    
    public function save(Clients $clients);
    public function update(Clients $clients);
    public function delete(Clients $clients);
    
    }

?>