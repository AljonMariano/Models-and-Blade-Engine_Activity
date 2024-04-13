<?php

namespace App\Http\Controllers;

use App\Models\Models\Book;
use Illuminate\Http\Request;


class DataController extends Controller
{
    public function generateData()
    {
       
        Book::factory()->count(20)->create();

       
        return redirect()->back()->with('success', 'New data generated successfully.');
    }
    
    public function clearData()
    {
       
        Book::truncate();
        
        return redirect()->back()->with('success', 'All data cleared successfully.');
    }
}
