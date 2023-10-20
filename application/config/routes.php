<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//user routes

$route['default_controller'] = 'pages/view';



//admin routs
$route['administrator'] = 'administrator/view';
$route['administrator/home'] = 'administrator/home';
$route['administrator/index'] = 'administrator/view';
$route['administrator/forget-password'] = 'administrator/forget_password';

$route['administrator/dashboard'] = 'administrator/dashboard';

$route['administrator/change-password'] = 'administrator/get_admin_data';
$route['administrator/update-profile'] = 'administrator/update_admin_profile';

$route['administrator/users/add-user'] = 'administrator/add_user';
$route['administrator/users'] = 'administrator/users';
$route['administrator/users/update-user/(:any)'] = 'administrator/update_user/$1';

$route['administrator/blogs/add-blog'] = 'administrator/add_blog';
$route['administrator/blogs/list-blog'] = 'administrator/list_blog';
$route['administrator/blogs/update-blog'] = 'administrator/update_blog';

$route['administrator/product-categories/create'] = 'administrator/create_product_category';
$route['administrator/product-categories/update/(:any)'] = 'administrator/update_product_category/$1';
$route['administrator/product-categories'] = 'administrator/product_categories';
//$route['administrator/product-categories/(:any)'] = 'administrator/update_product_category/$1';

$route['administrator/products/create'] = 'administrator/create_product';
$route['administrator/products'] = 'administrator/get_products';
$route['administrator/products/update/(:any)'] = 'administrator/update_products/$1';

$route['administrator/faq-categories/create'] = 'administrator/create_faq_category';
$route['administrator/faq-categories/update/(:any)'] = 'administrator/update_faq_category/$1';
$route['administrator/faq-categories'] = 'administrator/faq_categories';


$route['administrator/blogs/blog-comments'] = 'administrator/list_blog_comments';
$route['administrator/blogs/view-comment/(:any)'] = 'administrator/view_blog_comments/$1';





$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;










