<?php
require('../config.php');
require_once('../vendor/autoload.php');

$app = new Easily\Easily();
$app->addRoute('', [
	'controller' => 'Home',
	'action' => 'index'
]);
$app->addRoute('admin', [
	'controller' => 'Home',
	'action' => '_index'
]);
$app->addRoute('admin/blog/_edit/[integer]', [
	'controller' => 'Blog',
	'action' => '_edit',
	'pass' => ['id']
]);
$app->addRoute('blog/view/[string]/[integer]', [
	'controller' => 'Blog',
	'action' => 'view',
	'pass' => ['slug', 'id']
]);
$app->verify([
	'_index', '_add', '_edit', '_delete'
]);
$app->init();