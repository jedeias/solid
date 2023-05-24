<?php

Class login{
    
    private $repository;

    public function __construct() {
        $this->repository = new PeopleRepository();
    }

    public function loginCheack($people)
    {

        try {
            $user = $this->repository->getByEmail($people->getEmail());

            if ($user["email"] == $people->getEmail() && $user["password"] == $people->getPassword()) {
                header("location: ../app/view/list.php");
            }else{
                echo "You have failed login";
                header("Refresh: 4; url=../");
                die();
            }
        } 
        catch (\Throwable $th) {
            header("Refresh: 4; url=../");
            die();
        }
    }

}

?>