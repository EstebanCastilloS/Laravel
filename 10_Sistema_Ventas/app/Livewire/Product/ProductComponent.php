<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Productos')]
class ProductComponent extends Component
{

    //propiedades de la clase
    public $totalRegistros = 0;

    //busqueda
    public $search = '';

    //paginacion
    public $cant = 5;

    //propiedad de modelo
    public $name;
    public $id;

    public function render()
    {
        $this->totalRegistros = Product::count();

        $products = Product::where('name','like','%'.$this->search.'%')
            ->orderBy('id','desc')->paginate($this->cant);

        return view('livewire.product.product-component', compact('products'));
    }
}
