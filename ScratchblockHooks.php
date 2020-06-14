<?php
class ScratchblockHook {
	// Ouput HTML for <snapblocks> tag
	
	public static function sbParserInit (Parser $parser) {
		// Register <scratchblocks> and <sb> tag
		$parser->setHook('snapblocks', array( "ScratchblockHook", 'sbRenderTag') );
		$parser->setHook('sblocks', array( "ScratchblockHook", 'sbRenderInlineTag') );
		//throw new Exception(var_dump($parser));
		return true;
	}
	
	public static function sbSetup() {
		global $wgOut;
		$wgOut->addModules('ext.scratchBlocks');
	}

	// Output HTML for <snapblocks> tag
	public static function sbRenderTag ($input, array $args, Parser $parser, PPFrame $frame) {
		return '<pre class="blocks">' . htmlspecialchars($input) . '</pre>';
	}

	// Output HTML for inline <sblocks> tag
	public static function sbRenderInlineTag ($input, array $args, Parser $parser, PPFrame $frame) {
		return '<code class="blocks">' . htmlspecialchars($input) . '</code>';
	}
}
?>
