<?php
namespace VersionedTest;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class BC extends DataObject
{
    use MagicTrait;

    private static $singular_name = 'Unversioned owned Child';

    private static $has_one = array(
        'Parent' => B::class
    );

    private static $table_name = 'BC';

    private static $owns = [
        'BCAs',
        'BCCs',
    ];

    private static $has_many = array(
        'BCAs' => BCA::class,
        'BCBs' => BCB::class,
        'BCCs' => BCC::class,
        'BCDs' => BCD::class,
    );

}
