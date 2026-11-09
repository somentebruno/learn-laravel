<?php

use Livewire\Component;

new class extends Component
{
    public $contador = 0;

    public function incrementar()
    {
        $this->contador++;
    }

    public function decrementar()
    {
        $this->contador--;
    }
};
?>

<div>
    meu valor atual é: {{ $contador}}.
    <button type="button" wire:click="incrementar">Incrementar</button>
    <button type="button" wire:click="decrementar">Decrementar</button>
</div>
