<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\Test\Listing;
use App\Repositories\Test\Data;

class Test extends Component
{
    use WithPagination;

    public $route;
    public $view;
    private $list;
    private $data;
    public $m;
    public $w;
    public $f;

    public function mount($route, $view)
    {
        $this->route = $route;
        $this->view = $view;
        $this->mwf();
    }

    public function render()
    {
        $this->treatDataList();
        return view('livewire.test.test', [
            'list' => $this->list,
            'data' => $this->data,
        ]);
    }

    public function controlModule($module = false, $watch = false)
    {
        $this->m = ($module) ? $module : null;
        $this->w = ($watch) ? $watch : null;
    }

    public function delete()
    {
    }

    private function treatDataList()
    {
        if (in_array($this->m, ['insert', 'home'])) :
            $this->list = Listing::list($this->f);
            $this->data = false;
        elseif (in_array($this->m, ['view', 'edit', 'delete'])) :
            $this->list = false;
            $this->data = Data::object($this->w);
        else :
            $this->list = false;
            $this->data = false;
        endif;
    }

    private function mwf()
    {
        $this->m = request()->input('m') ? request()->input('m') : 'home';
        $this->w = request()->input('w') ? request()->input('w') : null;
        $this->f = request()->input('f') ? request()->input('f') : null;
    }

    protected $queryString = ['m', 'w', 'f', 'page'];
    protected $paginationTheme = 'bootstrap';
}
