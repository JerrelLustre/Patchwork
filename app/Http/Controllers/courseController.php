<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class courseController extends Controller
{
    
    public function showCourses()
    {
        $courses = [
            ['title' => "Online Store",
            'colorClass' => "onlineStore",
            'linkID' => "943577",
            ],
            ['title' => "New Media Operation",
            'colorClass' => "nmOperation",
            'linkID' => "943573",
            ],
            ['title' => "Enterprise",
            'colorClass' => "enterprise",
            'linkID' => "943571",
            ],
            ['title' => "Portfolio 2",
            'colorClass' => "portfolio2",
            'linkID' => "943575",
            ],
            ['title' => "App Development 2",
            'colorClass' => "appDev2",
            'linkID' => "943579",
            ],
            ['title' => "Web Scripting 3",
            'colorClass' => "webScripting3",
            'linkID' => "935938",
            ],
            ['title' => "Quality Assurance",
            'colorClass' => "qualityAssurance",
            'linkID' => "935936",
            ],
            ['title' => "Internship Prep",
            'colorClass' => "internship",
            'linkID' => "945975",
            ],
            ['title' => "Career Prep",
            'colorClass' => "careerPrep",
            'linkID' => "943581",
            ],
           
        ];
        return view('courses', ['courses' => $courses]);
    }
}
