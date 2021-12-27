<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\about;
use App\Models\service;
use App\Models\gallery;
use App\Models\event;
use App\Models\venue;
use App\Models\userbook;
use App\Models\userdetail;
use App\Models\contact;

class maincontroller extends Controller
{
    public function __construct()
    {
        $this->obj=new admin;
        $this->obj1=new about;
        $this->obj2=new service;
        $this->obj3=new gallery;
        $this->obj4=new event;
        $this->obj5=new venue;
        $this->obj6=new userbook;
        $this->obj7=new contact;
    }
  
    //view
    public function adminhome()
    {
        $data['result']=contact::get();
        return view('admin.adminhome');
    }
    public function adminlogin()
    {
        return view('user.adminlogin');
    }
    public function addabout()
    {
        return view('admin.addabout');
    }
    public function addservice()
    {
        return view('admin.addservice');
    }
    public function addgallery()
    {
        return view('admin.addgallery');
    }
    public function addevent()
    {
        return view('admin.addevent');
    }
    public function addvenue()
    {
        return view('admin.addvenue');
    }
    




    //LOGIN
    public function alogin(request $req)
    {
        $email=$req->input('email');
        $password=$req->input('password');
        $data=$this->obj->selectadmin('admins',$email,$password);
        if(isset($data))
        {
            $req->session()->put(array('asess'=>$data->id));
            return redirect('/adminhome');
        }
        else
        {
            return redirect('/adminlogin')->with('error','invalid username or password!!');
        }
    }



    //insert
    public function adabout(request $req)
    {
        $about=$req->input('about');
        $data=['about'=>$about];
        $this->obj1->insertabout('abouts',$data);
        return redirect('/adminhome');
    }


    public function adservice(request $req)
    {
        $service=$req->input('service');
        $description=$req->input('description');
        $price=$req->input('price');
        $image=$req->file('image');
        $filename=$image->getClientOriginalName();
        $image->move(public_path().'/uploads',$filename);
        $data=['name'=>$service,
                'description'=>$description,
                's_price'=>$price,
                'image'=>$filename];
        $this->obj2->insertservice('services',$data);
        return redirect('/adminhome');
    }


    public function adgallery(request $req)
    {
        $name=$req->input('event');
        
        
        
        // $img=implode(',',$filename);
        if($req->hasFile('gallery'))
        {
            foreach ($req->file('gallery') as $file) 
            {
                // $gallery=$req->file('gallery');
                $gallery=time().'.'.$file->extension();
                // $filename=$gallery->getClientOriginalName();
                $file->move(public_path().'/uploads',$gallery);
                $files[]=$gallery;
            }
        }
        
        // $gallery->move(public_path().'/uploads',$filename);
        $data=['name'=>$name,
        'gallery'=>$gallery];
        $this->obj3->insertgallery('galleries',$data);
        return redirect('/adminhome');
    }


    public function adevent(request $req)
    {
        $name=$req->input('event');
        $description=$req->input('description');
        $image=$req->file('image');
        $filename=$image->getClientOriginalName();
        $image->move(public_path().'/uploads',$filename);
        // $price=$req->input('price');
        $data=['name'=>$name,
                'description'=>$description,
                'price'=>'null',
                'image'=>$filename];
        $this->obj4->insertevent('events',$data);
        return redirect('/adminhome');
    }


    public function advenue(request $req)
    {
        $district=$req->input('district');
        $location=$req->input('location');
        $venue=$req->input('venue');
        $price=$req->input('price');
        $image=$req->file('image');
        $filename=$image->getClientOriginalName();
        $image->move(public_path().'/uploads',$filename);
        $data=['district'=>$district,
                'location'=>$location,
                'venuetype'=>$venue,
                'price'=>$price,
                'image'=>$filename];
        $this->obj5->insertvenue('venues',$data);
        return redirect('/adminhome');
    }





    // view table
    public function viewabout()
    {
        $data['result']=$this->obj1->selectabout('abouts');
        return view('admin.viewabout',$data);
    }

    public function viewservice()
    {
        $data['result']=$this->obj2->selectservice('services');
        return view('admin.viewservice',$data);
    }

    public function viewupdateservice($id)
    {
        $data['result']=service::where('id',$id)->get();
        return view('admin.updateservice',$data);
    }

    public function viewgallery()
    {
        $data['result']=$this->obj3->selectgallery('galleries');
        return view('admin.viewgallery',$data);
    }

    public function viewupdategallery($id)
    {
        $data['result']=gallery::where('id',$id)->get();
        return view('admin.updategallery',$data);
    }

    public function viewevent()
    {
        $data['result']=$this->obj4->selectevent('events');
        return view('admin.viewevent',$data);
    }
    public function viewupdateevent($id)
    {
        $data['result']=event::where('id',$id)->get();
        return view('admin.updateevent',$data);
    }

    public function viewvenue()
    {
        $data['result']=$this->obj5->selectvenue('venues');
        return view('admin.viewvenue',$data);
    }
    public function viewupdatevenue($id)
    {
        $data['result']=venue::where('id',$id)->get();
        return view('admin.updatevenue',$data);
    }

    public function viewbooking()
    {
        $data['result']=userbook::get();
        return view('admin.viewbooking',$data);
    }




    //update table
    public function updateabout(request $req)
    {
        $name=$req->input('about');
        $data=['about'=>$name];
        $this->obj1->updates('abouts',$data);
        return redirect('/viewabout');
    }

    public function serviceupdate(request $req,$id)
    {
        // $data['result']=service::get();
        // return view('admin.updateservice',$data);

        $service=$req->input('service');
        $description=$req->input('description');
        $price=$req->input('price');
        $image=$req->file('image');
        // echo $image;
        // exit();
        if($image=="")
        {
            $data=['service'=>$service,
                    'description'=>$description,
                    's_price'=>$price];
        }
        else{
           
            $filename=$image->getClientOriginalName();
            $image->move(public_path().'/uploads/',$filename);
        $data=['name'=>$service,
                'description'=>$description,
                's_price'=>$price,
                'image'=>$filename];
                // print_r($data);
                // exit();
        }
        $this->obj2->updateservice('services',$data,$id);
        return redirect('/viewservice');
    }

    public function galleryupdate(request $req,$id)
    {
        $name=$req->input('event');
        $gallery=$req->file('gallery');
        if($gallery=="")
        {
            $data=['name'=>$name];
        }
        else{
           
            $filename=$gallery->getClientOriginalName();
            $gallery->move(public_path().'/uploads',$filename);
            $data=['name'=>$name,
            'gallery'=>$filename];
        }
       
       $this->obj3->updategallery('galleries',$data,$id);
       return redirect('/viewgallery');
    }

    public function eventupdate(request $req,$id)
    {
        // $data['result']=service::get();
        // return view('admin.updateservice',$data);

        $name=$req->input('name');
        $description=$req->input('description');
        $image=$req->file('image');
        if($image=="")
        {
            $data=['name'=>$name,
            'description'=>$description];
        }
        else{
           
            $filename=$image->getClientOriginalName();
            $image->move(public_path().'/uploads/',$filename);
        $data=['name'=>$name,
                'description'=>$description,
                'image'=>$filename];
        }
        $this->obj4->updateevent('events',$data,$id);
        return redirect('/viewevent');
    }

    public function venueupdate(request $req,$id)
    {
        $district=$req->input('district');
        $location=$req->input('location');
        $venue=$req->input('venue');
        $price=$req->input('price');
        $image=$req->file('image');
        if($image=="")
        {
            $data=['district'=>$district,
            'location'=>$location,
            'venuetype'=>$venue,
            'price'=>$price];
        }
        else{
           
            $filename=$image->getClientOriginalName();
            $image->move(public_path().'/uploads/',$filename);
        $data=['district'=>$district,
                'location'=>$location,
                'venuetype'=>$venue,
                'price'=>$price,
                'image'=>$filename];
        }
        $this->obj5->updatevenue('venues',$data,$id);
        return redirect('/viewvenue');
    }


    //approve and delened
    public function approve($id)
    {
        $data=['status'=>"Approved"];
        $this->obj6->approvebook('userbooks',$data,$id);
        return redirect('/viewbooking');
    }
    public function decline($id)
    {
        $data=['status'=>"Declined"];
        $this->obj6->approvebook('userbooks',$data,$id);
        return redirect('/viewbooking');
    }
    
        //bill generate
    public function generatebill($id)
    {
        $data['result']=userdetail::join('userbooks','userdetails.id','=','userbooks.user_id')
        ->join('venues','venues.id','=','userbooks.venue')->where('b_id',$id)->get();
        return view('admin.generatebill',$data);
    }

    public function venuejoin($id)
    {
        $data['result']=venue::join('userbooks','venue.id','=','userbooks.venue')->get();
        return view('admin.generatebill',$data);
    }
    
    

    


    //contact
    public function contactadmin()
    {
        $data['result']=contact::get();
        return view('admin.contactadmin',$data);
    }

    // public function adminr()
    // {
    //     $data['result']=$this->obj7->selectcontact('contacts');
    //     return view('admin.adminreply');
    // }
    
    

}

