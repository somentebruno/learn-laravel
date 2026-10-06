<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemProjeto extends Component
{
    public string $imagem;

    public int $indice;
    /**
     * Create a new component instance.
     */
    public function __construct(string $imagem, int $indice)
    {
        $this->imagem = $imagem;
        $this->indice = $indice;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.item-projeto');
    }
}
