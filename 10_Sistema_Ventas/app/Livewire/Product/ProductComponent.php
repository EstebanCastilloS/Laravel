<?php

namespace App\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

#[Title('Productos')]
class ProductComponent extends Component
{

    //usar paginacion
    use WithPagination;
    //usar file uploads
    use WithFileUploads;

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
    public $stock=0;
    public $minimum_stock=10;
    public $expiration_date;
    public $active=1;
    public $image;

    public function render()
    {
        $this->totalRegistros = Product::count();

        $products = Product::where('name','like','%'.$this->search.'%')
            ->orderBy('id','desc')->paginate($this->cant);

        return view('livewire.product.product-component', compact('products'));
    }

    #[Computed()]
    public function categories(){
        return Category::all();
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

        $product = new Product();
        $product->name = $this->name;
        $product->description = $this->description;
        $product->purchase_price = $this->purchase_price;
        $product->sales_price = $this->sales_price;
        $product->code_bars = $this->code_bars;
        $product->stock = $this->stock;
        $product->minimum_stock = $this->minimum_stock;
        $product->expiration_date = $this->expiration_date;
        $product->category_id = $this->category_id;
        $product->active = $this->active;
        // $product->image = $customName;
        $product->save();

        if($this->image){
            //guardar imagen en storage y obtener el nombre de la imagen para guardar en la bd
            $customName = 'products/'.uniqid().'_.'.$this->image->extension();
            //guardar imagen en storage y obtener el nombre de la imagen para guardar en la bd
            $this->image->storeAs('public',$customName);
            $product->image()->create(['url' => $customName]);
        }

        $this->dispatch('close-modal','modalProduct');
        $this->dispatch('msg','Producto creada correctamente.');

        $this->clean();
    }

    //metodo de limpiar campos
    public function clean(){
        $this->reset(['name','description','purchase_price','sales_price','code_bars','stock','minimum_stock','expiration_date','category_id','active','image']);
    }

}
