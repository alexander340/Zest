<?php

namespace App\Controllers;

use \Softhub99\Zest_Framework\View\View;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Softhub99\Zest_Framework\Controller\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function index()
    {
    	// Using the database model
    	// \App\Models\Database::CreateDb('Zest_Framework');
        echo View::View("Home/index");

    }
   
}