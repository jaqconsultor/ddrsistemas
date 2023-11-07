<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Redireccion extends Component
{
	public $state = [];

	public function mount()
	{
		$this->state['cedula'] = auth()->user()->cedula;
		$this->state['total'] = \Cart::getTotal();
		$this->state['email'] = auth()->user()->email;
		$this->state['title'] = 'Pago de producto(s)';
	}
    public function render()
    {
        return view('livewire.redireccion');
    }
}
