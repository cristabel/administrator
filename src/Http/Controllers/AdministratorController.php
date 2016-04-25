<?php namespace Cristabel\Administrator\Http\Controllers;

use App\Http\Controllers\Controller;

use Datagrid;

class AdministratorController extends Controller {

	public function getIndex()
	{
		return view('administrator::index');
	}
    
    public function test()
    {
        
        $datagrid = Datagrid::make('App\Models\Employee', [
            'id',
            'name',
            'address'
        ]);

        dd($datagrid);
    }

}
