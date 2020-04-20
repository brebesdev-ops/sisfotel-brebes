<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Welcome';
$route['auth'] = 'Auth';

// ==============================================================================
//-------------------------------------PENDAFTAR---------------------------------
// ==============================================================================
$route['pendaftar/dashboard']					= 'Pendaftar_Controller/dashboard';

$route['pendaftaran'] = 'Pendaftar_Controller';
$route['pendaftaran/proses'] = 'Pendaftar_Controller/pendaftaran_proses';
$route['pendaftar/masuk'] = 'Pendaftar_Controller/login';
$route['pendaftaran/proses_login'] = 'Pendaftar_Controller/login_proses';

$route['pendaftar/permohonan']						='Permohonan_Controller';
$route['pendaftar/permohonan/add']					= 'Permohonan_Controller/add';
$route['pendaftar/permohonan/insert']				= 'Permohonan_Controller/insert';
$route['pendaftar/permohonan/edit/(:any)']			= 'Permohonan_Controller/edit/$1';
$route['pendaftar/permohonan/update']				= 'Permohonan_Controller/update';
$route['pendaftar/permohonan/delete/(:any)']			= 'Permohonan_Controller/delete/$1';
$route['pendaftar/permohonan/print/(:any)']			= 'Permohonan_Controller/print/$1';
$route['pendaftar/permohonan/printpdf']			= 'Permohonan_Controller/printpdf';

// ==============================================================================
//-------------------------------------KASI---------------------------------
// ==============================================================================
$route['kasi/dashboard']					= 'Kasi/Dashboard_Controller';

$route['kasi/permohonan']						= 'Kasi/Permohonan_Controller';
$route['kasi/permohonan/add']					= 'Kasi/Permohonan_Controller/add';
$route['kasi/permohonan/insert']				= 'Kasi/Permohonan_Controller/insert';
$route['kasi/permohonan/edit/(:any)']			= 'Kasi/Permohonan_Controller/edit_kasi/$1';
$route['kasi/permohonan/update']				= 'Kasi/Permohonan_Controller/update';
$route['kasi/permohonan/update_kasi']				= 'Kasi/Permohonan_Controller/update_kasi';
$route['kasi/permohonan/update_kasi_tolak']				= 'Kasi/Permohonan_Controller/update_kasi_tolak';
$route['kasi/permohonan/detail/(:any)']			= 'Kasi/Permohonan_Controller/detail_permohonan/$1';
$route['kasi/permohonan/delete/(:any)']			= 'Kasi/Permohonan_Controller/delete/$1';

$route['kasi/survey']						= 'Kasi/Survey_Controller';
$route['kasi/survey/add']					= 'Kasi/Survey_Controller/add';
$route['kasi/survey/insert']				= 'Kasi/Survey_Controller/insert';
$route['kasi/survey/edit/(:any)']			= 'Kasi/Survey_Controller/edit/$1';
$route['kasi/survey/update']				= 'Kasi/Survey_Controller/update';
$route['kasi/survey/delete/(:any)']			= 'Kasi/Survey_Controller/delete/$1';

$route['kasi/petugas']						= 'Kasi/Petugas_Controller';
$route['kasi/petugas/add']					= 'Kasi/Petugas_Controller/add';
$route['kasi/petugas/insert']				= 'Kasi/Petugas_Controller/insert';
$route['kasi/petugas/edit/(:any)']			= 'Kasi/Petugas_Controller/edit/$1';
$route['kasi/petugas/update']				= 'Kasi/Petugas_Controller/update';
$route['kasi/petugas/delete/(:any)']			= 'Kasi/Petugas_Controller/delete/$1';

$route['kasi/perusahaan']						= 'Kasi/Perusahaan_Controller';
$route['kasi/perusahaan/add']					= 'Kasi/Perusahaan_Controller/add';
$route['kasi/perusahaan/insert']				= 'Kasi/Perusahaan_Controller/insert';
$route['kasi/perusahaan/edit/(:any)']			= 'Kasi/Perusahaan_Controller/edit/$1';
$route['kasi/perusahaan/update']				= 'Kasi/Perusahaan_Controller/update';
$route['kasi/perusahaan/delete/(:any)']			= 'Kasi/Perusahaan_Controller/delete/$1';

$route['kabid/dashboard']					= 'Kabid/Dashboard_Controller';

$route['kabid/permohonan']						= 'Kabid/Permohonan_Controller';
$route['kabid/permohonan/add']					= 'Kabid/Permohonan_Controller/add';
$route['kabid/permohonan/insert']				= 'Kabid/Permohonan_Controller/insert';
$route['kabid/permohonan/edit/(:any)']			= 'Kabid/Permohonan_Controller/edit_kabid/$1';
$route['kabid/permohonan/update']				= 'Kabid/Permohonan_Controller/update';
$route['kabid/permohonan/update_kabid']				= 'Kabid/Permohonan_Controller/update_kabid';
$route['kabid/permohonan/update_kabid_tolak']				= 'Kabid/Permohonan_Controller/update_kabid_tolak';
$route['kabid/permohonan/detail/(:any)']			= 'Kabid/Permohonan_Controller/detail_permohonan/$1';
$route['kabid/permohonan/delete/(:any)']			= 'Kabid/Permohonan_Controller/delete/$1';

$route['kepala/dashboard']					= 'Kepala/Dashboard_Controller';

$route['kepala/permohonan']						= 'Kepala/Permohonan_Controller';
$route['kepala/permohonan/add']					= 'Kepala/Permohonan_Controller/add';
$route['kepala/permohonan/insert']				= 'Kepala/Permohonan_Controller/insert';
$route['kepala/permohonan/edit/(:any)']			= 'Kepala/Permohonan_Controller/edit_kepala/$1';
$route['kepala/permohonan/update']				= 'Kepala/Permohonan_Controller/update';
$route['kepala/permohonan/update_kepala']				= 'Kepala/Permohonan_Controller/update_kepala';
$route['kepala/permohonan/update_kepala_tolak']				= 'Kepala/Permohonan_Controller/update_kepala_tolak';
$route['kepala/permohonan/detail/(:any)']			= 'Kepala/Permohonan_Controller/detail_permohonan/$1';
$route['kepala/permohonan/delete/(:any)']			= 'Kepala/Permohonan_Controller/delete/$1';

$route['petugas/dashboard']					= 'Petugas/Dashboard_Controller';
$route['petugas/survey']						= 'Petugas/Survey_Controller';
$route['petugas/survey/add']					= 'Petugas/Survey_Controller/add';
$route['petugas/survey/insert']				= 'Petugas/Survey_Controller/insert';
$route['petugas/survey/edit/(:any)']			= 'Petugas/Survey_Controller/edit/$1';
$route['petugas/survey/update']				= 'Petugas/Survey_Controller/update';
$route['petugas/survey/delete/(:any)']			= 'Petugas/Survey_Controller/delete/$1';
$route['petugas/survey/update_petugas']				= 'Petugas/Survey_Controller/update_petugas';
$route['petugas/survey/update_petugas_tolak']				= 'Petugas/Survey_Controller/update_petugas_tolak';
//  @author    Ryan Aprianto
// ------------------------------------------------------------------------
// Custom Routing
// ------------------------------------------------------------------------

// ------------------------------------------------------------------------
// Superadmin
// ------------------------------------------------------------------------
$route['sa/dashboard']					= 'Admin/Dashboard_Controller';
// $route['sa/penduduk']					= 'Superadmin/Penduduk_Controller';
// $route['sa/rekomendasi']				= 'Superadmin/Rekomendasi_Controller';
// $route['sa/keuangan']					= 'Superadmin/Keuangan_Controller';
// $route['sa/profile/edit']				= 'Superadmin/Profile_Controller/edit';
// $route['sa/profile/update']				= 'Superadmin/Profile_Controller/update';
// $route['sa/profile/changepassword']		= 'Superadmin/Profile_Controller/changepassword';


// ------------------------------------------------------------------------
// Admin
// ------------------------------------------------------------------------
$route['a/dashboard']					= 'Admin/Dashboard_Controller';
// $route['a/rt']							= 'Admin/RT_Controller';
// $route['a/rt/add']						= 'Admin/RT_Controller/add';
// $route['a/rt/insert']					= 'Admin/RT_Controller/insert';
// $route['a/rt/edit/(:any)']				= 'Admin/RT_Controller/edit/$1';
// $route['a/rt/update']					= 'Admin/RT_Controller/update';
// $route['a/rt/delete/(:any)']			= 'Admin/RT_Controller/delete/$1';

// $route['a/surat']						= 'Admin/Surat_Controller';
// $route['a/suara-warga']					= 'Admin/SuaraWarga_Controller';

// $route['a/keuangan']					= 'Admin/Keuangan_Controller';
// $route['a/keuangan/add']				= 'Admin/Keuangan_Controller/add';
// $route['a/keuangan/insert']				= 'Admin/Keuangan_Controller/insert';
// $route['a/keuangan/edit/(:any)']		= 'Admin/Keuangan_Controller/edit/$1';
// $route['a/keuangan/update']				= 'Admin/Keuangan_Controller/update';
// $route['a/keuangan/delete/(:any)']		= 'Admin/Keuangan_Controller/delete/$1';

$route['a/petugas']						= 'Admin/Petugas_Controller';
$route['a/petugas/add']					= 'Admin/Petugas_Controller/add';
$route['a/petugas/insert']				= 'Admin/Petugas_Controller/insert';
$route['a/petugas/edit/(:any)']			= 'Admin/Petugas_Controller/edit/$1';
$route['a/petugas/update']				= 'Admin/Petugas_Controller/update';
$route['a/petugas/delete/(:any)']			= 'Admin/Petugas_Controller/delete/$1';

$route['a/provider']						= 'Admin/Provider_Controller';
$route['a/provider/add']					= 'Admin/Provider_Controller/add';
$route['a/provider/insert']				= 'Admin/Provider_Controller/insert';
$route['a/provider/edit/(:any)']			= 'Admin/Provider_Controller/edit/$1';
$route['a/provider/update']				= 'Admin/Provider_Controller/update';
$route['a/provider/delete/(:any)']			= 'Admin/Provider_Controller/delete/$1';

$route['a/survey']						= 'Admin/Survey_Controller';
$route['a/survey/add']					= 'Admin/Survey_Controller/add';
$route['a/survey/insert']				= 'Admin/Survey_Controller/insert';
$route['a/survey/edit/(:any)']			= 'Admin/Survey_Controller/edit/$1';
$route['a/survey/update']				= 'Admin/Survey_Controller/update';
$route['a/survey/delete/(:any)']			= 'Admin/Survey_Controller/delete/$1';

// $route['a/jurnalis']					= 'Admin/Jurnalis_Controller';
// $route['a/jurnalis/add']				= 'Admin/Jurnalis_Controller/add';
// $route['a/jurnalis/insert']				= 'Admin/Jurnalis_Controller/insert';
// $route['a/jurnalis/edit/(:any)']		= 'Admin/Jurnalis_Controller/edit/$1';
// $route['a/jurnalis/update']				= 'Admin/Jurnalis_Controller/update';
// $route['a/jurnalis/delete/(:any)']		= 'Admin/Jurnalis_Controller/delete/$1';

$route['a/akun']						= 'Admin/Akun_Controller';
$route['a/akun/pending']				= 'Admin/Akun_Controller/pending';
$route['a/akun/allow/(:any)']			= 'Admin/Akun_Controller/allow/$1';
$route['a/akun/detail/(:any)']			= 'Admin/Akun_Controller/detail/$1';
$route['a/akun/edit/(:any)']			= 'Admin/Akun_Controller/edit/$1';
$route['a/akun/update']					= 'Admin/Akun_Controller/update';
$route['a/akun/delete/(:any)']			= 'Admin/Akun_Controller/delete/$1';

$route['a/pengajuan']					= 'Admin/Pengajuan_Controller';
$route['a/akun/pending']				= 'Admin/Akun_Controller/pending';
$route['a/akun/allow/(:any)']			= 'Admin/Akun_Controller/allow/$1';
$route['a/akun/detail/(:any)']			= 'Admin/Akun_Controller/detail/$1';
$route['a/akun/edit/(:any)']			= 'Admin/Akun_Controller/edit/$1';
$route['a/akun/update']					= 'Admin/Akun_Controller/update';
$route['a/akun/delete/(:any)']			= 'Admin/Akun_Controller/delete/$1';
// $route['a/profile/edit']				= 'Admin/Profile_Controller/edit';
// $route['a/profile/update']				= 'Admin/Profile_Controller/update';
// $route['a/profile/changepassword']		= 'Admin/Profile_Controller/changepassword';


// $route['a/user']						= 'Admin/User_Controller';

// ------------------------------------------------------------------------
// Jurnalis
// ------------------------------------------------------------------------
$route['j/dashboard']					= 'Jurnalis/Dashboard_Controller';
$route['j/berita']						= 'Jurnalis/Berita_Controller';
$route['j/berita/add']					= 'Jurnalis/Berita_Controller/add';
$route['j/berita/insert']				= 'Jurnalis/Berita_Controller/insert';
$route['j/berita/delete/(:any)']		= 'Jurnalis/Berita_Controller/delete/$1';

// $route['j/profile/edit']				= 'Jurnalis/Profile_Controller/edit';
// $route['j/profile/update']				= 'Jurnalis/Profile_Controller/update';
// $route['j/profile/changepassword']		= 'Jurnalis/Profile_Controller/changepassword';


// ------------------------------------------------------------------------
// RT
// ------------------------------------------------------------------------


// $route['rt/rekomendasi']				= 'Rt/Rekomendasi_Controller';
// $route['rt/rekomendasi/add']			= 'Rt/Rekomendasi_Controller/add';
// $route['rt/rekomendasi/insert']			= 'Rt/Rekomendasi_Controller/insert';
// $route['rt/rekomendasi/delete/(:any)']	= 'Rt/Rekomendasi_Controller/delete/$1';

// $route['rt/profile/edit']				= 'Rt/Profile_Controller/edit';
// $route['rt/profile/update']				= 'Rt/Profile_Controller/update';
// $route['rt/profile/changepassword']		= 'Rt/Profile_Controller/changepassword';
// $route['rt/dashboard']					= 'Rt/Dashboard_Controller';
// $route['rt/warga']						= 'Rt/Warga_Controller';
// $route['rt/warga/add']					= 'Rt/Warga_Controller/add';
// $route['rt/warga/insert']				= 'Rt/Warga_Controller/insert';
// $route['rt/warga/edit/(:any)']			= 'Rt/Warga_Controller/edit/$1';
// $route['rt/warga/update']				= 'Rt/Warga_Controller/update';
// $route['rt/warga/delete/(:any)']		= 'Rt/Warga_Controller/delete/$1';

// ------------------------------------------------------------------------
// Warga
// ------------------------------------------------------------------------
// $route['w/dashboard']					= 'Warga/Dashboard_Controller';

// $route['w/suara-warga']					= 'Warga/SuaraWarga_Controller';
// $route['w/suara-warga/add']				= 'Warga/SuaraWarga_Controller/add';
// $route['w/suara-warga/insert']			= 'Warga/SuaraWarga_Controller/insert';
// $route['w/suara-warga/edit/(:any)']		= 'Warga/SuaraWarga_Controller/edit/$1';
// $route['w/suara-warga/update']			= 'Warga/SuaraWarga_Controller/update';
// $route['w/suara-warga/delete/(:any)']	= 'Warga/SuaraWarga_Controller/delete/$1';

// $route['w/profile']						= 'Warga/Profile_Controller';
// $route['w/profile/edit']				= 'Warga/Profile_Controller/edit';
// $route['w/profile/update']				= 'Warga/Profile_Controller/update';
// $route['w/profile/changepassword']		= 'Warga/Profile_Controller/changepassword';

// $route['w/surat']						= 'Warga/Surat_Controller';
// $route['w/surat/add']					= 'Warga/Surat_Controller/add';
// $route['w/surat/insert']				= 'Warga/Surat_Controller/insert';
// $route['w/surat/edit/(:any)']			= 'Warga/Surat_Controller/edit/$1';
// $route['w/surat/update']				= 'Warga/Surat_Controller/update';
// $route['w/surat/delete/(:any)']			= 'Warga/Surat_Controller/delete/$1';
// $route['w/e_surat']						= 'Surat/e_surat';
// $route['w/request']						= 'Surat/send';
// $route['w/sukses']						= 'Surat/sukses';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
