<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group("panel/gedung", function ($routes) {
    $routes->get('/', 'Panel\Gedung::index');
    // $routes->post('fetch-publish', 'Panel\Agenda::fetchAgendaPublish');
    // $routes->post('fetch-draft', 'Panel\Agenda::fetchAgendaDraft');
    // $routes->post('fetch-trash', 'Panel\Agenda::fetchAgendaTrash');
    $routes->match(["get", "post"], "tambah", "Panel\Gedung::tambah");
    // $routes->match(["get", "post"], "(:any)/edit", "Panel\Agenda::edit/$1");
    // $routes->post('trash-selected', 'Panel\Agenda::trashSelected');
    // $routes->get('(:any)/trash', 'Panel\Agenda::trash/$1');
    // $routes->get('(:any)/restore', 'Panel\Agenda::restore/$1');
    // $routes->get('(:any)/remove', 'Panel\Agenda::remove/$1');
});


$routes->group("panel/ruangan", function ($routes) {
    $routes->get('/', 'Panel\Ruangan::index');
    // $routes->post('fetch-publish', 'Panel\Agenda::fetchAgendaPublish');
    // $routes->post('fetch-draft', 'Panel\Agenda::fetchAgendaDraft');
    // $routes->post('fetch-trash', 'Panel\Agenda::fetchAgendaTrash');
    $routes->match(["get", "post"], "tambah", "Panel\Ruangan::tambah");
    // $routes->match(["get", "post"], "(:any)/edit", "Panel\Agenda::edit/$1");
    // $routes->post('trash-selected', 'Panel\Agenda::trashSelected');
    // $routes->get('(:any)/trash', 'Panel\Agenda::trash/$1');
    // $routes->get('(:any)/restore', 'Panel\Agenda::restore/$1');
    // $routes->get('(:any)/remove', 'Panel\Agenda::remove/$1');
});

$routes->group("panel/kategori", function ($routes) {
    $routes->get('/', 'Panel\Kategori::index');
    // $routes->post('fetch-publish', 'Panel\Agenda::fetchAgendaPublish');
    // $routes->post('fetch-draft', 'Panel\Agenda::fetchAgendaDraft');
    // $routes->post('fetch-trash', 'Panel\Agenda::fetchAgendaTrash');
    $routes->match(["get", "post"], "tambah", "Panel\Kategori::tambah");
    // $routes->match(["get", "post"], "(:any)/edit", "Panel\Agenda::edit/$1");
    // $routes->post('trash-selected', 'Panel\Agenda::trashSelected');
    // $routes->get('(:any)/trash', 'Panel\Agenda::trash/$1');
    // $routes->get('(:any)/restore', 'Panel\Agenda::restore/$1');
    // $routes->get('(:any)/remove', 'Panel\Agenda::remove/$1');
});

$routes->group("panel/item", function ($routes) {
    $routes->get('/', 'Panel\Item::index');
    // $routes->post('fetch-publish', 'Panel\Agenda::fetchAgendaPublish');
    // $routes->post('fetch-draft', 'Panel\Agenda::fetchAgendaDraft');
    // $routes->post('fetch-trash', 'Panel\Agenda::fetchAgendaTrash');
    $routes->match(["get", "post"], "tambah", "Panel\Item::tambah");
    $routes->match(["get", "post"], "(:segment)", "Panel\Item::edit/$1");
    // $routes->match(["get", "post"], "(:any)/edit", "Panel\Agenda::edit/$1");
    // $routes->post('trash-selected', 'Panel\Agenda::trashSelected');
    // $routes->get('(:any)/trash', 'Panel\Agenda::trash/$1');
    // $routes->get('(:any)/restore', 'Panel\Agenda::restore/$1');
    // $routes->get('(:any)/remove', 'Panel\Agenda::remove/$1');
});
