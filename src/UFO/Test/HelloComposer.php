<?php

namespace UFO\Test;

/**
 *	idiot class to test composer import of owner packages
 *	@param <string> $name
 *		your name or wathever you want
 */
class HelloComposer {

	__construct(string $name = 'world') {
		var_dump('Hello '.$name);
	}

}