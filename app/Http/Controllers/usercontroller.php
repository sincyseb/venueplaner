<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userdetail;
use App\Models\about;
use App\Models\service;
use App\Models\event;
use App\Models\venue;
use App\Models\userbook;

class usercontroller extends Controller
{

    public function __construct()
    {
        $this->obj=new userdetail;
    }
  
    public function index()
    {
        return view('user.index');
    }
    public function userlogin()
    {
        return view('user.userlogin');
    }
    public function userreg()
    {
        return view('user.userreg');
    }
    public function userhome()
    {
        $id=session('sess');
        $data['res']=userdetail::where('id',$id)->get();
        return view('user.userhome',$data);
    }
    public function about()
    {
        $data['result']=about::get();
        return view('user.about',$data);
    }
    public function service()
    {
        $data['result']=service::get();
        return view('user.services',$data);
    }
    public function gallery()
    {
        // $data['result']=service::get();
        return view('user.gallery');
    }
    public function bookingdetails()
    {
        $id=session('sess');
        $data['result']=userbook::join('venues','venues.id','=','userbooks.venue')->join('services','services.id','=','userbooks.service')->where('userbooks.name',$id)->get();
   
        return view('user.bookingdetails',$data);
    }

//view userbook
    public function userbook()
    {
        $id=session('sess');
        // $data['res']=userdetail::where('id',$id)->get();
        $data['result']=event::all();
      
        // $data['res']=venue::get();
        $data['res']=service::all();
        return view('user.userbook',$data);
    }

//using ajax view venue
    public function getvenue(request $req,$id)
    {
        // $name=$req->input('district');
        $data=venue::where('district',$id)->get();
        foreach ($data as  $value2) {
        ?>
        <option value="<?php echo $value2->id;?>"><?php echo $value2->venuetype;?></option>
       
        <?php }
       
    }
//using ajax add price
  




    // insert into tables
    public function reg(request $reqst)
    {
        $name=$reqst->input('name');
        $email=$reqst->input('email');
        $password=$reqst->input('password');
        $contact=$reqst->input('contact');
        $place=$reqst->input('place');
        $city=$reqst->input('city');
        $data=['name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'contact'=>$contact,
            'place'=>$place,
            'city'=>$city];
            $this->obj->insertuser('userdetails',$data);
        return view('user.userlogin',$data);
    }

    public function bookevent(request $reqst)
    {
        $name=session('sess');
        $event=$reqst->input('event');
        $place=$reqst->input('place');
        $venue=$reqst->input('venue');
        $service=$reqst->input('service');
        $servic=implode(',',$service);
        $date=$reqst->input('date');
        $time=$reqst->input('time');
        $data=['name'=>$name,
        'event'=>$event,
            'place'=>$place,
            'venue'=>$venue,
            'service'=>$servic,
            'date'=>$date,
            'time'=>$time,
        'status'=>'waiting'];
            $this->obj->insertuser('userbooks',$data);
        return redirect('/bookingdetails');
    }


    //login
    public function login(request $req)
    {
        $email=$req->input('email');
        $password=$req->input('password');
        $data=$this->obj->selectuser('userdetails',$email,$password);
        if(isset($data))
        {
            $req->session()->put(array('sess'=>$data->id));
            return redirect('/userhome');
        }
        else
        {
            return redirect('/userlogin')->with('error','invalid username or password!!');
        }
    }

    
}
