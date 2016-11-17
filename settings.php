<?php

OCP\User::checkAdminUser();

OCP\Util::addScript( "radio", "admin" );

$tmpl = new OCP\Template( 'radio', 'settings');

$tmpl->assign('url', OCP\Config::getSystemValue( "somesetting", '' ));

return $tmpl->fetchPage();
