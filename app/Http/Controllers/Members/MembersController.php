<?php

namespace App\Http\Controllers\Members;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index(Request $request)
    {
        $members = DB::table('members')
            ->selectRaw("
                members.id as member_id,
                members.name as member_name,
                members.email as member_email,
                members.phone as member_phone,
                subscriptions.id AS subscription_id,
                subscriptions.name AS subscription_name,
                subscriptions.price
            ")
            ->join('subscriptions', 'subscriptions.id', '=', 'members.subscription_id')
            ->orderBy('subscriptions.price', 'DESC')
            ->groupBy('member_id')
            ->get();

        return response()->json([
            'error' => false,
            'average_price' =>  $members->avg('price'),
            'data' => collect($members)->transform(function ($member){
                return [
                    'id' => $member->member_id,
                    'name' => $member->member_name,
                    'email' => $member->member_email,
                    'phone' => $member->member_phone,
                    'subscription' => [
                        'id' => (!empty($member->subscription_id) ? $member->subscription_id : null),
                        'name' => (!empty($member->subscription_name) ? $member->subscription_name : null),
                        'price' => (!empty($member->price) ? $member->price : null),
                        'display' => (!empty($member->subscription_name) ? "{$member->subscription_name} (\${$member->price})" : null),
                    ]
                ];
            })
        ]);
    }
}
