<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complex;
use App\Models\Building;
use App\Models\Room;
use App\Models\Student;

use Illuminate\Support\Facades\Auth;


class StudentController extends Controller
{


    //show
    public function show( Complex $complex, Building $building ,Room $room , Student $student ){
        if (Auth::user()->id != $complex->user_id) {
            abort(403);
        }

        if ($building->complex_id != $complex->id) {
            abort(404);
        }

        if ($room->building_id != $building->id) {
            abort(404);
        }

        return view('students.show', ['complex' => $complex, 'building' => $building , 'room' => $room , 'student' => $student]);


    }
//create
public function create(Complex $complex , Building $building , Room $room )
{

    return view('students.create', ['complex' => $complex , 'building' => $building , 'room' => $room]);
}
//store
public function store(Request $request, Complex $complex , Building $building , Room $room )
{
$student = $request->validate([
       'name' => 'required',
       'id_number' => 'required',
       'national_number' => 'required',
       'phone_number' => 'required',
       'sex' => 'required',
       'city' => 'required',
        'room_number' => 'required',

   ]);

   $room->students()->create($student);

   return redirect()->route('room.show', ['complex' => $complex->id ,'building' => $building->id , 'room' => $room->id]);
}
 //edit product
 public function edit(Complex $complex, Building $building ,Room $room , Student $student)
 {
     if (Auth::user()->id != $complex->user_id) {
         abort(403);
     }
     if ($building->complex_id != $complex->id) {
         abort(404);
     }


    if ($room->building_id != $building->id) {
        abort(404);
    }
     return view('students.edit', ['complex' => $complex, 'building' => $building , 'room' => $room , 'student' => $student]);
 }
//update product
public function update(Request $request, Complex $complex, Building $building ,Room $room , Student $student)
{
  if (Auth::user()->id != $complex->user_id) {
      abort(403);
  }
  if ($building->complex_id != $complex->id) {
      abort(404);
  }
  if ($room->building_id != $building->id) {
    abort(404);
}
  $student->update($request->validate([
    'name' => 'required',
    'id_number' => 'required',
    'national_number' => 'required',
    'phone_number' => 'required',
    'sex' => 'required',
    'city' => 'required',
     'room_number' => 'required',
  ]));
  return redirect()->route('room.show', ['complex' => $complex->id , 'building' => $building->id , 'room'=> $room->id  ])->with(['success' => 'room updated successfully']);
}
//destroy
public function destroy( Complex $complex, Building $building ,Room $room , Student $student){
    if (Auth::user()->id != $complex->user_id) {
        abort(403);
    }

    if ($building->complex_id != $complex->id) {
        abort(404);
    }
    if ($room->building_id != $building->id) {
        abort(404);
    }
    //delete
    $student->delete();
    return redirect()->route('room.show', ['complex' => $complex->id  , 'building' => $building->id , 'room'=> $room->id ])->with(['success' => 'room deleted successfully']);
}

}
