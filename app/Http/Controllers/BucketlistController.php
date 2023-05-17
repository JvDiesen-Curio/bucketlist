<?php

namespace App\Http\Controllers;

use App\Models\Bucketlist;
use Illuminate\Http\Request;

class BucketlistController extends Controller
{
    public function index()
    {
        return view('bucketlists.index', [
            'bucketlists' => Bucketlist::paginate(8)

        ]);
    }
    public function show(Bucketlist $Bucketlist)
    {
        // $Bucketlist = $Bucketlist::with('items');
        return view('bucketlists.show', [
            'bucketlist' => $Bucketlist

        ]);
    }

    public function store()
    {

        $attributes = request()->validate([
            'title' => ['required', 'max:255', 'min:3'],

        ]);


        $bucketlist = Bucketlist::create([
            'title' =>    $attributes['title'],
            'user_id' => 0


        ]);

        return view('bucketlists.show', [
            'bucketlist' =>  $bucketlist

        ]);
    }
    public function update(Bucketlist $Bucketlist)
    {

        $attributes = request()->validate(['title' => ['required', 'max:255']]);

        $Bucketlist->update($attributes);


        return redirect('bucketlist/' . $Bucketlist->id);
    }


    public function delete(Bucketlist $Bucketlist)
    {

        $Bucketlist->items()->delete();
        $Bucketlist->delete();

        return view('bucketlists.index', [
            'bucketlists' => Bucketlist::paginate(8)

        ]);
    }
}
