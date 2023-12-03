<?php

// app/Models/Producto.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'PR_PRODUCTO';
    protected $primaryKey = 'COD_PRODUCTO';
    // No necesitas especificar $fillable ya que no estás realizando operaciones típicas de CRUD
}
