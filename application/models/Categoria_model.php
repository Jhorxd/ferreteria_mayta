<?php
class Categoria_model extends CI_Model {

        public function __construct() {
        parent::__construct();
        $this->load->database(); // <- ESTO ES OBLIGATORIO
    }

    public function getCategorias() {
        return $this->db->get("categorias")->result();
    }

    public function insertarCategoria($nombre) 
    {
        // Generar slug desde el nombre
        $slug = $this->crearSlug($nombre);

        $data = [
            "nombre" => $nombre,
            "slug"   => $slug
        ];

        $this->db->insert("categorias", $data);
    }


    public function getCategoria($id) {
        return $this->db->where("id", $id)->get("categorias")->row();
    }

    public function actualizarCategoria($id, $nombre)
    {
        // Generar el slug según el nuevo nombre
        $slug = $this->crearSlug($nombre);

        $data = [
            "nombre" => $nombre,
            "slug"   => $slug
        ];

        $this->db->where("id", $id)->update("categorias", $data);
    }


    public function eliminarCategoria($id) {
        $this->db->where("id", $id)->delete("categorias");
    }

    private function crearSlug($texto)
{
    // Convertir a minúsculas
    $slug = mb_strtolower($texto, 'UTF-8');

    // Reemplazar caracteres acentuados
    $slug = str_replace(
        ['á','é','í','ó','ú','ñ'],
        ['a','e','i','o','u','n'],
        $slug
    );

    // Reemplazar espacios por guiones
    $slug = preg_replace('/\s+/', '-', $slug);

    // Quitar cualquier cosa que NO sea letras, números o guiones
    $slug = preg_replace('/[^a-z0-9\-]/', '', $slug);

    return $slug;
}


}
?>
