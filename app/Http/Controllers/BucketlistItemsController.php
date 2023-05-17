<?php

namespace App\Http\Controllers;

use App\Models\Bucketlist;
use App\Models\Bucketlist_items;
use Illuminate\Http\Request;

class BucketlistItemsController extends Controller
{
    public function store(Bucketlist $Bucketlist)
    {

        $attributes = request()->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'prioriteit' => ['required', 'max:255'],

        ]);

        if (empty($attributes['done'])) $attributes['done'] = 0;
        // if (isset($attributes['done'])) $attributes['done'] = 1;

        $Bucketlist->items()->create($attributes);


        return redirect("/bucketlist/$Bucketlist->id");
    }

    public function done(Bucketlist_items $Bucketlist_items)
    {
        $bucketlist_id = request('bucketlist_id');


        $Bucketlist_items->update(['Done' => 1]);
        return redirect("/bucketlist/$bucketlist_id");
    }

    public function delete(Bucketlist_items $Bucketlist_items)
    {
        $bucketlist_id = request('bucketlist_id');

        $Bucketlist_items->delete();

        return redirect("/bucketlist/$bucketlist_id");
    }
}
