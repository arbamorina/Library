<?php
class Database
{
    private $hostname;
    private $database;
    private $username;
    private $password;
    private $conn;

    /**
     * Database constructor.
     */
    public function __construct(string $hostname = null, string $database = null, string $username = null, string $password = null)
    {
        try {
            $this->hostname = trim(addslashes($hostname ?? 'localhost'));
            $this->database = trim(addslashes($database ?? 'librari1.0'));
            $this->username = trim(addslashes($username ?? 'root'));
            $this->password = trim(addslashes($password ?? ''));
        } catch (Exception $e) {
            throw new Exception("" . $e->getMessage());
        }
    }

    /**
     * Connect to database.
     */
    private function connect()
    {
       try{
           $this->conn = new PDO("mysql:host=" . $this->hostname . ";dbname=" . $this->database, $this->username, $this->password);
           $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       }catch (PDOException $e){
           throw new Exception("Nuk munde te behet konektimi me databaze per arsye te: ".$e->getMessage());
       }
    }

    /**
     * konvertimi i array 2D ne array te thjesht.
     */
    private function oneArray($array)
    {
        if (!is_array($array)) {
            return false;
        }
        $result = array();
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $result = array_merge($result, $this->oneArray($value));
            } else {
                $result[$key] = $value;
            }
        }
        return $result;
    }

    private function getInnerArray(array $array)
    {
        if (!is_array($array)) 
            throw new ArgumentIsNotArrayException();

        return $array[key($array)];
    }

    /**
     * insertimi i te dhenave ne databaze
     */
    public function insert(array $array)
    {

        try {
            if (!$this->conn) $this->connect();

            $tabela = key($array);
            $one = $this->oneArray($array);
            //nvend te oneArray() e marrim qishtu
            //$data = $array[$tabela];

            $colums = implode(",", array_keys($one));
            $values = implode("','", array_values($one));


            $sql = "INSERT INTO {$tabela} ($colums) VALUES('" . $values . "')";

            if($this->conn->prepare($sql) and $this->conn->exec($sql)){
               echo "<div class='alert alert-success'>Data inserted Successfully.</div> ";
            }
            else {
                echo "<div class='alert alert-success'>Can not insert data .</div> ";
            }


        } catch (Exception $e) {
            throw new Exception("Nuk mund te behet insertimi per arsye te : ".$e->getMessage());
        }
    }


    /**
     * update i te dhenave .
     */
    public function update(array $array, $id)
    {
        try {
            if (!$this->conn) $this->connect();
            $tabela = key($array);
            $one = $this->oneArray($array);
            $FieldParams = array();
            foreach ($one as $fieldName => $fieldValue) {
                $FieldParams [] = $fieldName . '=' . '\'' . $fieldValue . '\'';
            }

            $sql = 'UPDATE `' . $tabela . '` SET ' . implode(',', $FieldParams) . ' WHERE id=' . $id;
            if($this->conn->prepare($sql) and $this->conn->exec($sql)){
                echo "<div class='alert alert-success'>     Data updated Successfully.</div> ";
            }
            else {
                echo "<div class='alert alert-success'>       Can not update data .</div> ";
            }


        } catch (Exception $e) {
            throw new Exception("Nuk mund te behet update per arsye te : ".$e->getMessage());
        }


    }


    /**
     * fshirja e te dhenave nga databaza.
     */
    public function  delete(array $array,$id){
        try{
            if (!$this->conn) $this->connect();
            $tabela = key($array);

            $sql = "DELETE FROM {$tabela} WHERE id= " .$id;
            if($this->conn->prepare($sql) and $this->conn->exec($sql)){
                echo "<div class='alert alert-success'>Data deletet Successfully.</div> ";
            }
            else {
                echo "<div class='alert alert-success'>Can not delete data .</div> ";
            }

        }catch (Exception $e){
            throw new Exception("Nuk mund te behet fshirja : ".$e->getMessage());
        }

    }


    /**
     * leximi i nje rreshti nga te dhenat qe gjenden ne databaze.
     *
     */
    public function readOne (array $array ,$id)
    {
        try {
            if (!$this->conn) $this->connect();
            $tabela = key($array);
            $one = $this->oneArray($array);
            $colums = implode(",", array_keys($one));

            $query = "SELECT
                         ".$colums."
                    FROM
                        " .$tabela. "
                        WHERE id=".$id;

            $stmt = $this->conn->prepare( $query );
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;

        } catch (Exception $e) {
            throw new Exception("Nuk mund te behet egzekutohet metoda readOne per arsye te : ".$e->getMessage());

        }



    }

    /**
     * leximi i te gjith reshtave qe gjenden ne tabelen e caktuar ne databaze.
     */
    public  function read(array $array)
    {
            try {
                if (!$this->conn) $this->connect();
                $tabela = key($array);

                $query = "SELECT
                         *
                    FROM
                        " . $tabela . "";

                $stmt = $this->conn->prepare($query);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }catch (Exception $e){
                throw new Exception("Nuk mund te behet egzekutohet metoda read per arsye te : ".$e->getMessage());
            }
    }

    public function query ($queri){
        try {
            if (!$this->conn) $this->connect();


            $query = $queri;

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }catch (Exception $e){
            throw new Exception("Nuk mund te behet egzekutohet metoda query per arsye te : ".$e->getMessage());
        }

    }



}