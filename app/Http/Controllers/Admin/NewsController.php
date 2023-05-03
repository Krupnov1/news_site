<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\News;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsCreate;
use App\Http\Requests\NewsEdit;
use Illuminate\Http\Request;

class NewsController extends Controller  
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $newsList = News::with('category')
            ->orderBy('id', 'desc')
            ->paginate(10);
    
        return view('admin.news.index', [ 
            'newsList' => $newsList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.news.create', [  
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsCreate $request)
    {
        $fields = $request->only('category_id', 'title', 'image', 'description', 'status'); 
        $fields['slug'] = Str::slug($fields['title']);
        $news = News::create($fields);
        if ($news) {
            return redirect()->route('news.index');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('admin.news.show', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $categories = Category::all();
        return view('admin.news.edit', [ 
            'news' => $news,
            'categories' => $categories 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsEdit $request, News $news)
    {
        $fields = $request->only('category_id', 'title', 'image', 'description', 'status');
        $fields['slug'] = Str::slug($fields['title']);

        $news = $news->fill($fields)->save();
        if ($news) {
            return redirect()->route('news.index');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($news)
    {
        $news = News::find($news);
        $news->delete();

        return redirect()->route('news.index');
    }
}
