<?php

namespace App\Http\Controllers;

use App\Models\Treatements;
use Illuminate\Http\Request;

class TreatementsController extends Controller
{
    public function index()
{
    $treatments = Treatements::all();
    return view('contacts_staff.treat1', ['treatments' => $treatments]);
}
    
    public function create()
    {
        return view('contacts_staff.treat3');
    }
   
    public function store(Request $request)
    {
        $input = $request->all();
        Treatements::create($input);
        return redirect('contact')->with('flash_message', 'Contact Addedd!');  
    }
    
    public function show($id)
    {
        $treatments = Treatements::find($id);
        return view('contacts_staff.treat4')->with('treatments',$treatments);
    }
    
    public function edit($id)
    {
        $treatments = Treatements::find($id);
        return view('contacts_staff.treat5')->with('treatments', $treatments);
    }
  
    public function update(Request $request, $id)
    {
        $treatments = Treatements::find($id);
        $input = $request->all();
        $treatments->update($input);
        return redirect('contact')->with('flash_message', 'Contact Updated!');  
    }
   
    public function destroy($id)
    {
        Treatements::destroy($id);
        return redirect('contact')->with('flash_message', 'Contact deleted!');  
    }
}
