<?php
namespace VersionnedTest;
use SilverStripe\ORM\DataObject;

class BAC extends DataObject
{
    use MagicTrait;

    private static $singular_name = 'Unversioned owned Child of Versioned Owned Child';

    private static $has_one = array(
        'Parent' => BA::class
    );

    private static $table_name = 'BAC';


}
