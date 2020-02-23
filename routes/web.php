<?php
/*
 * Front End Routes
 */

// home page
Route::get('/', 'Frontend\HomeController@index')->name('frontend.home');

Route::get('/hello', 'HelloController@hello')->name('frontend.hello.test');

// blog page
Route::get('/blog', 'Frontend\BlogController@index')->name('frontend.blog');

// blog details page
Route::get('/blog/{id}', 'Frontend\BlogController@view')->name('frontend.blog.view');

// about us page
Route::get('/about-us', 'Frontend\CmsController@aboutUs')->name('frontend.about-us');


// contact us page
Route::get('/contact-us', 'Frontend\CmsController@contactUs')->name('frontend.contact-us');

/*
 * Back End / Administration panel Routes
 */
// Login Page
Route::get('/admin/login', function () {
    echo "Welcome administration panel - login page";
})->name('backend.login');

// Logout Action
Route::get('/admin/logout', function () {
    echo "Welcome administration panel - logout page";
})->name('backend.logout');

// password reset page
Route::get('/admin/password/reset', function () {
    echo "Welcome administration panel - password reset page";
})->name('backend.password.reset');

// Dashboard Page
Route::get('/admin/', 'Backend\DashboardController@index')->name('backend.dashboard');

// Category List Page
Route::get('/admin/categories', 'Backend\CategoryController@index')->name('backend.categories');

// Category Add Page
Route::get('/admin/categories/add', 'Backend\CategoryController@create')->name('backend.categories.add');

// Category store action
Route::post('/admin/categories/store', 'Backend\CategoryController@store')->name('backend.categories.store');

// Category Edit Page
Route::get('/admin/categories/edit/{id}', 'Backend\CategoryController@edit')->name('backend.categories.edit');

// Category update action
Route::patch('/admin/categories/update', 'Backend\CategoryController@update')->name('backend.categories.update');

// Category delete action
Route::delete('/admin/categories/delete/{id}', 'Backend\CategoryController@delete')->name('backend.categories.delete');

// Blog List Page
Route::get('/admin/posts','Backend\PostController@index')->name('backend.posts');

// Blog Add Page
Route::get('/admin/posts/add', 'Backend\PostController@create')->name('backend.posts.add');

// Blog store action
Route::post('/admin/posts/store', 'Backend\PostController@store')->name('backend.posts.store');

// Blog Edit Page
Route::get('/admin/posts/edit/{id}', 'Backend\PostController@edit')->name('backend.posts.edit');

// Blog update action
Route::patch('/admin/posts/update', 'Backend\PostController@update')->name('backend.posts.update');

// Blog delete action
Route::delete('/admin/posts/delete/{id}', 'Backend\PostController@delete')->name('backend.posts.delete');

// Tag Add Page
Route::get('/admin/tags', 'Backend\TagController@index')->name('backend.tags.index');

// Tag Add Page
Route::get('/admin/tags/add', 'Backend\TagController@create')->name('backend.tags.add');

// Tag store action
Route::post('/admin/tags/store', 'Backend\TagController@store')->name('backend.tags.store');
