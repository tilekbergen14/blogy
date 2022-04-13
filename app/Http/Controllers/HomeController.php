<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $menus = [
            ["name"=> "Welcome", "dropdowns" => null],
            ["name" => "Dropdown", 
                "dropdowns" => [
                    ["name" => "Link1", 'dropdowns' => null], 
                    ["name" => "Link2", 'dropdowns' => null], 
                    ["name" => "Link3", 'dropdowns' => null], 
                    ["name" => "Link4", 'dropdowns' => ["Hello", 'My', 'Name', 'Is']], 
                    ]
            ],
            ["name"=> "Left Sidebar", "dropdowns" => null], 
            ["name"=> "Right Sidebar", "dropdowns" => null], 
            ["name"=> "No Sidebar", "dropdowns" => null]
        ];
        return view('welcome', ["menus" => $menus]);
    }
}
