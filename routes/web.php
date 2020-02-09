<?php
/*
 * Front End Routes
 */

// home page
Route::get('/', function () {
    return view('front-end.views.home.index');
})->name('frontend.home');

// blog page
Route::get('/blog', function () {
    echo "Welcome to blog list page";
})->name('frontend.blog');

// blog details page
Route::get('/blog/{id}', function ($id) {
    echo "Welcome to blog detail page ".$id;
})->name('frontend.blog.view');

// about us page
Route::get('/about-us', function () {
    echo "Welcome to about us page";
})->name('frontend.about-us');

// contact us page
Route::get('/contact-us', function () {
    echo "Welcome to contact us page";
})->name('frontend.contact-us');

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
Route::get('/admin/', function () {
    echo "Welcome administration panel - Dashboard Page";
})->name('backend.dashboard');

// Category List Page
Route::get('/admin/categories', function () {
    echo "Welcome administration panel - category list Page";
})->name('backend.categories');

// Category Add Page
Route::get('/admin/categories/add', function () {
    echo "Welcome administration panel - category add Page";
})->name('backend.categories.add');

// Category store action
Route::post('/admin/categories/store', function () {
    echo "Welcome administration panel - category store Page";
})->name('backend.categories.store');

// Category Edit Page
Route::get('/admin/categories/edit/{$id}', function ($id) {
    echo "Welcome administration panel - category edit Page - ".$id;
})->name('backend.categories.edit');

// Category update action
Route::patch('/admin/categories/update', function () {
    echo "Welcome administration panel - category update Page";
})->name('backend.categories.update');

// Category delete action
Route::delete('/admin/categories/delete', function () {
    echo "Welcome administration panel - category delete action";
})->name('backend.categories.delete');

// Blog List Page
Route::get('/admin/blogs', function () {
    echo "Welcome administration panel - blog list Page";
})->name('backend.blogs');

// Blog Add Page
Route::get('/admin/blogs/add', function () {
    echo "Welcome administration panel - blog add Page";
})->name('backend.blogs.add');

// Blog store action
Route::post('/admin/blogs/store', function () {
    echo "Welcome administration panel - blog store Page";
})->name('backend.blogs.store');

// Blog Edit Page
Route::get('/admin/blogs/edit/{$id}', function ($id) {
    echo "Welcome administration panel - blog edit Page - ".$id;
})->name('backend.blogs.edit');

// Blog update action
Route::patch('/admin/blogs/update', function () {
    echo "Welcome administration panel - blog update Page";
})->name('backend.blogs.update');

// Blog delete action
Route::delete('/admin/blogs/delete', function () {
    echo "Welcome administration panel - blog delete action";
})->name('backend.blogs.delete');

