<?php
namespace VersionedTest;
use SilverStripe\ORM\DataObject;

class BAD extends DataObject
{
    use MagicTrait;


    private static $singular_name = 'Unversioned Unowned Child of Versioned Owned Child';

    private static $has_one = array(
        'Parent' => BA::class
    );

    private static $table_name = 'BAD';


}
