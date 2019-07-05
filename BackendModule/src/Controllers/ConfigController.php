<?php


namespace BackendModule\Controllers;


use App\Http\Controllers\Controller;
use BackendModule\ControllerInterFace;
use Illuminate\Http\Request;
use ModelManagerModule\Config;

class ConfigController extends Controller implements ControllerInterFace
{
    private $config;
    public function __construct(
        Config $config
    )
    {
        $this->config = $config;
    }

    public function index(Request $request)
    {
        $configs = $this->config->get()->groupBy('config_type');
        return view('backend.config.config', compact('configs'));
    }

    public function create(Request $request)
    {
        // TODO: Implement create() method.
    }

    public function store(Request $request)
    {
        $this->config->fill($request->input())->save();
        return redirect()->back();
    }

    public function edit(Request $request, $model)
    {
        // TODO: Implement edit() method.
    }

    public function update(Request $request, $model)
    {
        // TODO: Implement update() method.
    }

    public function destroy(Request $request, $model)
    {
        // TODO: Implement destroy() method.
    }

    public function show(Request $request, $model)
    {
        dd($model);
        // TODO: Implement show() method.
    }
}