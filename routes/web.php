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

Auth::routes();

Route::get('/', [App\Http\Controllers\EcommerceController::class, 'index'])->name('index');
Route::get('/index-2',[App\Http\Controllers\EcommerceController::class, 'index2'])->name('index2');
Route::get('/index-3',[App\Http\Controllers\EcommerceController::class, 'index3'])->name('index3');
Route::get('/index-4',[App\Http\Controllers\EcommerceController::class, 'index4'])->name('index4');
Route::get('/products',[App\Http\Controllers\EcommerceController::class, 'products'])->name('products');
Route::get('/products-with-filter',[App\Http\Controllers\EcommerceController::class, 'productsWithFilter'])->name('products-with-filter');
Route::get('/products-sidebar-left',[App\Http\Controllers\EcommerceController::class, 'productsSidebarLeft'])->name('products-sidebar-left');
Route::get('/products-sidebar-right',[App\Http\Controllers\EcommerceController::class, 'productsSidebarRight'])->name('products-sidebar-right');
Route::get('/product',[App\Http\Controllers\EcommerceController::class, 'product'])->name('product');
Route::get('/wishlist',[App\Http\Controllers\EcommerceController::class, 'wishlist'])->name('wishlist');
Route::get('/cart',[App\Http\Controllers\EcommerceController::class, 'cart'])->name('cart');
Route::get('/checkout',[App\Http\Controllers\EcommerceController::class, 'checkout'])->name('checkout');
Route::get('/order-received',[App\Http\Controllers\EcommerceController::class, 'orderReceived'])->name('order-received');
Route::get('/order-tracking',[App\Http\Controllers\EcommerceController::class, 'orderTracking'])->name('order-tracking');
Route::get('/page',[App\Http\Controllers\EcommerceController::class, 'page'])->name('page');
Route::get('/login-register',[App\Http\Controllers\EcommerceController::class, 'loginRegister'])->name('login-register');
Route::get('/404',[App\Http\Controllers\EcommerceController::class, 'Error404'])->name('Error404');
Route::get('/faqs',[App\Http\Controllers\EcommerceController::class, 'faqs'])->name('faqs');
Route::get('/about',[App\Http\Controllers\EcommerceController::class, 'about'])->name('about');
Route::get('/contact',[App\Http\Controllers\EcommerceController::class, 'contact'])->name('contact');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

##Route to ui template
Route::get('/apps-filemanager', [App\Http\Controllers\UiController::class, 'appsfilemanager'])->name('appsfilemanager');
Route::get('/auth-confirm-mail-2', [App\Http\Controllers\UiController::class, 'authconfirmmail2'])->name('authconfirmmail2');
Route::get('/auth-confirm-mail', [App\Http\Controllers\UiController::class, 'authconfirmmail'])->name('authconfirmmail');
Route::get('/auth-email-verification-2', [App\Http\Controllers\UiController::class, 'authemailverification2'])->name('authemailverification2');
Route::get('/auth-email-verification', [App\Http\Controllers\UiController::class, 'authemailverification'])->name('authemailverification');
Route::get('/auth-lock-screen-2', [App\Http\Controllers\UiController::class, 'authlockscreen2'])->name('authlockscreen2');
Route::get('/auth-lock-screen', [App\Http\Controllers\UiController::class, 'authlockscreen'])->name('authlockscreen');
Route::get('/auth-login-2', [App\Http\Controllers\UiController::class, 'authlogin2'])->name('authlogin2');
Route::get('/auth-login', [App\Http\Controllers\UiController::class, 'authlogin'])->name('authlogin');
Route::get('/auth-recoverpw-2', [App\Http\Controllers\UiController::class, 'authrecoverpw2'])->name('authrecoverpw2');
Route::get('/auth-recoverpw', [App\Http\Controllers\UiController::class, 'authrecoverpw'])->name('authrecoverpw');
Route::get('/auth-register-2', [App\Http\Controllers\UiController::class, 'authregister2'])->name('authregister2');
Route::get('/auth-register', [App\Http\Controllers\UiController::class, 'authregister'])->name('authregister');
Route::get('/auth-two-step-verification-2', [App\Http\Controllers\UiController::class, 'authtwostepverification2'])->name('authtwostepverification2');
Route::get('/auth-two-step-verification', [App\Http\Controllers\UiController::class, 'authtwostepverification'])->name('authtwostepverification');
Route::get('/blog-details', [App\Http\Controllers\UiController::class, 'blogdetails'])->name('blogdetails');
Route::get('/blog-grid', [App\Http\Controllers\UiController::class, 'bloggrid'])->name('bloggrid');
Route::get('/blog-list', [App\Http\Controllers\UiController::class, 'bloglist'])->name('bloglist');
Route::get('/calendar', [App\Http\Controllers\UiController::class, 'calendar'])->name('calendar');
Route::get('/charts-apex', [App\Http\Controllers\UiController::class, 'chartsapex'])->name('chartsapex');
Route::get('/charts-chartjs', [App\Http\Controllers\UiController::class, 'chartschartjs'])->name('chartschartjs');
Route::get('/charts-echart', [App\Http\Controllers\UiController::class, 'chartsechart'])->name('chartsechart');
Route::get('/charts-flot', [App\Http\Controllers\UiController::class, 'chartsflot'])->name('chartsflot');
Route::get('/charts-knob', [App\Http\Controllers\UiController::class, 'chartsknob'])->name('chartsknob');
Route::get('/charts-sparkline', [App\Http\Controllers\UiController::class, 'chartssparkline'])->name('chartssparkline');
Route::get('/charts-tui', [App\Http\Controllers\UiController::class, 'chartstui'])->name('chartstui');
Route::get('/chat', [App\Http\Controllers\UiController::class, 'chat'])->name('chat');
Route::get('/contacts-grid', [App\Http\Controllers\UiController::class, 'contactsgrid'])->name('contactsgrid');
Route::get('/contacts-list', [App\Http\Controllers\UiController::class, 'contactslist'])->name('contactslist');
Route::get('/contacts-profile', [App\Http\Controllers\UiController::class, 'contactsprofile'])->name('contactsprofile');
Route::get('/crypto-buy-sell', [App\Http\Controllers\UiController::class, 'cryptobuysell'])->name('cryptobuysell');
Route::get('/crypto-exchange', [App\Http\Controllers\UiController::class, 'cryptoexchange'])->name('cryptoexchange');
Route::get('/crypto-ico-landing', [App\Http\Controllers\UiController::class, 'cryptoicolanding'])->name('cryptoicolanding');
Route::get('/crypto-kyc-application', [App\Http\Controllers\UiController::class, 'cryptokycapplication'])->name('cryptokycapplication');
Route::get('/crypto-lending', [App\Http\Controllers\UiController::class, 'cryptolending'])->name('cryptolending');
Route::get('/crypto-orders', [App\Http\Controllers\UiController::class, 'cryptoorders'])->name('cryptoorders');
Route::get('/crypto-wallet', [App\Http\Controllers\UiController::class, 'cryptowallet'])->name('cryptowallet');
Route::get('/dashboard-blog', [App\Http\Controllers\UiController::class, 'dashboardblog'])->name('dashboardblog');
Route::get('/dashboard-crypto', [App\Http\Controllers\UiController::class, 'dashboardcrypto'])->name('dashboardcrypto');
Route::get('/dashboard-saas', [App\Http\Controllers\UiController::class, 'dashboardsaas'])->name('dashboardsaas');
Route::get('/ecommerce-add-product', [App\Http\Controllers\UiController::class, 'ecommerceaddproduct'])->name('ecommerceaddproduct');
Route::get('/ecommerce-cart', [App\Http\Controllers\UiController::class, 'ecommercecart'])->name('ecommercecart');
Route::get('/ecommerce-checkout', [App\Http\Controllers\UiController::class, 'ecommercecheckout'])->name('ecommercecheckout');
Route::get('/ecommerce-customers', [App\Http\Controllers\UiController::class, 'ecommercecustomers'])->name('ecommercecustomers');
Route::get('/ecommerce-orders', [App\Http\Controllers\UiController::class, 'ecommerceorders'])->name('ecommerceorders');
Route::get('/ecommerce-product-detail', [App\Http\Controllers\UiController::class, 'ecommerceproductdetail'])->name('ecommerceproductdetail');
Route::get('/ecommerce-products', [App\Http\Controllers\UiController::class, 'ecommerceproducts'])->name('ecommerceproducts');
Route::get('/ecommerce-shops', [App\Http\Controllers\UiController::class, 'ecommerceshops'])->name('ecommerceshops');
Route::get('/email-inbox', [App\Http\Controllers\UiController::class, 'emailinbox'])->name('emailinbox');
Route::get('/email-read', [App\Http\Controllers\UiController::class, 'emailread'])->name('emailread');
Route::get('/email-template-alert', [App\Http\Controllers\UiController::class, 'emailtemplatealert'])->name('emailtemplatealert');
Route::get('/email-template-basic', [App\Http\Controllers\UiController::class, 'emailtemplatebasic'])->name('emailtemplatebasic');
Route::get('/email-template-billing', [App\Http\Controllers\UiController::class, 'emailtemplatebilling'])->name('emailtemplatebilling');
Route::get('/form-advanced', [App\Http\Controllers\UiController::class, 'formadvanced'])->name('formadvanced');
Route::get('/form-editors', [App\Http\Controllers\UiController::class, 'formeditors'])->name('formeditors');
Route::get('/form-elements', [App\Http\Controllers\UiController::class, 'formelements'])->name('formelements');
Route::get('/form-layouts', [App\Http\Controllers\UiController::class, 'formlayouts'])->name('formlayouts');
Route::get('/form-mask', [App\Http\Controllers\UiController::class, 'formmask'])->name('formmask');
Route::get('/form-repeater', [App\Http\Controllers\UiController::class, 'formrepeater'])->name('formrepeater');
Route::get('/form-uploads', [App\Http\Controllers\UiController::class, 'formuploads'])->name('formuploads');
Route::get('/form-validation', [App\Http\Controllers\UiController::class, 'formvalidation'])->name('formvalidation');
Route::get('/form-wizard', [App\Http\Controllers\UiController::class, 'formwizard'])->name('formwizard');
Route::get('/form-xeditable', [App\Http\Controllers\UiController::class, 'formxeditable'])->name('formxeditable');
Route::get('/home', [App\Http\Controllers\UiController::class, 'home'])->name('home');
Route::get('/icons-boxicons', [App\Http\Controllers\UiController::class, 'iconsboxicons'])->name('iconsboxicons');
Route::get('/icons-dripicons', [App\Http\Controllers\UiController::class, 'iconsdripicons'])->name('iconsdripicons');
Route::get('/icons-fontawesome', [App\Http\Controllers\UiController::class, 'iconsfontawesome'])->name('iconsfontawesome');
Route::get('/icons-materialdesign', [App\Http\Controllers\UiController::class, 'iconsmaterialdesign'])->name('iconsmaterialdesign');
Route::get('/index-admin', [App\Http\Controllers\UiController::class, 'index'])->name('indexadmin');
Route::get('/invoices-detail', [App\Http\Controllers\UiController::class, 'invoicesdetail'])->name('invoicesdetail');
Route::get('/invoices-list', [App\Http\Controllers\UiController::class, 'invoiceslist'])->name('invoiceslist');
Route::get('/layouts-boxed', [App\Http\Controllers\UiController::class, 'layoutsboxed'])->name('layoutsboxed');
Route::get('/layouts-light-sidebar', [App\Http\Controllers\UiController::class, 'layoutslightsidebar'])->name('layoutslightsidebar');
Route::get('/layouts-icon-sidebar', [App\Http\Controllers\UiController::class, 'layoutsiconsidebar'])->name('layoutsiconsidebar');
Route::get('/layouts-colored-sidebar', [App\Http\Controllers\UiController::class, 'layoutscoloredsidebar'])->name('layoutscoloredsidebar');
Route::get('/layouts-compact-sidebar', [App\Http\Controllers\UiController::class, 'layoutscompactsidebar'])->name('layoutscompactsidebar');
Route::get('/layouts-hori-boxed-width', [App\Http\Controllers\UiController::class, 'layoutshoriboxedwidth'])->name('layoutshoriboxedwidth');
Route::get('/layouts-hori-colored-header', [App\Http\Controllers\UiController::class, 'layoutshoricoloredheader'])->name('layoutshoricoloredheader');
Route::get('/layouts-hori-preloader', [App\Http\Controllers\UiController::class, 'layoutshoripreloader'])->name('layoutshoripreloader');
Route::get('/layouts-preloader', [App\Http\Controllers\UiController::class, 'layoutspreloader'])->name('layoutspreloader');
Route::get('/layouts-horizontal', [App\Http\Controllers\UiController::class, 'layoutshorizontal'])->name('layoutshorizontal');
Route::get('/layouts-hori-topbar-light', [App\Http\Controllers\UiController::class, 'layoutshoritopbarlight'])->name('layoutshoritopbarlight');
Route::get('/layouts-hori-scrollable', [App\Http\Controllers\UiController::class, 'layoutshoriscrollable'])->name('layoutshoriscrollable');



Route::get('/layouts-scrollable', [App\Http\Controllers\UiController::class, 'layoutsscrollable'])->name('layoutsscrollable');
Route::get('/layouts-vertical', [App\Http\Controllers\UiController::class, 'layoutsvertical'])->name('layoutsvertical');
Route::get('/maps-google', [App\Http\Controllers\UiController::class, 'mapsgoogle'])->name('mapsgoogle');
Route::get('/maps-leaflet', [App\Http\Controllers\UiController::class, 'mapsleaflet'])->name('mapsleaflet');
Route::get('/maps-vector', [App\Http\Controllers\UiController::class, 'mapsvector'])->name('mapsvector');
Route::get('/pages-404', [App\Http\Controllers\UiController::class, 'pages404'])->name('pages404');
Route::get('/pages-500', [App\Http\Controllers\UiController::class, 'pages500'])->name('pages500');
Route::get('/pages-comingsoon', [App\Http\Controllers\UiController::class, 'pagescomingsoon'])->name('pagescomingsoon');
Route::get('/pages-faqs', [App\Http\Controllers\UiController::class, 'pagesfaqs'])->name('pagesfaqs');
Route::get('/pages-maintenance', [App\Http\Controllers\UiController::class, 'pagesmaintenance'])->name('pagesmaintenance');
Route::get('/pages-pricing', [App\Http\Controllers\UiController::class, 'pagespricing'])->name('pagespricing');
Route::get('/pages-starter', [App\Http\Controllers\UiController::class, 'pagesstarter'])->name('pagesstarter');
Route::get('/pages-timeline', [App\Http\Controllers\UiController::class, 'pagestimeline'])->name('pagestimeline');
Route::get('/projects-create', [App\Http\Controllers\UiController::class, 'projectscreate'])->name('projectscreate');
Route::get('/projects-grid', [App\Http\Controllers\UiController::class, 'projectsgrid'])->name('projectsgrid');
Route::get('/projects-list', [App\Http\Controllers\UiController::class, 'projectslist'])->name('projectslist');
Route::get('/projects-overview', [App\Http\Controllers\UiController::class, 'projectsoverview'])->name('projectsoverview');
Route::get('/tables-basic', [App\Http\Controllers\UiController::class, 'tablesbasic'])->name('tablesbasic');
Route::get('/tables-datatable', [App\Http\Controllers\UiController::class, 'tablesdatatable'])->name('tablesdatatable');
Route::get('/tables-editable', [App\Http\Controllers\UiController::class, 'tableseditable'])->name('tableseditable');
Route::get('/tables-responsive', [App\Http\Controllers\UiController::class, 'tablesresponsive'])->name('tablesresponsive');
Route::get('/tasks-create', [App\Http\Controllers\UiController::class, 'taskscreate'])->name('taskscreate');
Route::get('/tasks-kanban', [App\Http\Controllers\UiController::class, 'taskskanban'])->name('taskskanban');
Route::get('/tasks-list', [App\Http\Controllers\UiController::class, 'taskslist'])->name('taskslist');
Route::get('/ui-alerts', [App\Http\Controllers\UiController::class, 'uialerts'])->name('uialerts');
Route::get('/ui-buttons', [App\Http\Controllers\UiController::class, 'uibuttons'])->name('uibuttons');
Route::get('/ui-cards', [App\Http\Controllers\UiController::class, 'uicards'])->name('uicards');
Route::get('/ui-carousel', [App\Http\Controllers\UiController::class, 'uicarousel'])->name('uicarousel');
Route::get('/ui-colors', [App\Http\Controllers\UiController::class, 'uicolors'])->name('uicolors');
Route::get('/ui-dropdowns', [App\Http\Controllers\UiController::class, 'uidropdowns'])->name('uidropdowns');
Route::get('/ui-general', [App\Http\Controllers\UiController::class, 'uigeneral'])->name('uigeneral');
Route::get('/ui-grid', [App\Http\Controllers\UiController::class, 'uigrid'])->name('uigrid');
Route::get('/ui-images', [App\Http\Controllers\UiController::class, 'uiimages'])->name('uiimages');
Route::get('/ui-lightbox', [App\Http\Controllers\UiController::class, 'uilightbox'])->name('uilightbox');
Route::get('/ui-modals', [App\Http\Controllers\UiController::class, 'uimodals'])->name('uimodals');
Route::get('/ui-notifications', [App\Http\Controllers\UiController::class, 'uinotifications'])->name('uinotifications');
Route::get('/ui-offcanvas', [App\Http\Controllers\UiController::class, 'uioffcanvas'])->name('uioffcanvas');
Route::get('/ui-progressbars', [App\Http\Controllers\UiController::class, 'uiprogressbars'])->name('uiprogressbars');
Route::get('/ui-rangeslider', [App\Http\Controllers\UiController::class, 'uirangeslider'])->name('uirangeslider');
Route::get('/ui-rating', [App\Http\Controllers\UiController::class, 'uirating'])->name('uirating');
Route::get('/ui-session-timeout', [App\Http\Controllers\UiController::class, 'uisessiontimeout'])->name('uisessiontimeout');
Route::get('/ui-sweet-alert', [App\Http\Controllers\UiController::class, 'uisweetalert'])->name('uisweetalert');
Route::get('/ui-tabs-accordions', [App\Http\Controllers\UiController::class, 'uitabsaccordions'])->name('uitabsaccordions');
Route::get('/ui-typography', [App\Http\Controllers\UiController::class, 'uitypography'])->name('uitypography');
Route::get('/ui-video', [App\Http\Controllers\UiController::class, 'uivideo'])->name('uivideo');
Route::get('/welcome', [App\Http\Controllers\UiController::class, 'welcome'])->name('welcome');




Route::middleware(['auth'])->group(function () {

});
