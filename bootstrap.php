<?php

Autoloader::add_namespace('Newrelic', __DIR__.'/Psr/Newrelic/', true);

\Newrelic\EventHandler::register();