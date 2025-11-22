<?php
class Productos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Menu_model");
        $this->load->model("Producto_model"); // corregido
    }

    private function menuData() {
        $dataDB = $this->Menu_model->getCategoriasConProductos();
        $menu = [];

        foreach ($dataDB as $row) {
            $cat = $row->categoria;

            if (!isset($menu[$cat])) {
                $menu[$cat] = [];
            }

            if ($row->producto != null) {
                $menu[$cat][] = [
                    "id" => $row->producto_id,
                    "nombre" => $row->producto
                ];
            }
        }
        return $menu;
    }

    public function index() {
        $data["menu"] = $this->menuData();

        $this->load->view("templates/header", $data);
        $this->load->view("productos");
        $this->load->view("templates/footer");
    }

    public function categoria($slug) {
        $data["menu"] = $this->menuData();

        // 1. Convertir slug a nombre
        $categoria_nombre = strtoupper($slug);

        // 2. Buscar la categoría para obtener el ID
        $categoria = $this->Producto_model->get_categoria_por_nombre($categoria_nombre);

        if (!$categoria) {
            show_404();
        }

        // 3. Obtener productos por ID
        $data['categoria'] = $categoria_nombre;
        
        $data['productos'] = $this->Producto_model->get_productos_por_categoria($categoria->id);

        // 4. Cargar vista
        $this->load->view("templates/header", $data);
        $this->load->view("categorias/plantilla_categoria", $data);
        $this->load->view("templates/footer");
    }

    public function ver($id)
{
    $data["menu"] = $this->menuData();
    $data['producto'] = $this->Producto_model->obtenerPorId($id);
    $this->load->view("templates/header", $data);
    $this->load->view('producto/ver', $data);
    $this->load->view("templates/footer");
}
}
?>
