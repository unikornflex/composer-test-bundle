<?php

namespace UFO\Test;

/**
 *	idiot class to test composer import of owner packages
 *	@param <string> $name
 *		your name or wathever you want
 */
class HelloComposer {

	public function __construct($name = 'world') {
		var_dump('Hello '.$name);
	}

}