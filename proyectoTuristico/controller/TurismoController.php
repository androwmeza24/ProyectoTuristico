<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of TurismoController
 *
 * @author andro
 */
class TurismoController {
    public function __construct() {
        $this->view = new View();
    }
    public function inicio() {
        
        $this->view->show("indexView.php");
    }
}
