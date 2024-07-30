<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class Home extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('home', [
            'info' => [
                'PHP Version' => phpversion(),
                'Laravel Version' => App::version(),
                'App Environment' => App::environment(),
                'Debug Mode' => Config::get('app.debug') ? 'Enabled' : 'Disabled',
                'Timezone' => Config::get('app.timezone'),
                'Locale' => Config::get('app.locale'),
            ]
        ]);
    }
}
