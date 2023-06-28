<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Cargar el modelo de citas
        $this->load->model('appointment_model');
        // Cargar la librería de email
        $this->load->library('email');
    }

    public function index()
    {
        // Cargar la vista del formulario de citas
        $vista = 'appointment';
        $this->plantilla($vista);
    }
    private function plantilla($vista = '') {
        $this->load->view('header');
        $this->load->view($vista);
        $this->load->view('footer');
    }

    public function create()
    {
        // Obtener los datos del formulario
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'telefono' => $this->input->post('telefono'),
            'fecha' => $this->input->post('fecha'),
            'hora' => $this->input->post('hora'),
            'acompanantes' => $this->input->post('acompanantes')
        );

        // Validar los datos del formulario
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('telefono', 'Teléfono', 'required');
        $this->form_validation->set_rules('fecha', 'Fecha', 'required');
        $this->form_validation->set_rules('hora', 'Hora', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // Si hay errores, mostrarlos en la vista del formulario
            $this->load->view('appointment_form');
        }
        else
        {
            // Si no hay errores, guardar la cita en la base de datos
            $this->appointment_model->insert($data);

            // Enviar un correo electrónico al cliente con los datos de la cita
            // $this->email->from('noreply@estetica.com', 'Estética');
            // $this->email->to($data['email']);
            // $this->email->subject('Confirmación de cita');
            // $this->email->message("Estimado/a {$data['nombre']},\n\nGracias por reservar una cita con nosotros. Estos son los datos de su cita:\n\nFecha: {$data['fecha']}\nHora: {$data['hora']}\nAcompañantes: {$data['acompanantes']}\n\nLe esperamos en nuestra estética.\n\nSaludos,\nEstética");
            // $this->email->send();

            // Mostrar un mensaje de éxito en la vista
            $this->load->view('appointment_success', $data);
        }
    }
}
