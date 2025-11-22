<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {

    public function get_productos_por_categoria($categoria_id) {
        return $this->db
            ->select('id, nombre, precio')
            ->from('productos')
            ->where('categoria_id', $categoria_id)
            ->get()
            ->result();
    }

    public function get_categoria_por_nombre($nombre)
    {
        return $this->db
            ->where('nombre', $nombre)
            ->get('categorias')
            ->row();
    }

        public function obtenerPorId($id)
    {
        $this->db->select('p.*, c.nombre AS categoria_nombre');
        $this->db->from('productos p');
        $this->db->join('categorias c', 'c.id = p.categoria_id', 'left');
        $this->db->where('p.id', $id);

        $query = $this->db->get();
        return $query->row(); // devuelve SOLO una fila
    }
}
