<?php

namespace Netesy\Gringotts\Backends;
// use Netesy\Gringotts\Driver;

/**
 * Class: Netesy\Gringotts\Backends\Php
 * =============================================================================
 * Php Backend
 * 
 * Okay now this one is probably a little controversial,
 * yes it uses the evil eval. If you don't like it don't use it pretty simple.
 * I really only created this as something to compare against in my benchmarking.
 */
class Php extends Driver
{
	protected function ext() { return 'php'; }
	protected function encode($data) { return '<?php return '.var_export((array)$data, true).';'; }
	protected function decode($data) { return eval(substr($data, 6)); }
}
