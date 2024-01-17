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
    public $id=0;
    public $category_id;
    public $description;
    public $purchase_price;
    public $sales_price;
    public $code_bars;
    public $stock=10;
    public $minimum_stock;
    public $expiration_date;
    public $active=1;
    public $image;

    public function render()
    {
        $this->dispatch('open-modal','modalProduct');
        $this->totalRegistros = Product::count();

        $products = Product::where('name','like','%'.$this->search.'%')
            ->orderBy('id','desc')->paginate($this->cant);

        return view('livewire.product.product-component', compact('products'));
    }

    public function create()
    {
        //para boton guardar
        $this->id = 0;

        //limpiar campos
        $this->reset(['name']);

        //lispiar errores de validacion
        $this->resetErrorBag();

        //abrir modal
        $this->dispatch('open-modal','modalProduct');
    }

    public function store(){
        //dump('Crear producto');

        $rules = [
            'name' => 'required|unique:products,name,'.$this->id,
            'description' => 'max:255',
            'purchase_price' => 'numeric|nullable',
            'sales_price' => 'required|numeric',
            'stock' => 'required|numeric',
            'minimum_stock' => 'numeric|nullable',
            'image' => 'image|max:1024|nullable',
            'category_id' => 'required|numeric',
            'code_bars' => 'required',
            'expiration_date' => 'required',
            'active' => 'required',

        ];


        $this->validate($rules);

        // $category = new Category();
        // $category->name = $this->name;
        // $category->save();

        // $this->dispatch('close-modal','modalCategory');
        // $this->dispatch('msg','Categoria creada correctamente.');

        // $this->reset(['name']);
    }
}
