<?php

Route::get('/', 'ChatController@index');

Route::get('test', function () {
    return 'Hello World';
});

Route::post('CheckSession', 'ChatController@CheckSession');
Route::post('authenticateUser', 'ChatController@AuthUser');
Route::post('RegisterUser', 'ChatController@RegisterUser');
Route::post('RegisterbyFacebook', 'ChatController@RegisterbyFacebook');
Route::post('Logout', 'ChatController@Logout');
Route::get('Activate/{token?}', 'ChatController@Verify');
Route::get('ActivateFB/{token?}', 'ChatController@VerifyFB');
Route::post('CheckFBStatus', 'ChatController@CheckFBStatus');
Route::post('VerifyUser', 'ChatController@VerifyUser');
Route::post('CompleteRegistration', 'ChatController@CompleteRegistration');
Route::post('ResetPassword', 'ChatController@ResetPassword');
Route::post('GetMembers', 'ChatController@GetMembers');
Route::post('GetLocation', 'ChatController@GetLocation');
Route::post('GetProfile', 'ChatController@GetProfile');
Route::post('getFriendProfile', 'ChatController@getFriendProfile');
Route::post('updateProfileName', 'ChatController@updateProfileName');
Route::post('updateAboutMe', 'ChatController@updateAboutMe');
Route::post('updateRelationship', 'ChatController@updateRelationship');
Route::post('updateSexuality', 'ChatController@updateSexuality');
Route::post('updateHeight', 'ChatController@updateHeight');
Route::post('updateWeight', 'ChatController@updateWeight');
Route::post('updateBody', 'ChatController@updateBody');
Route::post('updateChildren', 'ChatController@updateChildren');
Route::post('updateSmoking', 'ChatController@updateSmoking');
Route::post('updateDrinking', 'ChatController@updateDrinking');
Route::post('updateEducation', 'ChatController@updateEducation');
Route::post('updateJob', 'ChatController@updateJob');
Route::post('updateCompany', 'ChatController@updateCompany');
Route::post('updateIncome', 'ChatController@updateIncome');
Route::post('updateEyecolor', 'ChatController@updateEyecolor');
Route::post('updateHaircolor', 'ChatController@updateHaircolor');
Route::post('updateLiving', 'ChatController@updateLiving');
Route::post('updateContactUs', 'ChatController@updateContactUs');
Route::post('updateSearchResult', 'ChatController@updateSearchResult');
Route::post('getUserAddress', 'ChatController@getUserAddress');
Route::post('getTopUsers', 'ChatController@getTopUsers');
Route::post('updateLocation', 'ChatController@updateLocation');
Route::post('addToFavorites', 'ChatController@addToFavorites');
Route::post('addToLikes', 'ChatController@addToLikes');
Route::post('addToBlock', 'ChatController@addToBlock');
Route::post('checkFavorite', 'ChatController@checkFavorite');
Route::post('checkLikes', 'ChatController@checkLikes');
Route::post('checkBlock', 'ChatController@checkBlock');
Route::post('updateOwnSession', 'ChatController@updateOwnSession');
Route::post('getFavoriteList', 'ChatController@getFavoriteList');
Route::post('getLikesList', 'ChatController@getLikesList');
Route::post('PushNotification', 'ChatController@PushNotification');
Route::post('doSubscribe', 'ChatController@doSubscribe');
Route::post('getCoins', 'ChatController@getCoins');







Route::post('resendOTP', 'ChatController@resendOTP');
Route::post('verifyOTP', 'ChatController@verifyOTP');








Route::get('fetch', 'PublicController@fetch');
Route::get('home', 'HomeController@index');
Route::get('welcomedesign', 'PublicController@Design');

