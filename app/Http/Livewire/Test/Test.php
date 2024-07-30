<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;

class Test extends Component
{
    public $route;
    public $view;
    public $module;

    public function mount($route, $view)
    {
        $this->route = $route;
        $this->view = $view;
        $this->module = 'home';
    }

    public function render()
    {
        return view('livewire.test.test');
    }

    
}
