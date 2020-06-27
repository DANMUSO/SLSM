<?php
use RealRashid\SweetAlert\Facades\Alert;
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

Route::get('/', function () {
    Alert::success('Success Title', 'Success Message');

    return view('welcome');
});

Auth::routes();
//These are the routes. 
Route::get('/admin', 'HomeController@index')->name('home');
Route::resource('/admin/learners', 'Admin\LearnersController', ['as'=>'admin']);
Route::resource('/admin/formones', 'Admin\FormonesController', ['as'=>'admin']);
Route::resource('/admin/formtwos', 'Admin\FormtwosController', ['as'=>'admin']);
Route::resource('/admin/formthrees', 'Admin\FormthreesController', ['as'=>'admin']);
Route::resource('/admin/formfours', 'Admin\FormfoursController', ['as'=>'admin']);
Route::resource('/admin/formonefees', 'Admin\FormonefeesController', ['as' => 'admin']);
Route::resource('/admin/formtwofees', 'Admin\FormtwofeesController', ['as' => 'admin']);
Route::resource('/admin/formthreefees', 'Admin\FormthreefeesController', ['as' => 'admin']);
Route::resource('/admin/formfourfees', 'Admin\FormfourfeesController', ['as' => 'admin']);
Route::resource('/admin/performances', 'Admin\PerformancesController', ['as' => 'admin']);
//Route::resource('/admin/transports', 'Admin\TransportsController', ['as' => 'admin']);
//Route::resource('/admin/vehicles', 'Admin\vehiclesController', ['as' => 'admin']);
//Route::resource('/admin/fees', 'Admin\FeesController', ['as'=>'admin']);
Route::resource('/admin/examinations', 'Admin\ExaminationsController', ['as'=>'admin']);
//Route::resource('/admin/guardians', 'Admin\GuardiansController', ['as'=>'admin']);
//Route::resource('/admin/schoolbooks', 'Admin\SchoolbooksController', ['as'=>'admin']);
Route::resource('/admin/staffs', 'Admin\StaffsController', ['as'=>'admin']);
Route::resource('/admin/foneperformances', 'Admin\FoneperformancesController', ['as' => 'admin']);
Route::resource('/admin/ftwoperformances', 'Admin\FtwoperformancesController', ['as' => 'admin']);
Route::resource('/admin/fthreeperformances', 'Admin\FthreeperformancesController',['as' => 'admin']);
Route::resource('/admin/events', 'Admin\EventsController',['as' => 'admin']);
Route::resource('/admin/fleets', 'Admin\FleetsController',['as' => 'admin']);
Route::resource('/admin/awards', 'Admin\AwardsController',['as' => 'admin']);
Route::resource('/admin/institutions', 'Admin\InstitutionsController',['as' => 'admin']);
Route::resource('/admin/examinations', 'Admin\ExaminationsController',['as' => 'admin']);
Route::resource('/admin/feesettings', 'Admin\FeesettingController',['as' => 'admin']);
Route::get('events', 'EventController@index')->name('events.index');
Route::post('events', 'EventController@addEvent')->name('events.add');
Route::resource('/admin/formoneattendances', 'Admin\formoneattendancesController',['as' => 'admin']);
Route::resource('/admin/formtwoattendances', 'Admin\formtwoattendancesController',['as' => 'admin']);
Route::resource('/admin/formthreeattendances', 'Admin\formthreeattendancesController',['as' => 'admin']);
Route::resource('/admin/formfourattendances', 'Admin\formfourattendancesController',['as' => 'admin']);
Route::resource('/admin/deactivateformones', 'Admin\DeactivateformonesController',['as' => 'admin']);
Route::resource('/admin/timetableones', 'Admin\TimetableonesController',['as' => 'admin']);
Route::resource('/admin/timetabletwos', 'Admin\TimetabletwosController',['as' => 'admin']);
Route::resource('/admin/timetablethrees', 'Admin\TimetablethreesController',['as' => 'admin']);
Route::resource('/admin/timetanlefours', 'Admin\timetablefoursController',['as' => 'admin']);
Route::resource('/admin/academictimetables', 'Admin\academictimetablesController',['as' => 'admin']);
Route::resource('/admin/eventimetables', 'Admin\EventimetablesController',['as' => 'admin']);
Route::resource('/admin/enquiries', 'Admin\EnquirysController',['as' => 'admin']);
Route::resource('/admin/appointments', 'Admin\AppointmentsController',['as' => 'admin']);
Route::resource('/admin/inquiries', 'Admin\InquirysController',['as' => 'admin']);
Route::resource('/admin/courierinwards', 'Admin\CourierinwardsController',['as' => 'admin']);
Route::resource('/admin/courierforwards', 'Admin\CourierforwardsController',['as' => 'admin']);
Route::resource('/admin/staffattendances', 'Admin\StaffattendancesController',['as' => 'admin']);
Route::resource('/admin/schoolevents', 'Admin\SchooleventsController',['as' => 'admin']);
