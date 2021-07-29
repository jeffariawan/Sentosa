<?php

namespace App\Http\Controllers\article;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ArticleService;


class ArticleController extends Controller
{
    public function index()
    {
        $articelSvc = new ArticleService;
        $article = $articelSvc->getArticle(3);
        
        return view('article.index', compact('article'));
    }
}
