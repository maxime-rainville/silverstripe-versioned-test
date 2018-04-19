<?php
namespace VersionedTest;
use SilverStripe\Admin\ModelAdmin;

class VersionedTestAdmin extends ModelAdmin
{

   private static $url_segment = 'versionned-test';

   private static $menu_title = 'Insane Versioning testing';

    private static $managed_models = [
        B::class,
    ];
}
