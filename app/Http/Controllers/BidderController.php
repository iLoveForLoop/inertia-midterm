<?php

namespace App\Http\Controllers;

use App\Models\Bidder;
use Illuminate\Http\Request;

class BidderController extends Controller
{
    public function index(){

        $bidders = Bidder::all();

        return inertia('Bidders/Index', compact('bidders'));
    }
}