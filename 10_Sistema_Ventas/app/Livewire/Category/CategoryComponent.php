<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Categoria Test')]
class CategoryComponent extends Component
{
    //propiedades de la clase
    public $totalRegistros = 0;

    //propiedad de modelo
    public $name;

    public function render()
    {
        return view('livewire.category.category-component');
    }

    //metodo mount
    public function mount()
    {
        $this->totalRegistros = Category::count();
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



    }
}
