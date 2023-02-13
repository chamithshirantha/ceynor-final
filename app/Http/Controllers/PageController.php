<?php

namespace App\Http\Controllers;

use App\Models\FishingBoat;
use App\Models\OtherProducts;
use App\Models\PassengerBoat;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }


    public function aboutus(){
        return view('about');
    }

    public function fishingboat(){
        $boatfb = FishingBoat::orderBy("id", "desc")->get();
        return view('fishingboats', ['boats' => $boatfb]);

        // return view('fishingboats');
    }

    public function viewmore_fb($id){
        $fb = FishingBoat::findOrFail($id);
        return view('viewmore_fb', ['fb' => $fb]);
        // return view('viewmore_fb');

        // return view('viewmore_fb',compact('fb'));
    }

    public function passengerboat(){
        $boatpb = PassengerBoat::orderBy("id", "desc")->get();
        return view('passengerboats', ['boatspb' => $boatpb]);
        // return view('passengerboats');
    }

    public function viewmore_pb($id){
        $pb = PassengerBoat::findOrFail($id);
        return view('viewmore_pb', ['pb' => $pb]);
        // return view('viewmore_fb');

        // return view('viewmore_fb',compact('fb'));
    }

    public function otherproduct(){
        $otherpro = OtherProducts::orderBy("id", "desc")->get();
        return view('otherproducts', ['otherpro' => $otherpro]);
    }

    public function viewmore_op($id){
        $op = OtherProducts::findOrFail($id);
        return view('viewmore_op', ['op' => $op]);
        // return view('viewmore_fb');

        // return view('viewmore_fb',compact('fb'));
    }

    public function newsfeed(){
        return view('newsfeeds');
    }

    public function tender(){
        return view('tendersvacancies');
    }

    public function contact(){
        return view('contactus');
    }

    public function project(){
        return view('ourprojects');
    }

    public function gallery(){
        return view('show_gallery');
    }
}
