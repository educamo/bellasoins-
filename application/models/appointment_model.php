<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Cargar la base de datos
        $this->load->database();
    }

    // Insertar una cita en la tabla citas
    public function insert($data)
    {
        $this->db->insert('citas', $data);
    }

    // Obtener las citas de un día específico
    public function get_by_date($date)
    {
        $this->db->where('fecha', $date);
        $query = $this->db->get('citas');
        return $query->result_array();
    }

    // Obtener las citas de un cliente específico
    public function get_by_client($client)
    {
        $this->db->where('nombre', $client);
        $query = $this->db->get('citas');
        return $query->result_array();
    }

    // Actualizar una cita en la tabla citas
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('citas', $data);
    }

    // Eliminar una cita de la tabla citas
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('citas');
    }
}
