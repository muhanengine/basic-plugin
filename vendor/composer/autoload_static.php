<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0280b8f8e6363b8bc1f6a2e8f081aef9
{
    public static $files = array (
        'a424894c78a7c13c8fd3eb3f641e1536' => __DIR__ . '/../..' . '/includes/Libs/Utils.php',
        '57d63d62009d1ddff51b87a3eefbf226' => __DIR__ . '/../..' . '/includes/Libs/Defines.php',
        '96d79ee9eae37a4b869a6a0eeb59c403' => __DIR__ . '/../..' . '/includes/Libs/Functions.php',
        '185a2d68f6d300285aa6cf4fc86075c4' => __DIR__ . '/../..' . '/includes/Template-functions/TemplateFunctions.php',
    );

    public static $classMap = array (
        'CodeDodamPlugin\\Controllers\\PluginUpdate' => __DIR__ . '/../..' . '/includes/Controller/PluginUpdate.php',
        'CodeDodamPlugin\\Launchs\\Admin\\LaunchAdminMenu' => __DIR__ . '/../..' . '/includes/Launchs/Admin/LaunchAdminMenu.php',
        'CodeDodamPlugin\\Models\\Admin\\SupplyAdminMenuModel' => __DIR__ . '/../..' . '/includes/Models/Admin/SupplyAdminMenuModel.php',
        'CodeDodamPlugin\\Models\\LaunchSupplyModel' => __DIR__ . '/../..' . '/includes/Models/LaunchSupplyModel.php',
        'CodeDodamPlugin\\Supplys\\Admin\\SupplyAdminAddOn' => __DIR__ . '/../..' . '/includes/Supplys/Admin/SupplyAdminAddOn.php',
        'CodeDodamPlugin\\Supplys\\Admin\\SupplyAdminMenu' => __DIR__ . '/../..' . '/includes/Supplys/Admin/SupplyAdminMenu.php',
        'CodeDodamPlugin\\Supplys\\LaunchSupply' => __DIR__ . '/../..' . '/includes/Supplys/LaunchSupply.php',
        'CodeDodamPlugin\\Traits\\TraitStyleScript' => __DIR__ . '/../..' . '/includes/Traits/TraitStyleScript.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0280b8f8e6363b8bc1f6a2e8f081aef9::$classMap;

        }, null, ClassLoader::class);
    }
}
