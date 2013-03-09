<?php
namespace Newrelic;

class EventHandler
{
    public static function register()
    {
        if(!extension_loaded('newrelic')) {
            return;
        }
        
        \Event::Register("controller_started", "\Newrelic\EventHandler::eventControllerStarted");
    }

    public static function eventControllerStarted()
    {
        $request = \Request::active();
        newrelic_name_transaction($request->controller . '/' . $request->action);
    }
}