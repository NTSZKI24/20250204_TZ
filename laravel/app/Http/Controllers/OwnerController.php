<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function getOwner()
    {
        $owner = Owner::query()->with("cars")->get();

        return response()->json($owner);
    }

    public function createOwners(Request $request)
    {
        $owner = Owner::create($request->all());
        return response()->json($owner, 201);
    }

    public function updateOwners(Owner $owner, Request $request)
    {
        $owner->update($request->all());

        return response()->json($owner);
    }

    public function deleteOwners(Owner $owner)
    {
        $owner->delete();

        return response()->json("", 204);
    }
}
