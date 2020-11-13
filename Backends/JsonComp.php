<?php

namespace Netesy\Gringotts\Backends;

// use Netesy\Gringotts\Driver;

/**
 * Class: Netesy\Gringotts\Backends\JsonComp
 * =============================================================================
 * Json Compressed Backend
 * 
 * This is exactly the same as the Json driver except that we compress as well.
 */
class JsonComp extends Driver
{
	protected function ext() { return 'json.gz'; }
	protected function encode($data) { return gzencode(json_encode($data)); }
	protected function decode($data) { return json_decode(gzdecode($data), true); }
}
