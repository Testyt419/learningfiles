<?php

namespace App\Controllers;

use App\Model\TableModel;
class TableController  extends \Controller{
    public function table(): void
    {
            $table = new TableModel;
            $this->render('table', $table -> SelectRecord());
    }


}