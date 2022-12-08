<?php 

namespace App\Controllers;  

use CodeIgniter\Controller;

  

class ProfileController extends Controller

{

    public function index()

    {

        $session = session();

        echo "<centre><h3>Welcome  ".$session->get('name'); 
        echo " <br> To continue to our site <br> " ;
        echo '<a href ="http://localhost/CI/public/index.php/frontpage">Click here :)</a>';

    }

}
