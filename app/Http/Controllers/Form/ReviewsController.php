<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reviews;
use App\Models\Feedback;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.reviews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Reviews $request)
    {
        $fields = $request->only('name', 'comment');
        $feedback = Feedback::create($fields);

        if ($feedback) {
            return redirect()->route('reviews');
        }
        return back();
        
        //$field = json_encode($fields);
        //Storage::disk('local')->put('reviews.json', $field);
        //Storage::append('reviews.json', $field);
    }
}
