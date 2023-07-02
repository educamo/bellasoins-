<?php
class Service extends CI_Controller {

    // Este es el constructor de la clase
    public function __construct()
    {
        // Llama al constructor de la clase padre
        parent::__construct();
        // Carga el modelo service_model
        $this->load->model('service_model');
    }

    // Este es el método por defecto que se carga si el segundo segmento del URI está vacío
    public function index()
    {
        // Obtiene todos los servicios desde el modelo
        $data['services'] = $this->service_model->get_all_services();
        // Carga la vista service_index y le pasa los datos
        $vista = 'service_index';
        // var_dump($data); die();
        $this->plantilla($vista, $data);
    }
    private function plantilla($vista = '', $data = '') {
        $this->load->view('header');
        $this->load->view($vista, $data);
        $this->load->view('footer');
    }

    // Este es el método que se carga si el segundo segmento del URI es show y el tercero es un id
    public function show($id)
    {
        // Obtiene el servicio con el id dado desde el modelo
        $data['services'] = $this->service_model->get_service_by_id($id);
        // Carga la vista service_index y le pasa los datos
        $vista = 'service_show';
        // var_dump($data); die();
        $this->plantilla($vista, $data);
    }

    // Este es el método que se carga si el segundo segmento del URI es create
    public function create()
    {
        // Valida los datos del formulario
        $this->form_validation->set_rules('name', 'Nombre', 'required');
        $this->form_validation->set_rules('description', 'Descripción', 'required');
        $this->form_validation->set_rules('price', 'Precio', 'required|numeric');

        // Si los datos son válidos, los inserta en la base de datos y redirige al index
        if ($this->form_validation->run() == TRUE)
        {
            $this->service_model->insert_service();
            redirect('service/index');
        }
        else
        {
            // Si los datos no son válidos, carga la vista service_create con los errores
            $this->load->view('service_create');
        }
    }
}
