<?php

namespace App\Controllers;

class Carrito extends BaseController
{
    public function index()
    {
        // Cargar la librería del carrito
        $this->load->library('cart');

        // Obtener los datos del carrito de compras
        $cart_contents = $this->cart->contents();
        
        // Crear el array $data con los datos que se pasarán a la vista
        $data = array();
        $data['cart_contents'] = $cart_contents; // Aquí se incluye la variable $cart_contents
        
        // Cargar la vista index.php con el array $data
        return view('index', $data);
    }
    
    public function agregar_al_carrito($producto_id, $producto_nombre, $producto_precio)
    {
        // Configura los datos del producto para agregar al carrito
        $datos_producto = array(
            'id'    => $producto_id,
            'qty'   => 1,
            'price' => $producto_precio,
            'name'  => $producto_nombre,
        );
    
        // Agrega el producto al carrito
        $this->cart->insert($datos_producto);
    
        // Redirecciona o muestra la vista deseada después de agregar al carrito
        return redirect()->to('carrito/mostrar_carrito');
    }
    public function agregar_producto_prueba_al_carrito()
    {
        $producto_id =5 ; // Cambia esto según el ID de un producto real en tu base de datos
        $producto_nombre = 'Producto de Prueba';
        $producto_precio = 40; // Cambia esto según el precio del producto
    
        // Agrega el producto al carrito
        $this->cart->insert(array(
            'id'    => $producto_id,
            'qty'   => 1,
            'price' => $producto_precio,
            'name'  => $producto_nombre,
        ));
    
        // Redirecciona o muestra la vista deseada después de agregar al carrito
        return redirect()->to('carrito/mostrar_carrito');
    }
    
    public function mostrar_productos()
    {
        // Obtén los productos desde la base de datos
        $data['products'] = $this->Product_model->get_all_products();
    
        // Carga la vista que muestra los productos
        return view('mostrar_productos', $data);
    }
    
}
