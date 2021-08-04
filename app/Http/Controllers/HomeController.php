<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\RefPicture;
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

        //Portofolio
        $porto = WorkerPortofolio::with('RefPicture')->find(1);
        $picture = RefPicture::get();

        return view('home', compact('article','faq','worker','porto','picture'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
