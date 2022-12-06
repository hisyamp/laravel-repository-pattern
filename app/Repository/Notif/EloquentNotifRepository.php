<?php

namespace App\Repository\Notif;
use App\Models\Notif;

class EloquentNotifRepository implements NotifRepository
{
    public function getNotifs()
    {
       $notif = Notif::all()->take(50);
       return response()->json([
            "success" => true,
            "data" => $notif
        ]);
    }
}