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
        HTTPCacheControlMiddleware::singleton()
           ->enableCache()
           ->setMaxAge(0);

        parent::init();
    }
}
