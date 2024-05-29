<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingPackage;

class TrainingPackageController extends Controller
{

 function index()   {
    $trainingPackages=TrainingPackage::all();
    return view('training-package.index',compact('trainingPackages'));
 }

 function create() {
    return view('training-package.create');
 }

 function store(Request $request) {
    $trainingPackage=new TrainingPackage();
    $trainingPackage->name=$request->name;
    $trainingPackage->description=$request->description;
    $trainingPackage->price=$request->price;
    $trainingPackage->save();
    return redirect()->route('trainingpackage.index')->with(['success'=> 'Training Package created successfully.']);
 }

 function edit(Request $request) {
    $trainingPackage_id=$request->input('trainingpackage_id');
    $trainingPackage=TrainingPackage::find($trainingPackage_id);
    return view('training-package.edit',compact('trainingPackage'));
 }

 function update(Request $request) {
    $traiingpackage=TrainingPackage::find($request->input('trainingpackage_id'));
    $trainingPackages=TrainingPackage::all();
    $traiingpackage->name=$request->name;
    $traiingpackage->description=$request->description;
    $traiingpackage->price=$request->price;
    $traiingpackage->save();
    return redirect()->route('trainingpackage.index')->with(['success'=> 'Training Package updated successfully.']);

 } 

 function destroy(Request $request) {
    $traiingpackage=TrainingPackage::find($request->input('trainingpackage_id'));
    $traiingpackage->delete();
    $trainingPackages=TrainingPackage::all();
    return redirect()->route('trainingpackage.index')->with(['success'=> 'Training Package deleted successfully.']);


 }
}
