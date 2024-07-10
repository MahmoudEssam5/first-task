<?php

namespace Modules\About\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AboutUsStoreRequest;
use Illuminate\Contracts\Validation\Validator;
use Modules\About\Models\About;


class AboutController extends Controller
{

    public function index()
    {

        $about = About::all();
        return response()->json($about);

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:220',
            'describtion' => 'required',
            'imge' => 'nullable'
        ]);


        $about = About::create([
            'title' => $request->title,
            'describtion' => $request->describtion,
            'imge' => $request->imge,
        ]);


        return response()->json($about, 201);
    }

}
