<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\icon;

class iconController extends Controller
{
    public function icon(Request $request)
    {
        // $imagePath = null;
        // if ($request->hasFile('image') && $request->file('image_1')->isValid()) {
            
            $imagePath = $request->file('image_1')->store('uploads', 'public');
        

        
        $items = new icon();
        $items->f_name = $request->f_name;
        $items->price = $request->price;
        $items->description = $request->description;
        $items->image_1 = $imagePath; 
        $items->save();

        return redirect('crud')->with('success', 'User registered successfully!');
    }

    public function icon2()
    {
        $studentdata = icon::all();
        // dd($studentdata);
        return view('crud', ['students' => $studentdata]);
    }

    function delete($id)
    {
        $isdeleted = icon::destroy(($id));
        if ($isdeleted) {
            return redirect('crud');
        } else {
            return 'no deleted record';
        }
    }
    public function edit($id)
    {
        $student = icon::find($id);
        if ($student) {
            return response()->json(['data' => $student]);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }
    

    public function editstudent(Request $request, $id)
    {
        
    $student = icon::find($id);
    if ($student) {
        $student->f_name = $request->f_name;
        $student->price = $request->price;
        $student->description = $request->description;

        if ($request->hasFile('image_1')) {
            
            if ($student->image_1 && file_exists(storage_path('app/public/' . $student->image_1))) {
                unlink(storage_path('app/public/' . $student->image_1));
            }

            
            $path = $request->file('image_1')->store('images', 'public');
            $student->image_1 = $path;
        }

        
        if ($student->save()) {
            return response()->json(['success' => true, 'message' => 'Student updated successfully']);
        }
    }

    
    return response()->json(['success' => false, 'message' => 'Failed to update student']);
    }
    
    
}
