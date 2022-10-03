<?php

/*
 * A Flarum extension template for BBCode created by Billy Wilcosky.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For instructions, please view the README file.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [


    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            //$document->head[] = '<link rel="stylesheet" type="text/css" href="/assets/extensions/YOURUSERNAME-nameofextension/styles.css">';
			$document->head[] = '<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>';
			$document->head[] = '<script src="/assets/extensions/flarum-bbcode-custom/changeImage.js"></script>;
 
        }),
 
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[sup]{TEXT}[/sup]',
                '<sup>{TEXT}</sup>'
            );

            $config->BBCodes->addCustom(
                '[sub]{TEXT}[/sub]',
                '<sub>{TEXT}</sub>'
            );		

            $config->BBCodes->addCustom(
                '[imgChange]{TEXT}[/imgChange]',
                '<img>src="/assets/extensions/flarum-bbcode-custom/placeholder.png" data-src="{TEXT}base" class="imgClickAndChange" onclick="changeImage()"</img>'
            );	
			
			
        })
];
