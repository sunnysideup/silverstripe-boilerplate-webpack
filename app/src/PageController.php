<?php

use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Control\Director;
use SilverStripe\Control\Middleware\HTTPCacheControlMiddleware;
use SilverStripe\UserForms\Model\UserDefinedForm;

class PageController extends ContentController
{
    protected function init()
    {
        if(Director::isLive()) {
            HTTPCacheControlMiddleware::singleton()
                ->enableCache()
                ->setMaxAge(0);

        } else {
            HTTPCacheControlMiddleware::singleton()
                ->enableCache()
                ->setMaxAge(60);
        }
        parent::init();
    }
}
