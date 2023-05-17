<?php

namespace App\Http\Controllers;

use App\Models\Bucketlist;
use Illuminate\Http\Request;

class BucketlistApiController extends Controller
{


    public function post()
    {

        $rules = [
            'title' => ['required', 'max:255', 'min:3'],
        ];

        $data = request()->all();


        $errors =  $this->validation($data, $rules);
        if ($errors) return $errors;

        $data['user_id'] = 0;

        $response =  Bucketlist::create($data);


        return response()->json($response, 201);
    }


    public function get($bucketlist_id)
    {
        $data = Bucketlist::find($bucketlist_id);

        if (!$data) return response()->json([], 404);

        return response()->json($data, 200);
    }

    public function list()
    {
        $data = Bucketlist::all();

        if (!$data) return response()->json([], 204);

        return response()->json($data, 200);
    }

    public function update(Bucketlist $Bucketlist)
    {
        $rules = [
            'title' => ['max:255', 'min:3'],
        ];

        $data = request()->all();

        $errors =  $this->validation($data, $rules);
        if ($errors) return $errors;

        $Bucketlist->update($data);

        return response()->json($Bucketlist, 202);
    }

    public function delete(Bucketlist $Bucketlist)
    {
        $Bucketlist->delete();

        return response()->json(null, 204);
    }


    private function validation($data, $rules)
    {

        $validator = validator($data, $rules);
        if ($validator->fails())  return response()->json($validator->errors(), 400);
    }
}
