<?php

namespace BPMNFont;

class Hooks {

	public static function onBeforePageDisplay( \OutputPage &$out, \Skin &$skin ) {
		$out->addModuleStyles('ext.bpmnfont.base');
	}

}
