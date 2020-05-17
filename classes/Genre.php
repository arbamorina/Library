<?php

include_once "Model.php";

class Genre implements Model
{
    private $id;
    private $Gname;

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
    public function getGname()
    {
        return $this->Gname;
    }


    /**
     * @param $Gname
     */
    public function setGname($Gname)
    {
        $this->Gname = $Gname;
    }

    /**
     * @return array
     */
    public function getArray()
    {
        // TODO: Implement getArry() method.
        $genre   =array ('genre' =>
            array (
                'Gname'=>$this->getGname()));
        return $genre;

    }


    /**
     * @param $id
     * @return bool
     */
    public function getGenreNameByID($id){
        $db = new Database();

        $res = $db->read($this->getArray());
        foreach ($res as $row ){
            if($row['id'] == $id){
                return $row['Gname'];
            }

        }
        return false;

    }

}