<?php

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
    // return '?';
    // return view('hello');
    return view('welcome');
});

// Route::get('/', function () {
//     // return '?';
//     // return view('hello');
//     return view('welcome');
// });

// Route::get('/test',function(){
//     // return 'get';
//     return view('hello');
// });

// Route::post('/test',function(){
//     // return 'get';
//     return view('hello');
// });

// Route::put('/test',function(){
//     // return 'get';
//     return view('hello');
// });

// Route::delete('/test',function(){
//     // return 'get';
//     return view('hello');
// });

// // 一次定义多个（不推荐使用，不方便管理）
// Route::match(['get','post'],'/match',function(){
//     return view('match');
// });

// //传参（如果不传参会报404）
// Route::get('test/{id}',function($id = 0){
//     var_dump($id);
// });

// //传参（可以传，可以不传，但函数的形参要有默认值，否则会显示变量未定义）
// Route::get('test/{id?}',function($id = 0){
//     var_dump($id);
// });

// //参数限制（参数不符报404）
// Route::get('test/{id}',function($id){
//     var_dump($id);
// })->where(['id'=>'\d+']);

// //参数限制（参数不符报错）
// Route::get('test/{id}',function(int $id){
//     var_dump($id);
// });

// // 路由别名（在代码中调用要严格使用别名，在浏览器访问要直接访问真名）
// Route::get('a/{id}',function(){
//     return '<a href="'.route('bb').'">go to b</a>';
// })->name('aa');//别名

// Route::get('b',function(){
//     return '<a href="'.route('aa',['id'=>100]).'">go to a</a>'; //带参数
// })->name('bb'); //别名

// //路由分组
// Route::group(['prefix'=>'admin'],function(){
//     Route::get('test',function(){
//         echo 'admin/test';
//     });
//     Route::get('group',function(){
//         echo 'admin/group';
//     });
// });

// //控制器访问
// //             url         控制器@方法
// Route::get('demo/index','DemoController@index');

// //             url         命名空间\控制器@方法
// Route::get('admin/login/{id?}','Admin\Login@index');    //注意命名空间的斜杠 \ 
Route::post('admin/login','Admin\Login@login')->name('login');    //注意命名空间的斜杠 \ 
Route::get('admin/login','Admin\Login@index')->name('login');

Route::post('user/index','User@index');

