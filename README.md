fuelphp-newrelic
================

This is just a simple FuelPHP package for NewRelic users that will properly set the transaction name as 
'Controller_Class/action'. It registers itself with FuelPHP's Event system, so apart from adding it to 
the list of packages in always_load, it should be a drop-in.
