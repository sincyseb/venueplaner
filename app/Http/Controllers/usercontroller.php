<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userdetail;
use App\Models\about;
use App\Models\service;
use App\Models\event;
use App\Models\venue;
use App\Models\userbook;
use App\Models\gallery;
use Mail;

class usercontroller extends Controller
{

    public function __construct()
    {
        $this->obj=new userdetail;
        $this->obj1=new userbook;
    }
  
    public function index()
    {
        // $data['result']=feedback::get();
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
        $data['result']=gallery::get();
        return view('user.gallery',$data);
    }
    // public function bookingdetails()
    // // {
    // //     $id=session('sess');
    // //     $data['result']=userbook::join('venues','venues.id','=','userbooks.venue')->join('services','services.id','=','userbooks.service')->where('userbooks.name',$id)->get();
   
    // //     return view('user.bookingdetails',$data);
    // // }
   

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
        $data=venue::where('district',$id)->get();?>
        <option value="default" selected="selected"  disabled="disabled">Select Venue</option>
     <?php   foreach ($data as  $value2) {
        ?>
        
        <option value="<?php echo $value2->id;?>"><?php echo $value2->venuetype;?></option>
       
        <?php }
       
    }
//using ajax add price
public function bookingdetails()
{
    $id=session('sess');
    $data['result']=userbook::join('venues','venues.id','=','userbooks.venue')->where('userbooks.user_id',$id)->get();

    $data1['srs']=service::all();
    return view('user.bookingdetails',$data,$data1);
}




    // insert into tables
    public function reg(request $reqst)
    {
        request()->validate(['name'=>'required|min:3',
        'email'=>'required|email:unique',
        'password'=>'required|min:3|max:8',
        'contact'=>'required',
        'place'=>'required',
        'city'=>'required']);
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
            $val=['name'=>$name,
                'massege'=>'Welcome to Event Management'];
                $user['to']=$email;
            Mail::send('email',$val,function($msg) use($user){
                $msg->to($user['to']);
                $msg->subject('Welcome Message');
               
            });
        return view('user.userlogin',$data);
    }

    public function bookevent(request $reqst)
    {
        $name=session('sess');
        $event=$reqst->input('event');
        $place=$reqst->input('place');
        $venue=$reqst->input('venue');
        $service=$reqst->input('service');
        // $servic=implode(',',$service);
        $date=$reqst->input('date');
        $time=$reqst->input('time');
        $total=$reqst->input('v_price');
        // echo $total;
        // exit();
        $data=['user_id'=>$name,
        'event'=>$event,
            'place'=>$place,
            'venue'=>$venue,
            // 'service'=>$servic,
            'date'=>$date,
            'time'=>$time,
        'status'=>'waiting',
        'total'=>$total];
            $this->obj1->insertuser('userbooks',$data);
        return redirect('/bookingdetails');
    }


    //login
    public function login(request $req)
    {
        request()->validate(['email'=>'required|email',
        'password'=>'required',]);
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
    //logout
    public function ulogout(request $req)
    {
        $req->session()->forget('sess');
        return redirect('/userlogin');
    }

    //get price of service
    public function getvenueAmt($id)
    {
        $data=venue::where('id',$id)->get();
        foreach($data as $val)
        {
            echo $val->price;
        }
    }


    public function updateServ(Request $req,$id)
    {
        $sid=$req->input('serv');
        // $servic='service'+$sid;
        $tot=$req->input('tot');
        $players = userbook::where('b_id',$id)->get();
        foreach($players as $val)
        {
            $x= $val->service;
        }
        $data=['service' => $x.','.$sid,
            'total'=>$tot];
            $this->obj1->updateData('userbooks',$data,$id);

    }

   //viewbill
public function viewbill($id)
{
    $uid=session('sess');
        $data['result']=userdetail::join('userbooks','userdetails.id','=','userbooks.user_id')
        ->join('venues','venues.id','=','userbooks.venue')->where('userbooks.b_id',$id)
        ->where('userbooks.user_id',$uid)->get();
        $data1['srs']=service::all();
        // return view('admin.generatebill',$data,$data1);
    
    return view('user.viewbill',$data,$data1);

}

   
    
}
