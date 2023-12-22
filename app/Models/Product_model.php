<?php

namespace Models;

class Product_model extends CI_Model {
    
    // Obtener todos los productos de la base de datos
    public function get_all_products() {
        $query = $this->db->get('productos'); // Asegúrate de que la tabla sea 'productos'
        echo $this->db->last_query(); // Esto imprime la última consulta ejecutada, útil para depurar
        return $query->result();
    }
    
}

