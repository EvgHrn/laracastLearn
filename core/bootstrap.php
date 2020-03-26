<?php

$app = [];

$app['config'] = require 'config.php';;

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Router.php';
require 'Request.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);