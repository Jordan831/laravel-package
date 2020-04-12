<?php
use Illuminate\Http\Request;
Route::group(['namespace'=>'Vikram\Contact\http\controller','middleware' => ['web']],function(){
Route::get('contact','ContactController@index')->name('contact');

Route::post('submit','ContactController@store')->name('submit');
});
 ?>
