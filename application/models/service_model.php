<?php
class Service_model extends CI_Model {

    // Este es el constructor de la clase
    public function __construct()
    {
        // Llama al constructor de la clase padre
        parent::__construct();
        // Carga la librería database
        $this->load->database();
    }

    // Esta función devuelve todos los servicios de la base de datos
    public function get_all_services()
    {
        // Ejecuta una consulta para obtener todos los servicios
        $query = $this->db->get('services');
        // Devuelve el resultado como un array
        return $query->result_array();
    }

    // Esta función devuelve un servicio por su id
    public function get_service_by_id($id)
    {
        // Ejecuta una consulta para obtener el servicio con el id dado
        $this->db->join('categoryServices', 'categoryServices.categoryServiceId = services.categoryServiceId', 'left');
        $query = $this->db->get_where('services', array('services.categoryServiceId' => $id));
        // Devuelve el resultado como una fila única
        return $query->result_array();
    }

    // Esta función inserta un nuevo servicio en la base de datos
    public function insert_service()
    {
        // Crea un array con los datos del servicio
        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price')
        );
        // Inserta el array en la tabla services
        return $this->db->insert('services', $data);
    }

    // Esta función actualiza un servicio existente en la base de datos
    public function update_service()
    {
        // Crea un array con los datos del servicio
        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price')
        );
        // Actualiza el array en la tabla services donde el id coincida con el id dado
        return $this->db->update('services', $data, array('id' => $this->input->post('id')));
    }
}
