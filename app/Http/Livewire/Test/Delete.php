<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use App\Models\Presentation;

class Delete extends Component
{
    public $route;
    public $filter;
    public $data;

    public function mount($route, $filter, $data)
    {
        $this->route = $route;
        $this->filter = $filter;
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.test.delete');
    }

    public function save()
    {
        $save = Presentation::find((isset($this->data->id)) ? $this->data->id : 0)->delete();
        if ($save) :
            return redirect()->route($this->route, ['m' => 'home', 'f' => $this->filter, 'page' => 1]);
        endif;
    }
}
