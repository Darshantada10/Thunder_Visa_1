<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Blog;
use App\Models\Logo;
use App\Models\About;
use App\Models\Navbar;
use App\Models\Slider;
use App\Models\Benefit;
use App\Models\VisaBox;
use App\Models\SocialTags;
use App\Models\VideoTitle;
use App\Models\VisaProcess;
use Illuminate\Http\Request;
use App\Models\ContactInformation;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('FrontEnd.Home.index');
    }
    public function GetActiveData()
    {
        $logo = Logo::where('visible', true)->orderBy('created_at', 'desc')->first(['logo']);
        $navbar = Navbar::all();
        $slider = Slider::where('visible', true)->orderBy('created_at', 'desc')->first(['heading','sub_heading']);
        $social_tags = SocialTags::where('visible', true)->orderBy('created_at', 'desc')->first(['instagram','facebook','twitter','youtube']);
        $contact_info = ContactInformation::where('visible', true)->orderBy('created_at', 'desc')->first(['mobile1','mobile2','address']);
        $visa_boxes = VisaBox::where('visible',true)->orderBy('created_at', 'desc')->take(5)->get(['title', 'small_description', 'image']);
        $about = About::where('visible', true)->orderBy('created_at', 'desc')->first(['heading','description',
        'point_1','point_2','description_1','description_2']);
        $video_title = VideoTitle::where('visible', true)->orderBy('created_at', 'desc')->first(['title','url']);
        $benefit = Benefit::where('visible', true)->orderBy('created_at', 'desc')->first(['heading1','heading2','heading3','heading4','point1','point2','point3','point4']);
        $visa_process = VisaProcess::where('visible', true)->orderBy('created_at', 'desc')->first(['heading1','heading2','heading3','point1','point2','point3']);
        $blogs = Blog::where('visible',true)->orderBy('created_at', 'desc')->take(3)->get();

        return response()->json(["logo"=>$logo,"navbar"=>$navbar,"slider"=>$slider,"social"=>$social_tags,"contact"=>$contact_info,"visa_boxes"=>$visa_boxes,"about"=>$about,"video_title"=>$video_title,"benefit"=>$benefit,"visa_process"=>$visa_process,"blogs"=>$blogs]);

    }
    public function getActiveNavbar()
    {
        $navbar = Navbar::all();
        
        return response()->json($navbar);
    }
}
