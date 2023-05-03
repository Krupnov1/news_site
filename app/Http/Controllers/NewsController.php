<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index() {

        return view('news.index');        
    }

    public function newsCategoryShow() {

        $categories = Category::all();
        return view('news.category', [
            'categories' => $categories   
        ]);
    }

    public function newsOutput($id) { 

        $newsList = News::query()
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->select('news.*')
            ->where('categories.id', '=', $id)
            ->get();

        return view('news.news', [
            'newsList' => $newsList
        ]);
    }

    public function newsShow(int $id) {

        $news = News::find($id);
        return view('news.show', [
            'news' => $news
        ]);
    }
}
