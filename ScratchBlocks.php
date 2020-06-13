<?php
/*
 * ScratchBlocks extension for MediaWiki
 * Renders <scratchblocks> tags to shiny scratch blocks
 *
 * Copyright 2020, Radman Siddiki
 * GNU General Public Version 3.0 Licensed 
 *
 * Includes scratchblocks v3
 * https://github.com/tjvr/scratchblocks
 *
 */


if (!defined('MEDIAWIKI')) {
    die();
}

require_once __DIR__ . "/ScratchblockHooks.php";

// Hooks

$wgExtensionFunctions[] = 'ScratchblockHook::sbSetup';
$wgHooks['ParserFirstCallInit'][] = 'ScratchblockHook::sbParserInit';


// Define resources

$wgResourceModules['ext.scratchBlocks'] = array(
    'scripts' => array(
        'scratchblocks/src/scratchblocks.js',
        'scratchblocks/src/translations.js',
        'run_scratchblocks.js',
    ),

    'styles' => '/inline.css',

    // jQuery is loaded anyway
    'dependencies' => array(),

    // Where the files are
    'localBasePath' => __DIR__,
    'remoteExtPath' => 'ScratchBlocks'
);

$wgExtensionCredits['parserhook'][] = array(
    'name' => "Snapblocks",           // Name of extension - string
    'description' => "This plugin takes text-based Snap! code and renders it in a graphical format.",    // Description of what the extension does - string. Omit in favour of descriptionmsg.
    'version' => 3.1,         // Version number of extension - number or string
    'author' => ["R4356th"],         // The extension author's name - string or array for multiple
    'url' => "https://github.com/tjvr/wiki-scratchblocks",            // URL of extension (usually instructions) - string
    'license-name' => "GPL v3",   // Short name of the license
);
