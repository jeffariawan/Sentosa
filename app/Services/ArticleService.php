<?php
namespace App\Services;

use App\Models\FAQ;
use App\Models\Worker;
use App\Models\Article;
use App\Models\WorkerPortofolio;

class ArticleService
{
 public function getArticle(int $count)
 {
    $article = Article::orderby('created_at')->paginate($count);
    return $article;
 }

 public function getFAQ(int $count)
 {
    $faq = FAQ::orderby('created_at')->paginate($count);
    return $faq;
 }

 public function getWorker(int $count)
 {
    $worker = Worker::orderby('worker_id')->paginate($count);
    return $worker;
 }

 public function getporto(int $count)
 {
    $worker = WorkerPortofolio::orderby('worker_portofolio_id')->paginate($count);
    return $worker;
 }

}