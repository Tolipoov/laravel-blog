<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Tag;

class StoreController extends Controller
{
    public function index(StoreRequest $request){

        $data = $request->validated();

        Tag::firstOrCreate($data);

        return redirect()->route('admin.tag.index');
    }
}
