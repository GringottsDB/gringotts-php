<?php

namespace Netesy\Gringotts\Backends;
// use Netesy\Gringotts\Driver;

/**
 * Class: Netesy\Gringotts\Backends\Bson
 * =============================================================================
 * Bson Backend
 * 
 * It goes without saying you will need to install the mongo php driver to get
 * access to bson_encode and bson_decode. I am sure you will work it out
 * when you get an error complaining these functions don't exist.
 */
class Bson extends Driver
{
	protected function ext() { return 'bson'; }
	protected function encode($data) { return bson_encode($data); }
	protected function decode($data) { return bson_decode($data); }
}
