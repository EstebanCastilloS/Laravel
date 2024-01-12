<?php

namespace App\Livewire\Category;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Ver Categoria')]
class CategoryShow extends Component
{
    public function render()
    {
        return view('livewire.category.category-show');
    }
}
