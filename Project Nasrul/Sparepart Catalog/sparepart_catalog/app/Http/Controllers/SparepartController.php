<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sparepart;
use App\machine;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Datatables;

class SparepartController extends Controller
{
  public function index(){
      $spareparts = Sparepart::all()->toArray();
      return view('spareparts.index', compact('spareparts'));
  }

  public function create(){
      $machines = Machine::all()->toArray();
      return view('spareparts.create', compact('machines'));
  }

  public function edit($id)
  {
      $sparepart = Sparepart::find($id);
      $machines = Machine::all()->toArray();
      return view('spareparts.edit',compact('sparepart','id','machines'));
  }

  public function store(Request $request)
  {
      if(Input::hasFile('image')){
        $image = Input::file('image');
        $i['name'] = time().'.'.$request->image->getClientOriginalExtension();
        $image->move('uploads', $i['name']);
        $sparepart = $this->validate(request(), [
          'oracle_number' => 'required',
          'name' => 'required',
          'min_stock' => 'required',
          'unit' => 'required',
          'price' => 'required',
          'machine_id' => 'required'
        ]);
        $sparepart['image'] = $i['name'];
        Sparepart::create($sparepart);
      }
      return redirect('spareparts')->with('success', 'Sparepart has been added');;
  }

  public function update(Request $request, $id)
  {
      if(Input::hasFile('image')){
        $sparepartA = Sparepart::where('id',$id)->get();
        foreach ($sparepartA as $s) {
          unlink('uploads/'. $s['image']);
        }

        $image = Input::file('image');
        $i['name'] = time().'.'.$request->image->getClientOriginalExtension();
        $image->move('uploads', $i['name']);

        $sparepart = Sparepart::find($id);
        $sparepart->oracle_number = $request->get('oracle_number');
        $sparepart->name = $request->get('name');
        $sparepart->min_stock = $request->get('min_stock');
        $sparepart->unit = $request->get('unit');
        $sparepart->price = $request->get('price');
        $sparepart->image = $i['name'];
        $sparepart->machine_id = $request->get('machine_id');
        $sparepart->save();
      }else{
        $sparepart = Sparepart::find($id);
        $sparepart->oracle_number = $request->get('oracle_number');
        $sparepart->name = $request->get('name');
        $sparepart->min_stock = $request->get('min_stock');
        $sparepart->unit = $request->get('unit');
        $sparepart->price = $request->get('price');
        $sparepart->machine_id = $request->get('machine_id');
        $sparepart->save();
      }
      return redirect('spareparts')->with('success','Sparepart has been updated');
  }
  public function destroy($id)
  {
      $sparepart = Sparepart::where('id',$id)->get();
      foreach ($sparepart as $s) {
        if(unlink('uploads/'. $s['image'])){
          Sparepart::find($id)->delete();
        }
      }
      return redirect('spareparts')->with('success','Sparepart has been deleted.');
  }
}
