<?php

$tasks = $db->selectAll('todos');

require 'view/index.view.php';