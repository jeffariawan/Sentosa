<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\RefPicture;
use App\Models\RefService;
use Illuminate\Http\Request;
use App\Models\WorkerPortofolio;
use App\Services\ArticleService;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Article
        $articelSvc = new ArticleService;
        $article = $articelSvc->getArticle(3);

        //FAQ
        $faqSvc = new ArticleService;
        $faq = $faqSvc->getFAQ(6);

        //Worker
        $workerSvc = new ArticleService;
        $worker = $workerSvc->getWorker(4);

        //refservice
        $refservice = RefService::orderby('created_at')->paginate(6);
        //Portofolio
        $porto = WorkerPortofolio::with('RefPicture')->find(1);
        $picture = RefPicture::get();

        return view('home', compact('article', 'faq', 'worker', 'porto', 'picture', 'refservice'));
    }
}
