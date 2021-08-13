<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Bid;
use App\Models\User;
use App\Models\Review;
use App\Models\SalesH;
use App\Models\Payment;
use App\Models\Project;
use App\Models\RefService;
use App\Models\RefProvince;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProjectServiceDemand;

class DashboardSalesRatingController extends Controller
{
    public function index($projectid)
    {   //untuk narik data dari tabel
        $project = Project::where('project_id', '=', $projectid)
            ->first();
        $user = User::where('user_id', '=', session('userId'))
            ->first();
        return view('dashboard.salesrating', compact('project', 'user'));
    }

    public function storeRating(Request $request)
    {
        $bid = Bid::where('project_id', '=', $request->project_id)
            ->where('win_status', '=', 1)
            ->first();
        $salesH = SalesH::where('project_id', '=', $request->project_id)
            ->first();


        $review = new Review;
        $review->score = $request->score;
        $review->description = $request->description;
        $review->sales_h_id = $salesH->sales_h_id;
        $review->worker_id = $bid->worker_id;
        $review->save();

        return redirect()->route('dashboard.index');
    }
}
