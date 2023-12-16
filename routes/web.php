<?php

use Illuminate\Support\Facades\Redirect;
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

Route::get('/', 'FrontController@index')->name('mainpage');

Route::get('firebase','FirebaseController@index');

Auth::routes();

Route::match(['get','post'], '/edit', 'HomeController@editProfile')->name('Edit');

Route::get('/buyPass', function () { return view('buyPass'); })->name('buyPass');

Route::get('/404', 'FrontController@index_404')->name('404');

Route::get('/coachList', 'DataBaseController@index_coach')->name('coachList');
Route::match(['get','post'], '/coach/{id}/delete', 'DataBaseController@coachDelete')->name('coachDelete');
Route::match(['get','post'], '/coach/{id}/edit', 'DataBaseController@coachEdit')->name('coachEdit');
Route::match(['get','post'], '/coachNew', 'DataBaseController@createNewCoach')->name('coachNew');

Route::get('/areaList', 'DataBaseController@index_area')->name('areaList');
Route::match(['get','post'], '/areaNew', 'DataBaseController@createNewArea')->name('areaNew');
Route::match(['get','post'], '/area/{id}/edit', 'DataBaseController@areaEdit')->name('areaEdit');
Route::match(['get','post'], '/area/{id}/delete', 'DataBaseController@areaDelete')->name('areaDelete');

Route::get('/clubList', 'DataBaseController@index_club')->name('clubList');
Route::match(['get','post'], '/clubNew', 'DataBaseController@createNewClub')->name('clubNew');
Route::match(['get','post'], '/club/{id}/edit', 'DataBaseController@clubEdit')->name('clubEdit');
Route::match(['get','post'], '/club/{id}/delete', 'DataBaseController@clubDelete')->name('clubDelete');

Route::get('/newsList', 'DataBaseController@index_news')->name('newsList');
Route::match(['get','post'], '/newsNew', 'DataBaseController@createNewNews')->name('newsNew');
Route::match(['get','post'], '/news/{id}/edit', 'DataBaseController@newsEdit')->name('newsEdit');
Route::match(['get','post'], '/news/{id}/delete', 'DataBaseController@newsDelete')->name('newsDelete');
// Блог нов
Route::get('/blogList', 'DataBaseController@index_blog')->name('blogList');
Route::match(['get','post'], 'blogNew', 'DataBaseController@createNewBlog')->name('blogNew');
Route::match(['get','post'], '/blog/{id}/edit', 'DataBaseController@blogEdit')->name('blogEdit');
Route::match(['get','post'], '/blog/{id}/delete', 'DataBaseController@blogDelete')->name('blogDelete');


Route::get('/upstudentList', 'DataBaseController@index_upstudent')->name('upstudentList');
Route::match(['get','post'], '/upstudentNew', 'DataBaseController@createNewUpstudent')->name('upstudentNew');
Route::match(['get','post'], '/upstudent/{id}/edit', 'DataBaseController@upstudentEdit')->name('upstudentEdit');
Route::match(['get','post'], '/upstudent/{id}/delete', 'DataBaseController@upstudentDelete')->name('upstudentDelete');


Route::get('/kinshipList', 'HomeController@index_kinship')->name('kinshipList');
Route::match(['get','post'], '/kinshipNew', 'HomeController@createNewKinship')->name('kinshipNew');
Route::match(['get','post'], '/kinship/{id}/edit', 'HomeController@kinshipEdit')->name('kinshipEdit');

Route::get('/club_{id}', 'FrontController@index_club')->name('club');

Route::post('/findCoachOnPhone', 'DataBaseController@findCoachOnPhone')->name('findCoachOnPhone');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontController@home_index2')->name('/');

Route::get('/home', function () {
    return redirect('/', 301);
})->name('home');

Route::get('/home2', 'FrontController@home_index')->name('home2');





Route::get('/methods/{id}', 'FrontController@index_methods')->name('methods');
Route::get('/clubs', 'FrontController@index_clubslist')->name('clubs');
Route::get('/news', 'FrontController@index_news')->name('news');
Route::get('/news/{id}', 'FrontController@index_post')->name('post');

Route::get('/blog', 'FrontController@index_blog')->name('blog');
Route::get('/blog/{id}', 'FrontController@index_blogpost')->name('blogpost');


Route::get('/faq', 'FrontController@index_faq')->name('faq');
Route::get('/admin', 'FrontController@index_login')->name('admin');
//Route::post('/admin', 'FrontController@index_login')->name('admin');
//Route::match(['get','post'], '/admin', 'FrontController@index_login')->name('admin');
//Route::get('/login', 'FrontController@index_login')->name('login');

Route::get('/register', 'FrontController@index_register')->name('register');
Route::get('/championats', 'FrontController@index_championats')->name('championats');
Route::post('/sendbackcall/{id}', 'FrontController@backCall')->name('backCall');
Route::get('/camp', 'FrontController@index_camp')->name('camp');
Route::get('/camp_old/{district}', 'FrontController@index_district_old')->name('district');

//quiz новая страница

Route::get('/quiz_ret', 'FrontController@index_quiz')->name('quiz_ret');



// страницы лагерей
Route::get('/camp/{district}', 'FrontController@index_district')->name('district');

Route::post('/sendbackcall/{id}', 'FrontController@backCall')->name('backCall');
Route::get('/championship', 'FrontController@index_championship')->name('championship');
// Каталог лагерей
Route::get('/catalog', 'FrontController@catalog')->name('catalog');
Route::get('/catalog2', 'FrontController@catalog2')->name('catalog2');


//Route::get('/home', 'FrontController@home_index2')->name('home');

// CRM Каталог программ

Route::match(['get','post'], '/programNew', 'DataBaseController@createNewProgram')->name('programNew');
Route::get('/programList', 'CrmController@index_program')->name('programList');
Route::match(['get','post'], '/program/{id}/delete', 'DataBaseController@programDelete')->name('programDelete');
Route::match(['get','post'], '/program/{id}/edit', 'DataBaseController@programEdit')->name('programEdit');

Route::post('/program/{id}/duplicate', 'DataBaseController@duplicateProgram')->name('duplicateProgram');

// CRM Каталог лагерей

//Route::match(['get','post'], '/tariffNew', 'DataBaseController@createNewTariff')->name('tariffNew');
Route::match(['get','post'], '/catcampNew', 'DataBaseController@createNewCatcamp')->name('catcampNew');
Route::get('/catcampList', 'CrmController@index_catcamp')->name('catcampList');
Route::match(['get','post'], '/catcamp/{id}/delete', 'DataBaseController@catcampDelete')->name('catcampDelete');
Route::match(['get','post'], '/catcamp/{id}/edit', 'DataBaseController@catcampEdit')->name('catcampEdit');


/* *** Магазин ***  */
Route::get('/shop', 'FrontController@index_shop')->name('shop');
Route::get('/shop2', 'FrontController@shop2')->name('shop2');

Route::match(['get','post'], '/shop/{id}/view', 'FrontController@view_shop')->name('viewShop');


// Категории магазина
Route::match(['get','post'], '/categoryShopCreate', 'ShopController@createCategoryShop')->name('categoryShopCreate');
Route::get('/categoryList', 'ShopController@indexCategoryShop')->name('categoryList');
Route::match(['get','post'], '/shop/{id}/delete', 'ShopController@categoryDelete')->name('categoryDelete');
Route::match(['get','post'], '/shop/{id}/edit', 'ShopController@categoryShopEdit')->name('categoryShopEdit');

// Товары магазина

Route::match(['get','post'], '/productNew', 'ShopController@createProduct')->name('productNew');
Route::get('/productList', 'ShopController@indexProduct')->name('productList');
Route::match(['get','post'], '/shop/products/{id}/delete', 'ShopController@productDelete')->name('productDelete');
Route::match(['get','post'], '/shop/products/{id}/edit', 'ShopController@productEdit')->name('productEdit');



// Новый лагерь
//Route::get('/camp2', 'FrontController@index_camp2')->name('camp2');
Route::get('/camp2', 'FrontController@index_camp2')->name('camp2');
// wekeends
Route::get('/weekend', 'FrontController@index_wekeend')->name('weekend');


Route::post('/sendbackcallproduct', 'FrontController@backCallProduct')->name('backCallProduct');

Route::post('/sendbackcall2', 'FrontController@backCall2')->name('backCall2');

Route::post('/sendbackphone', 'FrontController@backCallPhone')->name('backCallPhone');
//Route::post('/upload-image', 'FrontController@uploadImage')->name('uploadImage');
Route::post('/upload-image2', 'DataBaseController@uploadImage2')->name('uploadImage2');

Route::post('/upload_image', 'ImageUploadController@upload')->name('upload');


Route::get('/clients', 'CrmController@index_clients')->name('clients');
Route::post('/clients/insertNewData', 'CrmController@insertNewData')->name('insertNewData');
Route::get('/query', 'CrmController@index_query')->name('query');
Route::post('clients/updateitem', 'CrmController@updateitem')->name('updateitem');

Route::get('/request', 'CrmController@index_request')->name('request');


Route::post('/getKidData', 'CrmController@getKidData')->name('getKidData');
Route::post('changeKidData/{id}', 'CrmController@changeKidData')->name('changeKidData');
Route::post('/getUsersData', 'CrmController@getUsersData')->name('getUsersData');
Route::post('changeUsersData/{id}', 'CrmController@changeUsersData')->name('changeUsersData');

Route::post('/clients/camp/insertNewData', 'CrmController@insertNewData_camp')->name('insertNewData_camp');
Route::post('clients/camp/updateitem', 'CrmController@updateitem_camp')->name('updateitem_camp');
Route::get('/clients/camp', 'CrmController@index_clients_camp')->name('clients_camp');
Route::post('/sendCampInfo', 'FrontController@sendCampInfo')->name('sendCampInfo');




// Таблица расписаний

Route::match(['get','post'], '/scheduleNew', 'DataBaseController@createNewSchedule')->name('scheduleNew');
Route::get('/schedule', 'CrmController@index_schedule')->name('schedule');
Route::match(['get','post'], '/schedule/{id}/delete', 'DataBaseController@scheduleDelete')->name('scheduleDelete');
Route::match(['get','post'], '/schedule/{id}/edit', 'DataBaseController@scheduleEdit')->name('scheduleEdit');


// Редактирование фото

Route::get('/editPhoto/{id}/', 'DataBaseController@editPhoto')->name('editPhoto');
Route::post('/updatePhoto/{id}/', 'DataBaseController@updatePhoto')->name('updatePhoto');
Route::delete('/delete-photo/{id}', 'DataBaseController@deletePhoto')->name('deletePhoto');

Route::get('/editPhotoClub/{id}/', 'DataBaseController@editPhotoClub')->name('editPhotoClub');
Route::post('/updatePhotoClub/{id}/', 'DataBaseController@updatePhotoClub')->name('updatePhotoClub');
Route::delete('/delete-photo-club/{id}', 'DataBaseController@deletePhotoClub')->name('deletePhotoClub');

Route::get('/editPhotoUniform/{id}/', 'DataBaseController@editPhotoUniform')->name('editPhotoUniform');
Route::post('/updatePhotoUniform/{id}/', 'DataBaseController@updatePhotoUniform')->name('updatePhotoUniform');
Route::delete('/delete-photo-uniform/{id}', 'DataBaseController@deletePhotoUniform')->name('deletePhotoUniform');
Route::post('wekeends/{id}/update-order',  'DataBaseController@updateOrder')->name('updateOrder');


// Таблица расписания crm на weekend

Route::match(['get','post'], '/campgraficNew/{id}/', 'DataBaseController@createCampgraficNew')->name('campgraficNew');
Route::get('/index_campschedule/{id}/', 'CrmController@index_campschedule')->name('index_campschedule');
Route::get('/editCampgrafic/{id}/', 'DataBaseController@editCampgrafic')->name('editCampgrafic');
Route::post('/updateCampgrafic/{id}/', 'DataBaseController@updateCampgrafic')->name('updateCampgrafic');
Route::post('/deleteCampgrafic/{id}/', 'DataBaseController@deleteCampgrafic')->name('deleteCampgrafic');


// Распорядок дня

Route::match(['get','post'], '/dailyNew/{id}/', 'DataBaseController@createDailyNew')->name('dailyNew');
Route::get('/index_dailyschedule/{id}/', 'CrmController@index_dailyschedule')->name('index_dailyschedule');
Route::get('/editDaily/{id}/', 'DataBaseController@editDaily')->name('editDaily');
Route::post('/updateDaily/{id}/', 'DataBaseController@updateDaily')->name('updateDaily');
Route::post('/deleteDaily/{id}/', 'DataBaseController@deleteDaily')->name('deleteDaily');

// стоимость участия

Route::match(['get','post'], '/priceNew/{id}/', 'DataBaseController@createPriceNew')->name('priceNew');
Route::get('/index_price/{id}/', 'CrmController@index_price')->name('index_price');
Route::get('/editPrice/{id}/', 'DataBaseController@editPrice')->name('editPrice');
Route::post('/updatePrice/{id}/', 'DataBaseController@updatePrice')->name('updatePrice');
Route::post('/deletePrice/{id}/', 'DataBaseController@deletePrice')->name('deletePrice');

// Детали

Route::match(['get','post'], '/detailsNew/{id}/', 'DataBaseController@createDetailsNew')->name('detailsNew');
Route::get('/index_details/{id}/', 'CrmController@index_details')->name('index_details');
Route::get('/editDetails/{id}/', 'DataBaseController@editDetails')->name('editDetails');
Route::post('/updateDetails/{id}/', 'DataBaseController@updateDetails')->name('updateDetails');
Route::post('/deleteDetails/{id}/', 'DataBaseController@deleteDetails')->name('deleteDetails');


// Таблица тарифов

Route::match(['get','post'], '/tariffNew', 'DataBaseController@createNewTariff')->name('tariffNew');
Route::get('/tariff', 'CrmController@index_tariff')->name('tariff');
Route::match(['get','post'], '/tariff/{id}/delete', 'DataBaseController@tariffDelete')->name('tariffDelete');
Route::match(['get','post'], '/tariff/{id}/edit', 'DataBaseController@tariffEdit')->name('tariffEdit');



// Календарь соревнований


Route::match(['get','post'], '/calendarNew', 'DataBaseController@createNewCalendar')->name('calendarNew');
Route::get('/calendar', 'CrmController@index_calendar')->name('calendar');
Route::match(['get','post'], '/calendar/{id}/delete', 'DataBaseController@calendarDelete')->name('calendarDelete');
Route::match(['get','post'], '/calendar/{id}/edit', 'DataBaseController@calendarEdit')->name('calendarEdit');


// Календарь соревнований


Route::match(['get','post'], '/seasonNew', 'DataBaseController@createNewSeason')->name('seasonNew');
Route::get('/season', 'CrmController@index_season')->name('season');
Route::match(['get','post'], '/season/{id}/delete', 'DataBaseController@seasonDelete')->name('seasonDelete');
Route::match(['get','post'], '/season/{id}/edit', 'DataBaseController@seasonEdit')->name('seasonEdit');

Route::match(['get','post'], '/seasonPlayerNew', 'DataBaseController@createNewSeasonPlayer')->name('seasonPlayerNew');
Route::get('/season-player', 'CrmController@index_season_player')->name('season_player');
Route::match(['get','post'], '/season-player/{id}/delete', 'DataBaseController@seasonPlayerDelete')->name('seasonPlayerDelete');
Route::match(['get','post'], '/season-player/{id}/edit', 'DataBaseController@seasonPlayerEdit')->name('seasonPlayerEdit');


// Таблица абонементов

Route::match(['get','post'], '/abonementNew', 'DataBaseController@createNewAbonement')->name('abonementNew');
Route::get('/abonement', 'CrmController@index_abonement')->name('abonement');
Route::match(['get','post'], '/abonement/{id}/delete', 'DataBaseController@abonementDelete')->name('abonementDelete');
Route::match(['get','post'], '/abonement/{id}/edit', 'DataBaseController@abonementEdit')->name('abonementEdit');


Route::get('/referal', 'FrontController@index_referal')->name('referal');


// Таблица тарифов на главной странице

Route::match(['get','post'], '/tarifflistNew', 'DataBaseController@createNewTarifflist')->name('tarifflistNew');
Route::get('/tarifflist', 'CrmController@index_tarifflist')->name('tarifflist');
Route::match(['get','post'], '/tarifflist/{id}/delete', 'DataBaseController@tarifflistDelete')->name('tarifflistDelete');
Route::match(['get','post'], '/tarifflist/{id}/edit', 'DataBaseController@tarifflistEdit')->name('tarifflistEdit');


// Страница соревнования

Route::get('/champion', 'CrmController@index_champion')->name('champion');



// Скачивание

Route::post('/sendbackcall3', 'FrontController@backCall3')->name('backCall3');

// Скачивание программы
Route::post('/sendbackcall4', 'FrontController@backCall4')->name('backCall4');



Route::post('selecttariff', 'FrontController@selectTariff')->name('selecttariff');
Route::post('selecttariffmob', 'FrontController@selectTariffMob')->name('selecttariffmob');


Route::get('/vk', function () {
    return Redirect::to('https://schoolball.ru/home?utm_source=vk&utm_medium=social&utm_campaign=bio', 301);
});

Route::get('/inst', function () {
    return Redirect::to('https://schoolball.ru/home?utm_source=instagram&utm_medium=social&utm_campaign=bio', 301);
});


Route::match(['get','post'], '/mainindex/{id}/edit', 'DataBaseController@mainindexEdit')->name('mainindexEdit');
Route::match(['get','post'], '/camp/{id}/edit', 'DataBaseController@campEdit')->name('campEdit');
Route::match(['get','post'], '/wekeends/{id}/edit', 'DataBaseController@wekeendsEdit')->name('wekeendsEdit');
Route::delete('/wekeends/delete-image/{id}', 'DataBaseController@deleteWekeendsImage')->name('wekeendsDeleteImage');
Route::match(['get','post'], '/camp_schedule/{id}/edit', 'DataBaseController@campscheduleEdit')->name('campscheduleEdit');

// Таблица расписания


// Отзывы
Route::get('/reviewsList', 'DataBaseController@index_reviews')->name('reviewsList');
Route::match(['get','post'], '/reviewsNew', 'DataBaseController@createNewReviews')->name('reviewsNew');
Route::match(['get','post'], '/reviews/{id}/edit', 'DataBaseController@reviewsEdit')->name('reviewsEdit');

Route::match(['get','post'], '/reviews/{id}/delete', 'DataBaseController@reviewsDelete')->name('reviewsDelete');// Таблица расписания crm на weekend

Route::match(['get','post'], '/scheduleweekendNew', 'DataBaseController@createScheduleweekend')->name('scheduleweekendNew');
Route::get('/scheduleweekend', 'CrmController@index_scheduleweekend')->name('scheduleweekend');
Route::match(['get','post'], '/scheduleweekend/{id}/delete', 'DataBaseController@scheduleweekendDelete')->name('scheduleweekendDelete');
Route::match(['get','post'], '/scheduleweekend/{id}/edit', 'DataBaseController@scheduleweekendEdit')->name('scheduleweekendEdit');


// Видео отзывы
Route::get('/reviewsVideoList', 'DataBaseController@index_reviews_video')->name('reviewsVideoList');
Route::match(['get','post'], '/reviewsVideoNew', 'DataBaseController@createNewVideoReviews')->name('reviewsVideoNew');
Route::match(['get','post'], '/reviewsvideo/{id}/edit', 'DataBaseController@reviewsVideoEdit')->name('reviewsVideoEdit');

Route::match(['get','post'], '/reviewsvideo/{id}/delete', 'DataBaseController@reviewsVideoDelete')->name('reviewsVideoDelete');

Route::get('/politika-konfidencialnosti', function () {
    $file = Storage::disk('public')->get('documents/politica.pdf');

    return response($file, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="politica.pdf"',
    ]);
});


Route::get('/soglasie-na-obrabotku-personalnyh-dannyh', function () {
    $file = Storage::disk('public')->get('documents/agreements.pdf');

    return response($file, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="agreements.pdf"',
    ]);
});

Route::get('/polzovatelskoe-soglasenie', function () {
    $file = Storage::disk('public')->get('documents/user_agreement.pdf');

    return response($file, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="user_agreement.pdf"',
    ]);
});
