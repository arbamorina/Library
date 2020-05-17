<?php
include_once "Model.php";

class Publisher implements Model
{
    private $id;
    private $Publisher_Name;
    private $City_Name;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPublisherName()
    {
        return $this->Publisher_Name;
    }

    /**
     * @param $Publisher_Name
     */
    public function setPublisherName($Publisher_Name)
    {
        $this->Publisher_Name = $Publisher_Name;
    }

    /**
     * @return mixed
     */
    public function getCityName()
    {
        return $this->City_Name;
    }

    /**
     * @param $City_Name
     */
    public function setCityName($City_Name)
    {
        $this->City_Name = $City_Name;
    }

    /**
     * @return array
     */
    public function getArray()
    {
        // TODO: Implement getArry() method.
        $publisher   =array ('publisher' =>
            array (
            'Publisher_Name'=>$this->getPublisherName(),
            'City_Name'=> $this->getCityName()));


        return $publisher;

    }

    /**
     * @param $id
     * @return bool
     */
    public function getPublisherNameByID($id){
        $db = new Database();

        $res = $db->read($this->getArray());
        foreach ($res as $row ){
            if($row['id'] == $id){
                return $row['Publisher_Name'];
            }

        }
        return false;

    }
}