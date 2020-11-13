<?php

namespace Netesy\Gringotts\Backends;


// use Netesy\Gringotts\Driver;
/**
 * Class: Netesy\Gringotts\Backends\Json
 * =============================================================================
 * Json Backend
 * 
 * This is the default backend, it's fast, it's easy to read and it's JSON yay!
 */
class Json extends Driver
{
	protected function ext() { return 'json'; }
	protected function encode($data) { return json_encode($data); }
	protected function decode($data) { return json_decode($data, true); }
}
