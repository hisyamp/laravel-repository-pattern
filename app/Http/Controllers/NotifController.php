<?php

namespace App\Http\Controllers;

use App\Repository\Notif\EloquentNotifRepository;
use Illuminate\Http\Request;

class NotifController extends Controller
{
    protected $eloquentNotif;
    public function __construct(EloquentNotifRepository $eloquentNotif) {
        $this->eloquentNotif = $eloquentNotif;
    }

    public function getNotif(){
        $notif = $this->eloquentNotif->getNotifs();
        if (!$notif->isEmpty()){
            return response()->json([
                "success"=>true,
                "data"=>$notif
            ]);
        }
        return response()->json([
            "success"=>false,
            "message"=>"Data kosong"
        ]);
    }
}
