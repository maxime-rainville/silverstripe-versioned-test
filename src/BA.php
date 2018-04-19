<?php
namespace VersionedTest;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class BA extends DataObject
{
    use MagicTrait;

    private static $extensions = [
        Versioned::class,
    ];

    private static $singular_name = 'Versioned Owned Child';

    private static $owns = [
        'BAAs',
        'BACs',
    ];

    private static $has_one = array(
        'Parent' => B::class
    );

    private static $has_many = array(
        // 'BAAs' => BAA::class . '.Parent',
        'BAAs' => BAA::class,
        'BABs' => BAB::class,
        'BACs' => BAC::class,
        'BADs' => BAD::class,
    );

    private static $table_name = 'BA';


}
