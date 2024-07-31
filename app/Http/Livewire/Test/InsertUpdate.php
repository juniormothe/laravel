<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use App\Repositories\Test\Validation;
use App\Repositories\Test\Insert;
use App\Repositories\Test\Update;
use App\Helpers\Helper;

class InsertUpdate extends Component
{
    public $route;
    public $filter;
    public $page;
    public $type;
    public $data;
    public $input;

    public function mount($route, $filter, $page, $type, $data = null)
    {
        $this->route = $route;
        $this->filter = $filter;
        $this->page = $page;
        $this->type = $type;
        $this->data = $data;
        $this->input = Validation::input($this->type, $this->data);
    }

    public function render()
    {
        return view('livewire.test.insert-update');
    }

    public function save()
    {
        $this->validate(Validation::rules($this->type), Validation::message());
        if (Validation::exists($this->type, $this->input)) :
            $this->addError('input.name', 'já existe');
            return;
        endif;
        switch ($this->type) {
            case 1:
                $insert = Insert::save($this->input);
                if ($insert) :
                    return redirect()->route($this->route, ['m' => 'view', 'w' => Helper::hashIdEncode($insert)]);
                endif;
                break;
            case 2:
                $update = Update::save($this->input);
                if ($update) :
                    return redirect()->route($this->route, ['m' => 'view', 'w' => Helper::hashIdEncode($this->input['id']), 'f' => $this->filter, 'page' => $this->page]);
                endif;
                break;
        }
    }
}
