<?php


class AuthorBook
{
    private $id;
    private $Book_ID;
    private $Author_ID;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getBookID()
    {
        return $this->Book_ID;
    }

    /**
     * @param mixed $Book_ID
     */
    public function setBookID($Book_ID)
    {
        $this->Book_ID = $Book_ID;
    }

    /**
     * @return mixed
     */
    public function getAuthorID()
    {
        return $this->Author_ID;
    }

    /**
     * @param mixed $Author_ID
     */
    public function setAuthorID($Author_ID)
    {
        $this->Author_ID = $Author_ID;
    }

    public function getArray()
    {
        // TODO: Implement getArry() method.
        $author   =array ('author_book' =>
            array (
                'Book_ID'=>$this->getBookID(),
                'Author_ID'=> $this->getAuthorID()));

        return $author;

    }



}