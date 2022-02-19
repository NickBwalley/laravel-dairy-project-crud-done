<?php

namespace App\Http\Controllers;

use App\Models\Cow; 
use Illuminate\Http\Request;

class CowController extends Controller
{
    public function all(){
        //get all the cows data. 
        $cows = Cow::all();
        // dd($cows); // dump the execution of the data and stop execution. 
        //show the view. 
        // passing the data to the view. 
        return view('cows.all', [
            'cow' => $cows
        ]);
    }

    public function add(){
        return view('cows.add');
    }

    public function edit($id){

        $data = Cow::find($id);
        return view('cows.edit', ['data'=>$data]);
    } 

    public function update(Request $request){
        $data = Cow::find($request->id);
        $data->name = $request->name;
        $data->birth_date = $request->birth_date;
        $data->gender = $request->gender;
        $data->breed = $request->breed;
        $data->save();
        
        return redirect('cows');
    }

    public function save(Request $request){

        $validated = $request->validate([
            'cow_name' => 'required|alpha',
            'birth_date' => 'required|date',
            'gender' => 'required',
            'breed' => 'required', 
        ]);

        //Input are ok
        //oop manenoz
        //an object of type cow.
        $cow = new Cow();

        $cow->name = $request->get('cow_name');
        $cow->birth_date = $request->get('birth_date');
        $cow->gender = $request->get('gender');
        $cow->breed = $request->get('breed');
        $cow->save();

        return redirect('cows');

        // dd('here');
    }

    public function delete($id){
        Cow::find($id)->delete();
        return redirect('cows');
    }
}
