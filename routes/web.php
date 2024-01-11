<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();
Route::get('/delete-my-data',[\App\Http\Controllers\PrivacyController::class,'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('feedbackuser', 'App\Http\Controllers\FeedBackUserController');
Route::resource('customer', 'App\Http\Controllers\CustomerController');
    Route::resource('human-resource', 'App\Http\Controllers\HRController');
    Route::resource('operationeds', 'App\Http\Controllers\OperationEdsController');
    Route::resource('operationedc', 'App\Http\Controllers\OperationEdcController');
    Route::resource('shift', 'App\Http\Controllers\ShiftController');
    Route::resource('finance', 'App\Http\Controllers\FinanceController');
    Route::resource('employee', 'App\Http\Controllers\EmployeeController');
    Route::resource('user', 'App\Http\Controllers\UserController');
    Route::resource('department', 'App\Http\Controllers\DepartmentController');
    Route::resource('position', 'App\Http\Controllers\PositionController');
    Route::resource('mcscr', 'App\Http\Controllers\MCSCRController');
    Route::resource('expenses', 'App\Http\Controllers\ExpensesController');
    Route::resource('quotation', 'App\Http\Controllers\QuotationController');
    Route::resource('invoice', 'App\Http\Controllers\InvoiceController');
    Route::resource('notifications', 'App\Http\Controllers\NotificationsController');
    Route::resource('profile', 'App\Http\Controllers\ProfilesController');
    Route::resource('helpcenter', 'App\Http\Controllers\HelpCenterController');
    Route::resource('config', 'App\Http\Controllers\ConfigController');
    Route::resource('category', 'App\Http\Controllers\CategoryController');
    Route::resource('process_salary', 'App\Http\Controllers\ProcessSalary');
    Route::resource('salary', 'App\Http\Controllers\Salary');
    Route::resource('subscription', 'App\Http\Controllers\SubscriptionController');
    Route::resource('lang', 'App\Http\Controllers\LangController');
    Route::resource('absence', 'App\Http\Controllers\AbsenceController');
    Route::resource('edcuser', 'App\Http\Controllers\EdcUserController');
    Route::resource('edcuseronline', 'App\Http\Controllers\EdcUserOnlineController');
    Route::resource('edsuseronline', 'App\Http\Controllers\EdsUserOnlineController');
    Route::resource('reports', 'App\Http\Controllers\ReportsController');
    Route::resource('accountmanagement', 'App\Http\Controllers\AccountManagementController');
    Route::post('/searchinvoice',[\App\Http\Controllers\InvoiceController::class,'searchinvoice']);
    Route::get('/deleteall',[\App\Http\Controllers\NotificationsController::class,'deleteall']);
    Route::get('/alluser',[\App\Http\Controllers\EdcUserController::class,'alluser']);
    Route::get('/search',[\App\Http\Controllers\EdcUserController::class,'search']);
    Route::get('/searchonline',[\App\Http\Controllers\EdcUserOnlineController::class,'search']);
    Route::get('/searchonlineeds',[\App\Http\Controllers\EdsUserOnlineController::class,'search']);
    

    

 //INOGEST ATAS
    Route::get('/inogest-atas',[\App\Http\Controllers\AtasController::class,'index']);
    Route::get('/inogest-atas/faturas',[\App\Http\Controllers\AtasController::class,'invoice']);
    Route::get('/inogest-atas/organizacao',[\App\Http\Controllers\AtasController::class,'organizacao']);

    Route::get('/inosecure',[\App\Http\Controllers\InosecureController::class,'index']);
    Route::get('/inosecure/user/in',[\App\Http\Controllers\InosecureController::class,'userin']);
    Route::get('/inosecure/user/out',[\App\Http\Controllers\InosecureController::class,'userout']);

    Route::get('/inosecure/guest/in',[\App\Http\Controllers\InosecureController::class,'guestin']);
    Route::get('/inosecure/guest/out',[\App\Http\Controllers\InosecureController::class,'guestout']);
    Route::resource('price', 'App\Http\Controllers\PriceController');
    Route::resource('voucher', 'App\Http\Controllers\VoucherController');
    Route::resource('vouchereds', 'App\Http\Controllers\VoucherEdsController');
     Route::resource('activity', 'App\Http\Controllers\ActivityController');
     
    Route::resource('meeting', 'App\Http\Controllers\MeetingController');
    Route::resource('meetingparticipant', 'App\Http\Controllers\MeetingParticipantController');
    Route::resource('meetingtask', 'App\Http\Controllers\MeetingTaskController');
    Route::get('/download-ata/{meeting}',[\App\Http\Controllers\MeetingController::class,'download']);
    Route::post('/sendmail/participant', [App\Http\Controllers\MeetingController::class, 'sendmail'])->name('home');




/*
// Rota para administrador
Route::group(['middleware'=>['auth','admin']], function(){
Route::resource('customer', 'App\Http\Controllers\CustomerController');
    Route::resource('human-resource', 'App\Http\Controllers\HRController');
    Route::resource('finance', 'App\Http\Controllers\FinanceController');
    Route::resource('employee', 'App\Http\Controllers\EmployeeController');
    Route::resource('user', 'App\Http\Controllers\UserController');
    Route::resource('position', 'App\Http\Controllers\PositionController');
   
    Route::resource('mcscr', 'App\Http\Controllers\MCSCRController');
    Route::resource('expenses', 'App\Http\Controllers\ExpensesController');
    Route::resource('quotation', 'App\Http\Controllers\QuotationController');
    Route::resource('invoice', 'App\Http\Controllers\InvoiceController');
    Route::resource('notifications', 'App\Http\Controllers\NotificationsController');
    Route::resource('profile', 'App\Http\Controllers\ProfilesController');
    Route::resource('helpcenter', 'App\Http\Controllers\HelpCenterController');
    Route::resource('config', 'App\Http\Controllers\ConfigController');
    Route::resource('category', 'App\Http\Controllers\CategoryController');
    Route::resource('process_salary', 'App\Http\Controllers\ProcessSalary');
    Route::resource('salary', 'App\Http\Controllers\Salary');
    Route::resource('subscription', 'App\Http\Controllers\SubscriptionController');
    Route::resource('lang', 'App\Http\Controllers\LangController');
    
    Route::post('/searchinvoice',[\App\Http\Controllers\InvoiceController::class,'searchinvoice']);
    Route::get('/deleteall',[\App\Http\Controllers\NotificationsController::class,'deleteall']);
    

});

Route::group(['middleware'=>['auth','user']], function(){
    Route::resource('customer', 'App\Http\Controllers\CustomerController');
    Route::resource('mcscr', 'App\Http\Controllers\MCSCRController');
    Route::resource('quotation', 'App\Http\Controllers\QuotationController');
    Route::resource('invoice', 'App\Http\Controllers\InvoiceController');
    Route::resource('profile', 'App\Http\Controllers\ProfilesController');
    Route::resource('category', 'App\Http\Controllers\CategoryController');
    Route::resource('lang', 'App\Http\Controllers\LangController');
    Route::resource('notifications', 'App\Http\Controllers\NotificationsController');
    Route::resource('expenses', 'App\Http\Controllers\ExpensesController');
    Route::post('/searchinvoice',[\App\Http\Controllers\InvoiceController::class,'searchinvoice']);
    Route::get('/deleteall',[\App\Http\Controllers\NotificationsController::class,'deleteall']);


});




*/