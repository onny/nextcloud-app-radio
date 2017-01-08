<?php
/**
 * Copyright (c) 2014, Lukas Reschke <lukas@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or later.
 * See the COPYING-README file.
 */

/** @var $this \OCP\Route\IRouter */
$this->create('radio_index', '/')
	->actionInclude('radio/index.php');
$this->create('radio_ajax_seturl', 'ajax/seturl.php')
	->actionInclude('radio/ajax/seturl.php');

return [
    'resources' => [
        'station' => ['url' => '/stations'],
    ],
    'routes' => [
        ['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
    ]
];
