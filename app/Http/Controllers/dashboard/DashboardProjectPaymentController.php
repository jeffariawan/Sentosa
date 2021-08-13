<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Bid;
use App\Models\User;
use App\Models\SalesH;
use App\Models\Payment;
use App\Models\Project;
use App\Models\RefService;
use App\Models\RefProvince;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProjectServiceDemand;

class DashboardProjectPaymentController extends Controller
{
    public function index($projectid)
    {   //untuk narik data dari tabel
        $project = Project::where('project_id', '=', $projectid)
            ->first();
        $user = User::where('user_id', '=', session('userId'))
            ->first();
        return view('dashboard.projectpayment', compact('project', 'user'));
    }

    public function storePayment(Request $request)
    {
        $project = Project::where('project_id', '=', $request->project_id)
            ->first();
        $salesH = SalesH::where('project_id', '=', $request->project_id)
            ->first();

        $payment = new Payment;
        $payment->payment_no =  $request->paymentNo;
        $payment->account_name = $request->accountName;
        $payment->payment_dt = $request->paymentDate;
        $payment->total_payment =  $project->final_price;
        $payment->save();

        $project->status = 'Finish';
        $project->save();

        $salesH->status = "Lunas";
        $salesH->payment_id = $payment->payment_id;
        $salesH->save();

        return route('dashboard.index');
    }
}
