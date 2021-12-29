<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maincontroller;
use App\Http\Controllers\usercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//admin view
Route::get('/adminhome',[maincontroller::class,'adminhome']);
Route::get('/adminlogin',[maincontroller::class,'adminlogin']);
Route::post('/alogin',[maincontroller::class,'alogin']);
Route::get('/addabout',[maincontroller::class,'addabout']);
Route::get('/addservice',[maincontroller::class,'addservice']);
Route::get('/addgallery',[maincontroller::class,'addgallery']);
Route::get('/addevent',[maincontroller::class,'addevent']);
Route::get('/addvenue',[maincontroller::class,'addvenue']);
Route::get('/viewabout',[maincontroller::class,'viewabout']);
Route::get('/viewservice',[maincontroller::class,'viewservice']);
Route::get('/viewgallery',[maincontroller::class,'viewgallery']);
Route::get('/viewevent',[maincontroller::class,'viewevent']);
Route::get('/viewvenue',[maincontroller::class,'viewvenue']);
Route::get('/viewbooking',[maincontroller::class,'viewbooking']);
Route::get('/viewfeedback',[maincontroller::class,'viewfeedback']);
//insert into table
Route::post('/adabout',[maincontroller::class,'adabout']);
Route::post('/adservice',[maincontroller::class,'adservice']);
Route::post('/adgallery',[maincontroller::class,'adgallery']);
Route::post('/adevent',[maincontroller::class,'adevent']);
Route::post('/advenue',[maincontroller::class,'advenue']);
Route::post('/bill/{b_id}',[maincontroller::class,'bill']);
//update table details
Route::post('/updateabout',[maincontroller::class,'updateabout']);
Route::get('/updateservice/{id}',[maincontroller::class,'viewupdateservice']);
Route::post('/serviceupdate/{id}',[maincontroller::class,'serviceupdate']);
Route::get('/updategallery/{id}',[maincontroller::class,'viewupdategallery']);
Route::post('/galleryupdate/{id}',[maincontroller::class,'galleryupdate']);
Route::get('/updateevent/{id}',[maincontroller::class,'viewupdateevent']);
Route::post('/eventupdate/{id}',[maincontroller::class,'eventupdate']);
Route::get('/updatevenue/{id}',[maincontroller::class,'viewupdatevenue']);
Route::post('/venueupdate/{id}',[maincontroller::class,'venueupdate']);
//approve and decline
Route::get('/approve/{id}',[maincontroller::class,'approve']);
Route::get('/decline/{id}',[maincontroller::class,'decline']);
Route::get('/logout',[maincontroller::class,'logout']);




//user view
Route::get('/',[usercontroller::class,'index']);
Route::get('/userlogin',[usercontroller::class,'userlogin']);
Route::get('/userreg',[usercontroller::class,'userreg']);
Route::post('/reg',[usercontroller::class,'reg']);
Route::post('/login',[usercontroller::class,'login']);
Route::get('/userhome',[usercontroller::class,'userhome']);
Route::get('/userbook',[usercontroller::class,'userbook']);
Route::post('/bookevent',[usercontroller::class,'bookevent']);
Route::get('/about',[usercontroller::class,'about']);
Route::get('/services',[usercontroller::class,'service']);
Route::get('/gallery',[usercontroller::class,'gallery']);
Route::get('/getvenue/{id}',[usercontroller::class,'getvenue']);
Route::post('/getvenueprice/{id}',[usercontroller::class,'getvenueprice']);
Route::get('/bookingdetails',[usercontroller::class,'bookingdetails']);
Route::get('/contacts',[usercontroller::class,'contacts']);
Route::post('/contacting',[usercontroller::class,'contacting']);
Route::get('/getvenueAmt/{id}',[usercontroller::class,'getvenueAmt']);
Route::get('/updateServ/{id}',[usercontroller::class,'updateServ']);
Route::get('/viewrecipt/{id}',[usercontroller::class,'viewbill']);
Route::get('/addfeedback',[usercontroller::class,'addfeedback']);
Route::post('/feedback',[usercontroller::class,'feedback']);
Route::get('/logout',[usercontroller::class,'ulogout']);
