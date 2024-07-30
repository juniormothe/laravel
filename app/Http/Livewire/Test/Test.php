<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Presentation;
use Illuminate\Support\Str;
use App\Helpers\Helper;

class Test extends Component
{
    use WithPagination;

    public $route;
    public $view;
    public $module;
    public $watch;
    public $filter;
    public $input;
    public $data;
    protected $queryString = ['module', 'watch', 'filter', 'page'];
    protected $paginationTheme = 'bootstrap';

    public function mount($route, $view)
    {
        $this->route = $route;
        $this->view = $view;
        $this->actionModule();
        $this->input = $this->input();
    }

    public function render()
    {
        $this->data = ($this->watch) ? $this->data() : null;
        return view('livewire.test.test', [
            'list' => $this->list(),
            'data' => $this->data,
        ]);
    }

    public function controlModule($module, $watch = null)
    {
        $this->module = $module;
        $this->watch = $watch;
    }

    public function insert()
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
            return redirect()->route($this->route, ['module' => 'view', 'watch' => Helper::hashIdEncode($save->id)]);
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

    private function list()
    {
        $types = Presentation::where('type', '=', '1')->paginate(15);
        return $types;
    }

    private function data()
    {
        return Presentation::find(Helper::hashIdDecode($this->watch));
    }

    private function actionModule()
    {
        $this->module = request()->input('module') ? request()->input('module') : "home";
        $this->watch = request()->input('watch') ? request()->input('watch') : null;
        $this->filter = request()->input('filter') ? request()->input('filter') : null;
    }

    private function input()
    {
        return [
            'status' => 1,
            'type' => 1,
            'name' => null,
            'name_slug' => null,
            'amount' => 0,
        ];
    }
}
