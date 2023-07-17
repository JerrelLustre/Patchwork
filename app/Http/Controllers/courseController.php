<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class courseController extends Controller
{
    
    public function showCourses()
    {
        $courses = [
            ['title' => "Online Store",
            'colorClass' => "OnlineStore",
            'image' => "onlineStore.webp",
            'linkID' => "943577",
            ],
            ['title' => "New Media Operation",
            'colorClass' => "NMOperation",
            'image' => "newMedia.webp",
            'linkID' => "943573",
            ],
            ['title' => "Enterprise",
            'colorClass' => "Enterprise",
            'image' => "enterprise.webp",
            'linkID' => "943571",
            ],
            ['title' => "Portfolio 2",
            'colorClass' => "Portfolio2",
            'image' => "portfolio.webp",
            'linkID' => "943575",
            ],
            ['title' => "App Development 2",
            'colorClass' => "AppDev2",
            'image' => "appdev.webp",
            'linkID' => "943579",
            ],
            ['title' => "Web Scripting 3",
            'colorClass' => "WebScripting3",
            'image' => "webScript.webp",
            'linkID' => "935938",
            ],
            ['title' => "Quality Assurance",
            'colorClass' => "QualityAssurance",
            'image' => "qualityAssurance.webp",
            'linkID' => "935936",
            ],
            ['title' => "Internship Prep",
            'colorClass' => "Internship",
            'image' => "internPrep.webp",
            'linkID' => "945975",
            ],
            ['title' => "Career Prep",
            'colorClass' => "CareerPrep",
            'image' => "careerPrep.webp",
            'linkID' => "943581",
            ],
           
        ];
        return view('courses', ['courses' => $courses]);
    }
}
