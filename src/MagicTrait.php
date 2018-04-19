<?php
namespace VersionedTest;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\ReadonlyField;
use SilverStripe\Versioned\Versioned;

trait MagicTrait
{
    private static $summary_fields = [
        'Title',
        'MyStage',
        'MyVersion'
    ];

    private static $db = [
        'Title' => 'Varchar'
    ];


    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', ReadonlyField::create('Version'));
        return $fields;
    }

    public function getMyStage()
    {
        if ($this->hasMethod('isPublished')) {
            return $this->isPublished() ? 'Publish' : 'Draft';
        } else {
            return 'Not Versionned';
        }


    }

    public function getMyVersion()
    {
        if ($this->hasField('Version')) {
            return $this->Version;
        }

        return '';


    }

}
