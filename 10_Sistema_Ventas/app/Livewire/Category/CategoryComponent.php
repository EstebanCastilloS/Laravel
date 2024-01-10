<?php

namespace App\Livewire\Category;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Categoria Test')]
class CategoryComponent extends Component
{
    public function render()
    {
        return view('livewire.category.category-component');
    }
}