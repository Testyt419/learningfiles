<?php

namespace App\Model;

    class TableModel extends \Database{
        public function SelectRecord()
        {
            $this-> __construct();
            return $this-> getConnection() -> query("SELECT * FROM `sample`")->fetch_all(MYSQLI_ASSOC); //no idea if such chaining is disgusting or beautiful
        }
    }