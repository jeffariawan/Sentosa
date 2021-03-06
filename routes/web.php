<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\article\ArticleController;
use App\Http\Controllers\user\RegisLoginController;
use App\Http\Controllers\worker\WorkerViewController;
use App\Http\Controllers\project\ProjectViewController;
use App\Http\Controllers\user\OpsiRegistrasiController;
use App\Http\Controllers\user\RegistrasiWorkerController;
use App\Http\Controllers\worker\WorkerViewDetailController;
use App\Http\Controllers\dashboard\DashboardIndexController;
use App\Http\Controllers\project\PostProjectStartController;
use App\Http\Controllers\project\ProjectViewDetailController;
use App\Http\Controllers\dashboard\DashboardProfileController;
use App\Http\Controllers\dashboard\DashboardPortofolioController;
use App\Http\Controllers\dashboard\DashboardSalesRatingController;
use App\Http\Controllers\dashboard\DashboardProjectDetailController;
use App\Http\Controllers\dashboard\DashboardProjectPaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//----------Home
Route::get('/', [HomeController::class, 'index'])->name('home');


//----------Article
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');


//----------project
Route::get('/project/PostProjectStart', [PostProjectStartController::class, 'index'])->name('project.PostProjectStart');
Route::post('/project/PostProjectStart/store', [PostProjectStartController::class, 'store'])->name('project.PostProjectStart.store');
// Route::post('/project/PostProjectStart/store1',[PostProjectStartController::class,'validasiLogin'])->name('project.PostProjectStart.store1');
//projectview
Route::get('/project/ProjectView', [ProjectViewController::class, 'index'])->name('project.ProjectView');
Route::get('/project/projectFilterResult/{id}', [ProjectViewController::class, 'projectFilterResult'])->name('project.projectFilterResult');
Route::get('/project/ProjectView/show', [ProjectViewController::class, 'show'])->name('project.ProjectView.show');
//projectviewdetail
Route::get('/ProjectViewDetail/{projectid}', [ProjectViewDetailController::class, 'index'])->name('project.ProjectViewDetail');
Route::get('/project/ProjectViewDetail/bidstore/{userid}/{projectid}', [ProjectViewDetailController::class, 'BidStore'])->name('project.ProjectViewDetail.bidstore');
Route::get('/project/ProjectViewDetail/commentStore', [ProjectViewDetailController::class, 'CommentStore'])->name('project.ProjectViewDetail.commentStore');

Route::post('/project/ProjectViewDetail/setprojectwinner', [ProjectViewDetailController::class, 'SetProjectWinner'])->name('project.ProjectViewDetail.setprojectwinner');


//----------user
Route::get('/user/registrasi', [RegisLoginController::class, 'index'])->name('user.registrasi');
Route::post('/user/registrasi/store', [RegisLoginController::class, 'store'])->name('user.registrasi.store');
Route::post('/user/registrasi/store1', [RegisLoginController::class, 'store1'])->name('user.registrasi.store1');
Route::post('/user/registrasi/store2', [RegisLoginController::class, 'store2'])->name('user.registrasi.store2');
//login
Route::get('/user/login', [RegisLoginController::class, 'indexLogin'])->name('user.login');
Route::post('/user/login/submit', [RegisLoginController::class, 'validasiLogin2'])->name('user.login.submit');
//registrasi worker

Route::get('/user/logout', [RegisLoginController::class, 'Signout'])->name('user.logout');

Route::get('/user/opsiregistrasi', [OpsiRegistrasiController::class, 'index'])->name('user.opsiregistrasi');
Route::get('/user/registrasiworker', [RegistrasiWorkerController::class, 'index'])->name('user.registrasiworker');
Route::post('/user/registrasiworker/store', [RegistrasiWorkerController::class, 'store'])->name('user.registrasiworker.store');

//worker
Route::get('/worker/workerview/{refserviceid}', [WorkerViewController::class, 'index'])->name('worker.workerview');
Route::get('/worker/workerFilterResult/{id}', [WorkerViewController::class, 'workerFilterResult'])->name('worker.workerFilterResult');
Route::get('/WorkerViewDetail/{workerid}', [WorkerViewDetailController::class, 'index'])->name('worker.WorkerViewDetail');


//----------Dashboard
Route::get('/dashboard/index', [DashboardIndexController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/projectDetail/{projectid}', [DashboardProjectDetailController::class, 'index'])->name('dashboard.projectDetail');
//portofolio
Route::get('/dashboard/portofolio', [DashboardPortofolioController::class, 'index'])->name('dashboard.portofolio');
Route::get('/dashboard/portofolio/create', [DashboardPortofolioController::class, 'create'])->name('dashboard.portofolio.create');
Route::post('/dashboard/portofolio/store', [DashboardPortofolioController::class, 'store'])->name('dashboard.portofolio.store');
Route::get('/dashboard/portofolio/edit/{workerportofolioid}',[DashboardPortofolioController::class,'edit'])->name('dashboard.portofolio.edit');
Route::post('/dashboard/portofolio/update/{workerportofolioid}',[DashboardPortofolioController::class,'update'])->name('dashboard.portofolio.update');
Route::get('/dashboard/portofolio/delete/{workerportofolioid}',[DashboardPortofolioController::class,'destroy'])->name('dashboard.portofolio.delete');
//project payment
Route::get('/dashboard/projectpayment/{projectid}', [DashboardProjectPaymentController::class, 'index'])->name('dashboard.projectpayment');
Route::post('/dashboard/projectpayment/payment', [DashboardProjectPaymentController::class, 'storePayment'])->name('dashboard.projectpayment.payment');

//profile
Route::get('/dashboard/profile', [DashboardProfileController::class, 'index'])->name('dashboard.profile');
Route::get('/dashboard/profile/edit/{userid}', [DashboardProfileController::class, 'edit'])->name('dashboard.profile.edit');
Route::post('/dashboard/profile/update/{userid}', [DashboardProfileController::class, 'update'])->name('dashboard.profile.update');

Route::get('/dashboard/salesrating/{projectid}', [DashboardSalesRatingController::class, 'index'])->name('dashboard.salesrating');
Route::post('/dashboard/salesrating/submit', [DashboardSalesRatingController::class, 'storeRating'])->name('dashboard.salesrating.store');

