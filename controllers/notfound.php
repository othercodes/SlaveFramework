<?php namespace Controllers;

use System\Controller;

/**
 * Default "notfound" controller here yo can custom the 404 redirections.
 * @author David Unay Santisteban <slavepens@gmail.com>
 * @package SlaveFramework
 * @subpackage Controller
 * @version 1.0
 */
class Notfound extends Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        // set the message
        $data['title'] = "Page not Found";
        $data['message'] = "The requested page is not available.";
        // load data into the template
        $this->load->view('errors/404', $data);
    }

}