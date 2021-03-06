<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
        public function __construct() {
            
            parent::__construct();
            $this->load->database();
            
            $this->load->helper('url');

            $this->load->library('grocery_CRUD');
            
            
        }
        
        private function Cargar_Vista($datos){
            $this->load->view('example',$datos);
            
        }
        
        public function participantes() {
            
            $crud = new Grocery_CRUD();
            $crud->set_table("participantes");
            $crud->columns('Dorsal','Apellidos','Nombre','CLUB','Poblacion');
            $datos = $crud->render();
            $this->Cargar_Vista($datos);
            
            
        }
        
	public function index()
	{
            phpinfo();
		$this->load->view('welcome_message');
	}
        public function prueba($id1=0,$id2=0){
            echo "Llamada al metodo prueba del Controlador Welcome($id1,$id2)";
        }
}
