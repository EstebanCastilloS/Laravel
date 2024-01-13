<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;


#[Title('Categoria Test')]
class CategoryComponent extends Component
{

    //usar paginacion
    use WithPagination;

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
        if($this->search != ''){
            $this->resetPage();
        }
        $this->totalRegistros = Category::count();
        $categories = Category::where('name','like','%'.$this->search.'%')
            ->orderBy('id','desc')->paginate($this->cant);
        //$categories = collect();
        return view('livewire.category.category-component', compact('categories'));
    }

    //metodo mount
    public function mount()
    {

    }

    public function create()
    {
        //limpiar campos
        $this->reset(['name']);

        //lispiar errores de validacion
        $this->resetErrorBag();

        //abrir modal
        $this->dispatch('open-modal','modalCategory');
    }

    public function store()
    {
        // dump('crear Categoría');
        $rules = [
            'name' => 'required|min:5|max:255|unique:categories,name'
        ];
        $messages = [
            'name.required' => 'El nombre de la categoría es requerido',
            'name.min' => 'El nombre de la categoría debe tener al menos 5 caracteres',
            'name.max' => 'El nombre de la categoría debe tener máximo 255 caracteres',
            'name.unique' => 'El nombre de la categoría ya existe'
        ];

        $this->validate($rules, $messages);

        // $category = Category::create([
        //     'name' => $this->name
        // ]);
        $category = new Category();
        $category->name = $this->name;
        $category->save();

        $this->dispatch('close-modal','modalCategory');
        $this->dispatch('msg','Categoría creada exitosamente');

        $this->reset(['name']);

    }

    public function edit(Category $category)
    {

        //dump($category);
        $this->id = $category->id;
        $this->name = $category->name;
        $this->dispatch('open-modal','modalCategory');
    }

    public function update(Category $category)
    {
        //dump($category);
        $rules = [
            'name' => 'required|min:5|max:255|unique:categories,name,' .$this->id
        ];
        $messages = [
            'name.required' => 'El nombre de la categoría es requerido',
            'name.min' => 'El nombre de la categoría debe tener al menos 5 caracteres',
            'name.max' => 'El nombre de la categoría debe tener máximo 255 caracteres',
            'name.unique' => 'El nombre de la categoría ya existe'
        ];

        $this->validate($rules, $messages);

        // $category = Category::find($this->id);
        $category->name = $this->name;
        $category->update();

        $this->dispatch('close-modal','modalCategory');
        $this->dispatch('msg','Categoría actualizada exitosamente');

        $this->reset(['name']);

    }

    #[On('destroyCategory')]
    public function destroy($id)
    {
        //dump($id);
        $category = Category::find($id);
        $category->delete();
        $this->dispatch('msg','Categoría eliminada exitosamente');
    }

    // public function destroy(Category $category)
    // {
    //     //dump($category);
    //     $category->delete();
    //     $this->dispatch('msg','Categoría eliminada exitosamente');
    // }

}
