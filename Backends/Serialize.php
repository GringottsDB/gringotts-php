<?php

namespace Netesy\Gringotts\Backends;

use Netesy\Gringotts\Driver;
/**
 * Class: Netesy\Gringotts\Backends\Serialize
 * =============================================================================
 * PHP Serialize Backend
 * 
 * This uses the built in PHP serialize and unserialize functions.
 * The cool thing with this is that you could potentially store not only
 * arrays but objects as well. I'll leave you to ponder the possibilities...
 */
class Serialize extends Driver
{
	protected function ext() { return 'pcereal'; }
	protected function encode($data) { return serialize($data); }
	protected function decode($data) { return unserialize($data); }
}
