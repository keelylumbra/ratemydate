<?php

namespace App\Http\Controllers;

use App\dates;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function getIndex(Request $request)
    {
        $this->validate($request, [
            'search' => 'required'
        ]);

        $search = $request->get('search');

        $posts = dates::where('user_name', 'like', "%$search%")
            ->orWhere('review', 'like', "%$search%")
            ->paginate(10)
            ->appends(['search' => $search])
        ;

        return view('pages.search', compact('posts'));
    }
}
