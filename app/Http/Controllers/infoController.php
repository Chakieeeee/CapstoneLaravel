<?php
#chaks
#nats
namespace App\Http\Controllers;
use App\Models\infoArticle;
use App\Models\dateArticle;
use App\Models\roomArticle;
use App\Models\roomArticles;
use App\Models\Reservations;
use App\Models\pickArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class infoController extends Controller
{
    public function index(){
        return view ('web.index');

       
      
    }
    private function fetchReservations() {
        return Reservations::select('id', 'roomID', 'checkIn', 'checkOut')->get();
    }

    public function displayAvailability() {
        $reservations = $this->fetchReservations();
    
        return view('web.availability', ['reservations' => $reservations],compact('reservations'));
       

    }
    
    
    // public function availability(){
    //     $rooms = DB::table('rooms')->where('isAvailable', 0)->get();
    //     return view ('web.availability',['rooms'=> $rooms]);
      
        
    // }

    public function availability(Request $request){
        // Retrieve 'checkIn' and 'checkOut' from the request
        $checkIn = $request->input('checkIn');
        $checkOut = $request->input('checkOut');
    
        // Fetch available rooms from the 'rooms' table
        $rooms = DB::table('rooms')->where('isAvailable', 0)->get();
    
        // Pass 'checkIn', 'checkOut', and 'rooms' data to the 'availability' view
        return view('web.availability', compact('checkIn', 'checkOut', 'rooms'));
    }
    

    

    public function accommodations(){
        return view ('web.accommodations');
    }

    public function contacts(){
        return view ('web.contacts');
    }

    public function events(){
        return view ('web.events');
    }

    public function faqs(){
        return view ('web.faqs');
    }
    
    public function form(){
        return view ('web.form');
    }

    public function booknow(){
        return view ('web.booknow');
    }
    

    public function create(Request $request){
        $request->validate([
            'fName' => 'required|string|min:3',
            'lName' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'adult' => 'required',
            'children' => 'required',
           ]);

        $article = new infoArticle();
        $article->fName = $request->input('fName');
        $article->lName = $request->input('lName');
        $article->email = $request->input('email');
        $article->contact = $request->input('contact');
        $article->address = $request->input('address');
        $article->adult = $request->input('adult');
        $article->children = $request->input('children');
        $article->save();
        
   
        $reservations = DB::table('reservations')->select('id','roomID', 'checkIn','checkOut')->get();
        $room_articles = DB::table('room_articles')->select('id','roomId', 'roomName','roomPrice')->get();
        $info_articles = DB::table('info_articles')->select('lName','adult','children')->get();
        $date_articles = DB::table('date_articles')->select('checkIn', 'checkOut',)->get();
           
        foreach ($room_articles as $room_article) {
                $new_room = new Reservations();
                $new_room->reservationNo = $room_article->id;
                $new_room->roomID = $room_article->roomId;
                $new_room->roomName = $room_article->roomName;
                $new_room->total = $room_article->roomPrice;
            
                
        }
        foreach ($info_articles as $info_article) {
                $new_room->name = $info_article->lName;
                $new_room->adult = $info_article->adult;
                $new_room->children = $info_article->children;
        }

        foreach ($date_articles as $date_article) {
                
                $new_room -> checkIn = $date_article->checkIn;
                $new_room-> checkOut = $date_article->checkOut;
                
                
        }
        $new_room->save();
    
}

    public function date(Request $request){
        $request->validate([
            'checkIn' => 'required',
            'checkOut' => 'required',
           ]);
    
        $date = new dateArticle();
        $date->checkIn = $request->input('checkIn');
        $date->checkOut = $request->input('checkOut');
        $date->save();
        

        return redirect()->route('availability', ['checkIn' => $request->input('checkIn'), 'checkOut' => $request->input('checkOut')]);
  
    }


    public function room(Request $request){
        $request->validate([
            'roomId' => 'required',
            'roomName' => 'required',
           ]);
    
        
        $rooms = new roomArticle();
        $rooms->roomId = $request->input('roomId');
        $rooms->roomName = $request->input('roomName');
        $rooms->roomPrice = $request->input('roomPrice');
        $rooms->save();  


        return redirect('form');
      
        
  
    }
    public function panel(Panel $panel): Panel
    {
    return $panel
        ->plugins([
            \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make()
        ]);
    }
}
