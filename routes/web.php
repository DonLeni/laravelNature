<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\TelefonoController;
use App\Http\Controllers\MetodoPagoController;
use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\ClienteController;
use Illuminate\Database\Eloquent\Model;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// routes/web.php

Route::get('/', function () {
    return view('Dash.index');
});


//ruta de selecciona productos
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
// llamdo de producto con parametro
Route::get('/DetalleProductos/{cod_producto}', [ProductoController::class, 'ShowProducto']);
//Formulario para crear producto
Route::get('/crearForm', [ProductoController::class, 'CreateProducto']);
//Insertar Productos
Route::post('/guardar-producto', [ProductoController::class, 'guardarProducto'])->name('guardar.producto');
//Actualizar producto
// Mostrar formulario de actualización
Route::get('/UpdateForm/{cod_producto}', [ProductoController::class, 'UpdateForm'])->name('producto.update.form');
// Procesar la actualización del producto
Route::put('/producto/{cod_producto}', [ProductoController::class, 'updateProducto'])->name('producto.update');
// Procesar Eliminar  producto
Route::delete('/EliminarProducto/{cod_producto}', [ProductoController::class, 'eliminarProducto'])->name('eliminar.producto'); 


//RUTAS DE MARCA
//ruta de seleccionar Marcas
Route::get('/marcas', [MarcaController::class, 'index'])->name('marcas.index');
//Formulario para crear Marca
Route::get('/crearFormM', [MarcaController::class, 'CreateMarca']);
//Insertar marca
Route::post('/guardar-marca', [MarcaController::class, 'guardarMarca'])->name('guardar.marca');
//Actualizar Marca
// Mostrar formulario de actualización
Route::get('/UpdateFormM/{cod_marca}', [MarcaController::class, 'UpdateForm'])->name('marca.update.form');
// Procesar la actualización de la Marca
Route::put('/marca/{cod_marca}', [MarcaController::class, 'updateMarca'])->name('marca.update');
// Procesar Eliminar    Marca
Route::delete('/EliminarMarca/{cod_marca}', [MarcaController::class, 'eliminarMarca'])->name('eliminar.marca'); 

//RUTAS CATEGORIA
//ruta de seleccionar Categoria
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categoria.index');
//Formulario para crear Categoria
Route::get('/crearFormC', [CategoriaController::class, 'CreateCategoria']);
//Insertar Categoria
Route::post('/guardar-categoria', [CategoriaController::class, 'guardarCategoria'])->name('guardar.categoria');
//Actualizar Categoria
// Mostrar formulario de actualización
Route::get('/UpdateFormC/{cod_categoria}', [CategoriaController::class, 'UpdateForm'])->name('categoria.update.form');
// Procesar la actualización de la Categoria
Route::put('/categoria/{cod_categoria}', [CategoriaController::class, 'updateCategoria'])->name('categoria.update');
// Procesar Eliminar  categoria
Route::delete('/EliminarCategoria/{cod_categoria}', [CategoriaController::class, 'eliminarCategoria'])->name('eliminar.categoria'); 


//RUTAS UNIDAD
//ruta de seleccionar unidades
Route::get('/unidades', [UnidadController::class, 'index'])->name('unidad.index');
//Formulario para crear unidades
Route::get('/crearFormU', [UnidadController::class, 'CreateUnidad']);
//Insertar Unidad
Route::post('/guardar-Unidad', [UnidadController::class, 'guardarUnidad'])->name('guardar.unidad');
//Actualizar Unidad
// Mostrar formulario de actualización
Route::get('/UpdateFormU/{cod_unidad}', [UnidadController::class, 'UpdateForm'])->name('unidad.update.form');
// Procesar la actualización de la unidad
Route::put('/unidad/{cod_unidad}', [UnidadController::class, 'updateUnidad'])->name('unidad.update');
// Procesar Eliminar  unidad
Route::delete('/EliminarUnidad/{cod_unidad}', [UnidadController::class, 'eliminarUnidad'])->name('eliminar.unidad'); 

//RUTAS VENTA
//ruta de seleccionar Venta
Route::get('/ventas', [VentaController::class, 'index'])->name('venta.index');
//Formulario para crear Venta
Route::get('/crearFormVe', [VentaController::class, 'CreateVenta']);
//Insertar Venta
Route::post('/guardar-Venta', [VentaController::class, 'guardarVenta'])->name('guardar.venta');
//Actualizar VENTA
// Mostrar formulario de actualización
Route::get('/UpdateFormVe/{cod_venta}', [VentaController::class, 'UpdateForm'])->name('venta.update.form');
// Procesar la actualización de la Venta
Route::put('/venta/{cod_venta}', [VentaController::class, 'updateVenta'])->name('venta.update');
// Procesar Eliminar  Venta
Route::delete('/EliminarVenta/{cod_venta}', [VentaController::class, 'eliminarVenta'])->name('eliminar.venta'); 

// RUTAS VENDEDOR ***************************************************

// Ruta de seleccionar vendedores
Route::get('/vendedor', [VendedorController::class, 'index'])->name('vendedor.index');

// Formulario para crear vendedores
Route::get('/crearFormVen', [VendedorController::class, 'CreateVendedor']);

// Insertar Vendedor
Route::post('/guardar-Vendedor', [VendedorController::class, 'guardarVendedor'])->name('guardar.vendedor');

// Actualizar Vendedor
// Mostrar formulario de actualización
Route::get('/UpdateFormVen/{cod_vendedor}', [VendedorController::class, 'UpdateForm'])->name('vendedor.update.form');

// Procesar la actualización del vendedor
Route::put('/vendedor/{cod_vendedor}', [VendedorController::class, 'updateVendedor'])->name('vendedor.update');

// Procesar Eliminar vendedor
Route::delete('/EliminarVendedor/{cod_vendedor}', [VendedorController::class, 'eliminarVendedor'])->name('eliminar.vendedor');


// RUTAS TELEFONO
// Ruta para seleccionar telefonos
Route::get('/telefonos', [TelefonoController::class, 'index'])->name('telefono.index');

// Formulario para crear telefonos
Route::get('/crearFormTel', [TelefonoController::class, 'CreateTelefono']);

// Insertar Telefono
Route::post('/guardar-Telefono', [TelefonoController::class, 'guardarTelefono'])->name('guardar.telefono');

// Actualizar Telefono
// Mostrar formulario de actualización
Route::get('/UpdateFormTel/{cod_telefono}', [TelefonoController::class, 'UpdateForm'])->name('telefono.update.form');

// Procesar la actualización del telefono
Route::put('/telefono/{cod_telefono}', [TelefonoController::class, 'updateTelefono'])->name('telefono.update');

// Procesar Eliminar Telefono
Route::delete('/EliminarTelefono/{cod_telefono}', [TelefonoController::class, 'eliminarTelefono'])->name('eliminar.telefono');


// RUTAS METODO DE PAGO
// Ruta para seleccionar metodos de pago
Route::get('/metodoPagos', [MetodoPagoController::class, 'index'])->name('metodoPago.index');

// Formulario para crear metodos de pago
Route::get('/crearFormMP', [MetodoPagoController::class, 'CreateMetodoPago']);

// Insertar Metodo de Pago
Route::post('/guardar-MetodoPago', [MetodoPagoController::class, 'guardarMetodoPago'])->name('guardar.metodoPago');

// Actualizar Metodo de Pago
// Mostrar formulario de actualización
Route::get('/UpdateFormMP/{cod_met_pago}', [MetodoPagoController::class, 'UpdateForm'])->name('metodopago.update.form');

// Procesar la actualización del metodo de pago
Route::put('/metodopago/{cod_met_pago}', [MetodoPagoController::class, 'updateMetodoPago'])->name('metodopago.update');

// Procesar Eliminar Metodo de Pago
Route::delete('/EliminarMetodoPago/{cod_met_pago}', [MetodoPagoController::class, 'eliminarMetodoPago'])->name('eliminar.metodopago');


// RUTAS DETALLE DE VENTA

// Ruta para seleccionar detalles de venta
Route::get('/detalleVentas', [DetalleVentaController::class, 'index'])->name('detalleventa.index');

// Formulario para crear detalles de venta
Route::get('/crearFormDV', [DetalleVentaController::class, 'CreateDetalleVenta']);

// Insertar Detalle de Venta
Route::post('/guardar-DetalleVenta', [DetalleVentaController::class, 'guardarDetalleVenta'])->name('guardar.detalleventa');

// Actualizar Detalle de Venta
// Mostrar formulario de actualización
Route::get('/UpdateFormDV/{cod_det_venta}', [DetalleVentaController::class, 'UpdateForm'])->name('detalleventa.update.form');

// Procesar la actualización del detalle de venta
Route::put('/detalleventa/{cod_det_venta}', [DetalleVentaController::class, 'updateDetalleVenta'])->name('detalleventa.update');

// Procesar Eliminar Detalle de Venta
Route::delete('/EliminarDetalleVenta/{cod_det_venta}', [DetalleVentaController::class, 'eliminarDetalleVenta'])->name('eliminar.detalleventa');


// RUTAS CLIENTE
// Ruta para seleccionar clientes
Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.index');

// Formulario para crear clientes
Route::get('/crearFormCli', [ClienteController::class, 'CreateCliente']);

// Insertar Cliente
Route::post('/guardar-Cliente', [ClienteController::class, 'guardarCliente'])->name('guardar.cliente');

// Actualizar Cliente
// Mostrar formulario de actualización
Route::get('/UpdateFormCli/{cod_cliente}', [ClienteController::class, 'UpdateForm'])->name('cliente.update.form');

// Procesar la actualización del cliente
Route::put('/cliente/{cod_cliente}', [ClienteController::class, 'updateCliente'])->name('cliente.update');

// Procesar Eliminar Cliente
Route::delete('/EliminarCliente/{cod_cliente}', [ClienteController::class, 'eliminarCliente'])->name('eliminar.cliente');

