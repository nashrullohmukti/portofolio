<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\machine;
use App\placement;
use Excel;
use DB;
use Illuminate\Support\Facades\Input;

class MachineController extends Controller
{
  public function index(){
    $machines = Machine::all()->toArray();
    return view('machines.index', compact('machines'));
  }

  public function create(){
    $workcenters = Placement::all()->toArray();
    return view('machines.create', compact('workcenters'));
  }

  public function edit($id)
  {
    $machine = Machine::find($id);
    $workcenters = Placement::all()->toArray();
    return view('machines.edit',compact('machine','id', 'workcenters'));
  }



  public function store(Request $request)
  {
      $machine = $this->validate(request(), [
        'name' => 'required',
        'placement_id' => 'required'
      ]);

      Machine::create($machine);

      return redirect('machines')->with('success', 'Product has been added');
  }


  public function update(Request $request, $id)
  {
      $machine = Machine::find($id);
      $this->validate(request(), [
        'name' => 'required',
        'placement_id' => 'required|numeric'
      ]);
      $machine->name = $request->get('name');
      $machine->placement_id = $request->get('placement_id');
      $machine->save();
      return redirect('machines')->with('success','Machines has been updated');
  }

  public function destroy($id)
  {
      $machine = Machine::find($id);
      $machine->delete();
      return redirect('machines')->with('success','Machine has been  deleted');
  }

  public function downloadMachines($type)
  {
    $data = Machine::get()->toArray();
    return Excel::create('Sparepart_Catalog-' . time(), function($excel) use ($data) {
      $excel->sheet('Machine', function($sheet) use ($data)
          {
            $sheet->fromArray($data);
          });
    })->download($type);
  }

  public function importExcel()
  {
    if(Input::hasFile('import_file')){
      $path = Input::file('import_file')->getRealPath();
      $data = Excel::load($path, function($reader) {
      })->get();
      if(!empty($data) && $data->count()){
        foreach ($data as $key => $value) {
          $insert[] = ['name' => $value->name, 'placement_id' => $value->placement_id];
        }
        if(!empty($insert)){
          DB::table('machines')->insert($insert);
        }
      }
    }
    return redirect('machines')->with('success','Machines Data has been Imported');
  }

}
