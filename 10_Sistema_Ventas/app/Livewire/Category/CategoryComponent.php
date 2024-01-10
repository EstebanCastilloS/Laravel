<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Categoria Test')]
class CategoryComponent extends Component
{
    public $totalRegistros = 0;

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
        dump('crear Categoría');
    }
}
