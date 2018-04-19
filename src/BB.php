<?php
namespace VersionedTest;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class BB extends DataObject
{
    use MagicTrait;

    private static $extensions = [
        Versioned::class,
    ];

    private static $singular_name = 'Versioned unowned child';

    private static $has_one = array(
        'Parent' => B::class
    );

    private static $has_many = array(

    );

    private static $table_name = 'BB';


}
