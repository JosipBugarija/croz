<?php

namespace App\Http\Controllers;

use App\Joke;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;

class JokesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','update']);
    }

    public function index(Request $request) {
        if ($request->ajax()) {
            $order  = $request->order ?? 'desc';
            $sort   = $request->sort  ?? '(likes - dislikes)';
            $search = "%$request->search%";

            $jokes = Joke::with(['category'])
            ->where(function ($q) use($search) {
                $q->where('content', 'like', $search);

                foreach(['likes','dislikes'] as $attr)
                $q->orWhere($attr, 'like', $search);
            })
            ->orWhereHas('category', function($q) use ($search) {
                return $q->where('name', 'like', $search);
            })
            ->orderByRaw("$sort $order")->paginate(10);

    		return response()->json([
    			'total'  => $jokes->total(),
                'rows'	 => $jokes->items(),
                'status' => 'success'
    		]);
        }

        return view('jokes.index');
    }

    public function create() {
        $categories = \App\Category::all();

        return view('jokes.joke', compact('categories'));
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'content' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        if ($validator->fails()) {
            $request->session()->flash('alert-warning', $validator->errors()->first());
            return redirect()->back()->withInput();
        }

        Joke::create($request->input());

        $request->session()->flash('alert-success', 'Changes successfully saved!');
        return redirect()->action('JokesController@index');
    }

    public function update(Request $request, Joke $joke) {
        $joke->increment($request->like == 'true' ? 'likes':'dislikes');

        return response()->json([
            'status' => 'success'
        ], 200);
    }
}