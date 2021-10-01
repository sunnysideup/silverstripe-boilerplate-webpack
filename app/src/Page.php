<?php

use SilverStripe\CMS\Model\SiteTree;
use Sunnysideup\CleanerTinyMCEConfig\Forms\HTMLEditorFieldShort;

class Page extends SiteTree
{

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab(
            'Root.Main',
            [
                HTMLEditorFieldShort::create('Content')
            ]
        );
        return $fields;
    }
}
