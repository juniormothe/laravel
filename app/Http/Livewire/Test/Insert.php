<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Presentation;

class Insert extends Component
{
    public $route;
    public $view;
    public $input;

    public function mount($route, $view)
    {
        $this->route = $route;
        $this->view = $view;
        $this->input = $this->input();
    }

    public function render()
    {
        return view('livewire.test.insert');
    }

    public function save()
    {
        $this->validate(['input.name' => ['required']], ['required' => 'obrigatório']);
        $this->validationExists();
        $save = Presentation::create([
            'status' => 1,
            'type' => 1,
            'name' => trim($this->input['name']),
            'name_slug' => Str::slug(trim($this->input['name'])),
            'amount' => 0,
        ]);
        if ($save->id) :
            return redirect()->route($this->route);
        endif;
    }

    private function validationExists()
    {
        $exists = Presentation::where('type', '=', $this->input['type'])
            ->where('name_slug', '=', Str::slug(trim($this->input['name'])))
            ->exists();
        if ($exists) :
            $this->addError('input.name', 'já existe');
            return;
        endif;
    }

    private function input()
    {
        return [
            'status' => 1,
            'type' => 1,
            'name' => (isset($this->input['name'])) ? trim($this->input['name']) : null,
            'name_slug' => (isset($this->input['name'])) ? trim($this->input['name_slug']) : null,
            'amount' => 0,
        ];
    }
}
