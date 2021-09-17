<?php

use SilverStripe\Control\Director;
use SilverStripe\Core\Config\Config;
use SilverStripe\View\SSViewer;

if (Director::isLive()) {
    //Director::forceWWW();
    // Director::forceSSL();
} else {
    //	BasicAuth::protect_entire_site();
    if (Director::isDev()) {
        // Config::modify()->update(SSViewer::class, 'source_file_comments', true);
    }
}
