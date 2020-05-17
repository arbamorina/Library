<?php

include_once "Model.php";
class Book implements Model
{
    private $id;
    private $Name;
    private $Pages;
    private $Publisher;
    private $Genre;
    private $image;

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

    public function getPages()
    {
        return $this->Pages;
    }

    public function setPages($Pages)
    {
        $this->Pages = $Pages;
    }

    public function getPublisher()
    {
        return $this->Publisher;
    }

    public function setPublisher($Publisher)
    {
        $this->Publisher = $Publisher;
    }

    public function getGenre()
    {
        return $this->Genre;
    }

    public function setGenre($Genre)
    {
        $this->Genre = $Genre;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }



    public function getArray()
    {
        // TODO: Implement getArry() method.
        $book   =array ('book' =>
            array (
                'Name'=>$this->getName(),
                'Pages'=> $this->getPages(),
                'Publisher '=>$this->getPublisher(),
                'Genre' =>$this->getGenre(),
                'image'=> $this->getImage()));


        return $book;

    }

    public function getBookName($id){
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