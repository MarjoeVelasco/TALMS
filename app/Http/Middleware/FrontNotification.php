<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

use App\ErrorLog;
use App\FiledLeaves;
use App\FiledCto;

class FrontNotification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        //get number for supervising approval of leave and cto
        $supervisor_leave = FiledLeaves::where('supervisor_id',auth()->user()->id)
                ->where('status','Routed to Supervisor')
                ->count();
        
        $supervisor_cto = FiledCto::where('supervisor_id',auth()->user()->id)
                ->where('status','Routed to Supervisor')
                ->count();

        //get number of pending leaves and cto for HR action
        $hr_leave = FiledLeaves::where('hr_id',auth()->user()->id)
                ->where('status','Pending')
                ->orWhere('status','Processing')
                ->orWhere('status','Routed to HR')
                ->count();

        $hr_cto = FiledCto::where('hr_id',auth()->user()->id)
                ->where('status','Pending')
                ->orWhere('status','Processing')
                ->orWhere('status','Routed to HR')
                ->count();



        $leave_supervisor_approval = $supervisor_cto + $supervisor_leave;
        $leave_hr_approval = $hr_leave + $hr_cto;

        View::share([
            'leave_supervisor_approval_notif' => $leave_supervisor_approval,
            'leave_hr_approval_notif' => $leave_hr_approval,
        ]);

        return $next($request);
    }
}
