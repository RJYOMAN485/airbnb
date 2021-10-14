<?php

namespace App\Http\Controllers;

use App\Http\Resources\OfficeResource;
use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    
    public function index() {
        
        Office::factory(3)->create();
        $offices = Office::query()
                    ->orderBy('id','DESC')
                    ->get();
        return OfficeResource::collection(
            $offices
        );
    }
}
