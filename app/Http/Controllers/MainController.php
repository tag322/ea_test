<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

use App\Models\JsonPlaceholderPost;

class MainController
{
    public function fetchSales() {
        $response = json_decode(Http::get(env('EXTERNAL_API_URL').''.'/posts/1'));

        JsonPlaceholderPost::create([
            'user_id' => $response->userId,
            'title' => $response->title,
            'body' => $response->body,
        ]);

        Log::info('created');
    }

    public function fetchOrders() {
        
    }

    public function fetchStorages() {
        
    }

    public function fetchIncomes() {
        
    }
}
