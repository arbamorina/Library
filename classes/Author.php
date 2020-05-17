<?php
include_once "Model.php";

class Author implements Model
{
    private $id;
    private $Name;
    private $Lastname;
    private $DOB;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function setName($Name)
    {
        $this->Name = $Name;
    }

    public function getLastname()
    {
        return $this->Lastname;
    }

    public function setLastname($Lastname)
    {
        $this->Lastname = $Lastname;
    }

    public function getDOB()
    {
        return $this->DOB;
    }

    public function setDOB($DOB)
    {
        $this->DOB = $DOB;
    }
    public function getArray()
    {
        // TODO: Implement getArry() method.
        $author   = ['author' =>
            [
                'Name'=>$this->getName(),
                'Lastname'=> $this->getLastname(),
                'DOB '=>$this->getDOB()
            ]
        ];
        
        return $author;

    }
    
    public function getAuthorName($id){
        $db = new Database();

        $res = $db->read($this->getArray());
        foreach ($res as $row ){
            if($row['id'] === $id){
                return $row['Name'];
            }

        }
        return false;

    }
}