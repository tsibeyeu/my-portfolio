<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PackageSession;
class PackageSessionController extends Controller
{
    function index()   {
        $packageSessions=PackageSession::all();
        return view('packageSession.index',compact('packageSessions'));
     }
    
     function create() {
        $packageSessions=PackageSession::all();
        return view('packageSession.create',compact('packageSessions'));
     }
    
     function store(Request $request) {
         $packageSession=new PackageSession();
         $packageSession->name=$request->name;
         $packageSession->description=$request->description;
         $packageSession->save();
         return redirect()->route('packagesession.index')->with(['success'=> 'Package Session created successfully.']);

     }
    
     function edit(Request $request) {
        $packageSession_id=$request->input('packageSession_id');
        $packageSession=PackageSession::find($packageSession_id);
        return view('packageSession.edit',compact('packageSession'));
     }
    
     function update(Request $request) {
        $packageSession=PackageSession::find($request->input('packageSession_id'));
        $packageSession->name=$request->name;
        $packageSession->description=$request->description;
        $packageSession->save();
        return redirect()->route('packagesession.index')->with(['success'=> 'Package Session updated successfully.']);

     } 
    
     function destroy(Request $request) {
        $packageSession=PackageSession::find($request->input('packageSession_id'));
        $packageSession->delete();
        return redirect()->route('packagesession.index')->with(['success'=> 'Package Session deleted successfully.']);
     }
}
