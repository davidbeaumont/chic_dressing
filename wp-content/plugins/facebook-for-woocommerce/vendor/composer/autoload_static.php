<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6825c407cbbd3941a1a327e91226c4ef
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WooCommerce\\Facebook\\' => 21,
        ),
        'A' => 
        array (
            'Automattic\\WooCommerce\\ActionSchedulerJobFramework\\' => 51,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WooCommerce\\Facebook\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Automattic\\WooCommerce\\ActionSchedulerJobFramework\\' => 
        array (
            0 => __DIR__ . '/..' . '/woocommerce/action-scheduler-job-framework/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\WooCommerce\\ActionSchedulerJobFramework\\AbstractChainedJob' => __DIR__ . '/..' . '/woocommerce/action-scheduler-job-framework/src/AbstractChainedJob.php',
        'Automattic\\WooCommerce\\ActionSchedulerJobFramework\\AbstractJob' => __DIR__ . '/..' . '/woocommerce/action-scheduler-job-framework/src/AbstractJob.php',
        'Automattic\\WooCommerce\\ActionSchedulerJobFramework\\ChainedJobInterface' => __DIR__ . '/..' . '/woocommerce/action-scheduler-job-framework/src/ChainedJobInterface.php',
        'Automattic\\WooCommerce\\ActionSchedulerJobFramework\\JobInterface' => __DIR__ . '/..' . '/woocommerce/action-scheduler-job-framework/src/JobInterface.php',
        'Automattic\\WooCommerce\\ActionSchedulerJobFramework\\Proxies\\ActionScheduler' => __DIR__ . '/..' . '/woocommerce/action-scheduler-job-framework/src/Proxies/ActionScheduler.php',
        'Automattic\\WooCommerce\\ActionSchedulerJobFramework\\Proxies\\ActionSchedulerInterface' => __DIR__ . '/..' . '/woocommerce/action-scheduler-job-framework/src/Proxies/ActionSchedulerInterface.php',
        'Automattic\\WooCommerce\\ActionSchedulerJobFramework\\Utilities\\BatchQueryOffset' => __DIR__ . '/..' . '/woocommerce/action-scheduler-job-framework/src/Utilities/BatchQueryOffset.php',
        'Automattic\\WooCommerce\\ActionSchedulerJobFramework\\Utilities\\BatchSize' => __DIR__ . '/..' . '/woocommerce/action-scheduler-job-framework/src/Utilities/BatchSize.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WooCommerce\\Facebook\\AJAX' => __DIR__ . '/../..' . '/includes/AJAX.php',
        'WooCommerce\\Facebook\\API' => __DIR__ . '/../..' . '/includes/API.php',
        'WooCommerce\\Facebook\\API\\Catalog\\Product_Group\\Products\\Read\\Request' => __DIR__ . '/../..' . '/includes/API/Catalog/Product_Group/Products/Read/Request.php',
        'WooCommerce\\Facebook\\API\\Catalog\\Product_Group\\Products\\Read\\Response' => __DIR__ . '/../..' . '/includes/API/Catalog/Product_Group/Products/Read/Response.php',
        'WooCommerce\\Facebook\\API\\Catalog\\Product_Item\\Find\\Request' => __DIR__ . '/../..' . '/includes/API/Catalog/Product_Item/Find/Request.php',
        'WooCommerce\\Facebook\\API\\Catalog\\Product_Item\\Response' => __DIR__ . '/../..' . '/includes/API/Catalog/Product_Item/Response.php',
        'WooCommerce\\Facebook\\API\\Catalog\\Request' => __DIR__ . '/../..' . '/includes/API/Catalog/Request.php',
        'WooCommerce\\Facebook\\API\\Catalog\\Response' => __DIR__ . '/../..' . '/includes/API/Catalog/Response.php',
        'WooCommerce\\Facebook\\API\\Catalog\\Send_Item_Updates\\Request' => __DIR__ . '/../..' . '/includes/API/Catalog/Send_Item_Updates/Request.php',
        'WooCommerce\\Facebook\\API\\Catalog\\Send_Item_Updates\\Response' => __DIR__ . '/../..' . '/includes/API/Catalog/Send_Item_Updates/Response.php',
        'WooCommerce\\Facebook\\API\\Exceptions\\ConnectApiException' => __DIR__ . '/../..' . '/includes/API/Exceptions/ConnectApiException.php',
        'WooCommerce\\Facebook\\API\\Exceptions\\Request_Limit_Reached' => __DIR__ . '/../..' . '/includes/API/Exceptions/Request_Limit_Reached.php',
        'WooCommerce\\Facebook\\API\\FBE\\Configuration\\Messenger' => __DIR__ . '/../..' . '/includes/API/FBE/Configuration/Messenger.php',
        'WooCommerce\\Facebook\\API\\FBE\\Configuration\\Read\\Response' => __DIR__ . '/../..' . '/includes/API/FBE/Configuration/Read/Response.php',
        'WooCommerce\\Facebook\\API\\FBE\\Configuration\\Request' => __DIR__ . '/../..' . '/includes/API/FBE/Configuration/Request.php',
        'WooCommerce\\Facebook\\API\\FBE\\Configuration\\Update\\Request' => __DIR__ . '/../..' . '/includes/API/FBE/Configuration/Update/Request.php',
        'WooCommerce\\Facebook\\API\\FBE\\Configuration\\Update\\Response' => __DIR__ . '/../..' . '/includes/API/FBE/Configuration/Update/Response.php',
        'WooCommerce\\Facebook\\API\\FBE\\Installation\\Read\\Request' => __DIR__ . '/../..' . '/includes/API/FBE/Installation/Read/Request.php',
        'WooCommerce\\Facebook\\API\\FBE\\Installation\\Read\\Response' => __DIR__ . '/../..' . '/includes/API/FBE/Installation/Read/Response.php',
        'WooCommerce\\Facebook\\API\\FBE\\Installation\\Request' => __DIR__ . '/../..' . '/includes/API/FBE/Installation/Request.php',
        'WooCommerce\\Facebook\\API\\Log\\Create\\Request' => __DIR__ . '/../..' . '/includes/API/Log/Create/Request.php',
        'WooCommerce\\Facebook\\API\\Log\\Create\\Response' => __DIR__ . '/../..' . '/includes/API/Log/Create/Response.php',
        'WooCommerce\\Facebook\\API\\Pages\\Read\\Request' => __DIR__ . '/../..' . '/includes/API/Pages/Read/Request.php',
        'WooCommerce\\Facebook\\API\\Pages\\Read\\Response' => __DIR__ . '/../..' . '/includes/API/Pages/Read/Response.php',
        'WooCommerce\\Facebook\\API\\Pixel\\Events\\Request' => __DIR__ . '/../..' . '/includes/API/Pixel/Events/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ItemsBatch\\Create\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ItemsBatch/Create/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ItemsBatch\\Create\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ItemsBatch/Create/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductFeedUploads\\Read\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductFeedUploads/Read/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductFeedUploads\\Read\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductFeedUploads/Read/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductFeeds\\Create\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductFeeds/Create/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductFeeds\\Create\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductFeeds/Create/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductFeeds\\ReadAll\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductFeeds/ReadAll/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductFeeds\\ReadAll\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductFeeds/ReadAll/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductFeeds\\Read\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductFeeds/Read/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductFeeds\\Read\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductFeeds/Read/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductGroups\\Create\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductGroups/Create/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductGroups\\Create\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductGroups/Create/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductGroups\\Delete\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductGroups/Delete/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductGroups\\Delete\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductGroups/Delete/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductGroups\\Read\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductGroups/Read/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductGroups\\Read\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductGroups/Read/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductGroups\\Update\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductGroups/Update/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductGroups\\Update\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductGroups/Update/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductSets\\Create\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductSets/Create/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductSets\\Create\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductSets/Create/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductSets\\Delete\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductSets/Delete/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductSets\\Delete\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductSets/Delete/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductSets\\Update\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductSets/Update/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\ProductSets\\Update\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/ProductSets/Update/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\Products\\Create\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/Products/Create/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\Products\\Create\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/Products/Create/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\Products\\Delete\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/Products/Delete/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\Products\\Delete\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/Products/Delete/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\Products\\Id\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/Products/Id/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\Products\\Id\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/Products/Id/Response.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\Products\\Update\\Request' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/Products/Update/Request.php',
        'WooCommerce\\Facebook\\API\\ProductCatalog\\Products\\Update\\Response' => __DIR__ . '/../..' . '/includes/API/ProductCatalog/Products/Update/Response.php',
        'WooCommerce\\Facebook\\API\\Request' => __DIR__ . '/../..' . '/includes/API/Request.php',
        'WooCommerce\\Facebook\\API\\Response' => __DIR__ . '/../..' . '/includes/API/Response.php',
        'WooCommerce\\Facebook\\API\\Tip\\Log\\Request' => __DIR__ . '/../..' . '/includes/API/Tip/Log/Request.php',
        'WooCommerce\\Facebook\\API\\Tip\\Log\\Response' => __DIR__ . '/../..' . '/includes/API/Tip/Log/Response.php',
        'WooCommerce\\Facebook\\API\\Tip\\Read\\Request' => __DIR__ . '/../..' . '/includes/API/Tip/Read/Request.php',
        'WooCommerce\\Facebook\\API\\Tip\\Read\\Response' => __DIR__ . '/../..' . '/includes/API/Tip/Read/Response.php',
        'WooCommerce\\Facebook\\API\\Traits\\Idempotent_Request' => __DIR__ . '/../..' . '/includes/API/Traits/Idempotent_Request.php',
        'WooCommerce\\Facebook\\API\\Traits\\Paginated_Response' => __DIR__ . '/../..' . '/includes/API/Traits/Paginated_Response.php',
        'WooCommerce\\Facebook\\API\\Traits\\Rate_Limited_API' => __DIR__ . '/../..' . '/includes/API/Traits/Rate_Limited_API.php',
        'WooCommerce\\Facebook\\API\\Traits\\Rate_Limited_Request' => __DIR__ . '/../..' . '/includes/API/Traits/Rate_Limited_Request.php',
        'WooCommerce\\Facebook\\API\\Traits\\Rate_Limited_Response' => __DIR__ . '/../..' . '/includes/API/Traits/Rate_Limited_Response.php',
        'WooCommerce\\Facebook\\API\\User\\Permissions\\Delete\\Request' => __DIR__ . '/../..' . '/includes/API/User/Permissions/Delete/Request.php',
        'WooCommerce\\Facebook\\API\\User\\Permissions\\Delete\\Response' => __DIR__ . '/../..' . '/includes/API/User/Permissions/Delete/Response.php',
        'WooCommerce\\Facebook\\API\\User\\Request' => __DIR__ . '/../..' . '/includes/API/User/Request.php',
        'WooCommerce\\Facebook\\API\\User\\Response' => __DIR__ . '/../..' . '/includes/API/User/Response.php',
        'WooCommerce\\Facebook\\Admin' => __DIR__ . '/../..' . '/includes/Admin.php',
        'WooCommerce\\Facebook\\Admin\\Abstract_Settings_Screen' => __DIR__ . '/../..' . '/includes/Admin/Abstract_Settings_Screen.php',
        'WooCommerce\\Facebook\\Admin\\Enhanced_Catalog_Attribute_Fields' => __DIR__ . '/../..' . '/includes/Admin/Enhanced_Catalog_Attribute_Fields.php',
        'WooCommerce\\Facebook\\Admin\\Google_Product_Category_Field' => __DIR__ . '/../..' . '/includes/Admin/Google_Product_Category_Field.php',
        'WooCommerce\\Facebook\\Admin\\Notes\\SettingsMoved' => __DIR__ . '/../..' . '/includes/Admin/Notes/SettingsMoved.php',
        'WooCommerce\\Facebook\\Admin\\Product_Categories' => __DIR__ . '/../..' . '/includes/Admin/Product_Categories.php',
        'WooCommerce\\Facebook\\Admin\\Product_Sets' => __DIR__ . '/../..' . '/includes/Admin/Product_Sets.php',
        'WooCommerce\\Facebook\\Admin\\Product_Sync_Meta_Box' => __DIR__ . '/../..' . '/includes/Admin/Product_Sync_Meta_Box.php',
        'WooCommerce\\Facebook\\Admin\\Products' => __DIR__ . '/../..' . '/includes/Admin/Products.php',
        'WooCommerce\\Facebook\\Admin\\Settings' => __DIR__ . '/../..' . '/includes/Admin/Settings.php',
        'WooCommerce\\Facebook\\Admin\\Settings_Screens\\Advertise' => __DIR__ . '/../..' . '/includes/Admin/Settings_Screens/Advertise.php',
        'WooCommerce\\Facebook\\Admin\\Settings_Screens\\Connection' => __DIR__ . '/../..' . '/includes/Admin/Settings_Screens/Connection.php',
        'WooCommerce\\Facebook\\Admin\\Settings_Screens\\Messenger' => __DIR__ . '/../..' . '/includes/Admin/Settings_Screens/Messenger.php',
        'WooCommerce\\Facebook\\Admin\\Settings_Screens\\Product_Sets' => __DIR__ . '/../..' . '/includes/Admin/Settings_Screens/Product_Sets.php',
        'WooCommerce\\Facebook\\Admin\\Settings_Screens\\Product_Sync' => __DIR__ . '/../..' . '/includes/Admin/Settings_Screens/Product_Sync.php',
        'WooCommerce\\Facebook\\Admin\\Tasks\\Setup' => __DIR__ . '/../..' . '/includes/Admin/Tasks/Setup.php',
        'WooCommerce\\Facebook\\Commerce' => __DIR__ . '/../..' . '/includes/Commerce.php',
        'WooCommerce\\Facebook\\Debug\\ProfilingLogger' => __DIR__ . '/../..' . '/includes/Debug/ProfilingLogger.php',
        'WooCommerce\\Facebook\\Debug\\ProfilingLoggerProcess' => __DIR__ . '/../..' . '/includes/Debug/ProfilingLoggerProcess.php',
        'WooCommerce\\Facebook\\Events\\AAMSettings' => __DIR__ . '/../..' . '/includes/Events/AAMSettings.php',
        'WooCommerce\\Facebook\\Events\\Event' => __DIR__ . '/../..' . '/includes/Events/Event.php',
        'WooCommerce\\Facebook\\Events\\Normalizer' => __DIR__ . '/../..' . '/includes/Events/Normalizer.php',
        'WooCommerce\\Facebook\\ExternalVersionUpdate\\Update' => __DIR__ . '/../..' . '/includes/ExternalVersionUpdate/Update.php',
        'WooCommerce\\Facebook\\Feed\\FeedConfigurationDetection' => __DIR__ . '/../..' . '/includes/Feed/FeedConfigurationDetection.php',
        'WooCommerce\\Facebook\\Framework\\AdminMessageHandler' => __DIR__ . '/../..' . '/includes/Framework/AdminMessageHandler.php',
        'WooCommerce\\Facebook\\Framework\\AdminNoticeHandler' => __DIR__ . '/../..' . '/includes/Framework/AdminNoticeHandler.php',
        'WooCommerce\\Facebook\\Framework\\Api\\Base' => __DIR__ . '/../..' . '/includes/Framework/Api/Base.php',
        'WooCommerce\\Facebook\\Framework\\Api\\Exception' => __DIR__ . '/../..' . '/includes/Framework/Api/Exception.php',
        'WooCommerce\\Facebook\\Framework\\Api\\JSONRequest' => __DIR__ . '/../..' . '/includes/Framework/Api/JSONRequest.php',
        'WooCommerce\\Facebook\\Framework\\Api\\JSONResponse' => __DIR__ . '/../..' . '/includes/Framework/Api/JSONResponse.php',
        'WooCommerce\\Facebook\\Framework\\Api\\Request' => __DIR__ . '/../..' . '/includes/Framework/Api/Request.php',
        'WooCommerce\\Facebook\\Framework\\Api\\Response' => __DIR__ . '/../..' . '/includes/Framework/Api/Response.php',
        'WooCommerce\\Facebook\\Framework\\Helper' => __DIR__ . '/../..' . '/includes/Framework/Helper.php',
        'WooCommerce\\Facebook\\Framework\\Lifecycle' => __DIR__ . '/../..' . '/includes/Framework/Lifecycle.php',
        'WooCommerce\\Facebook\\Framework\\Plugin' => __DIR__ . '/../..' . '/includes/Framework/Plugin.php',
        'WooCommerce\\Facebook\\Framework\\Plugin\\Compatibility' => __DIR__ . '/../..' . '/includes/Framework/Plugin/Compatibility.php',
        'WooCommerce\\Facebook\\Framework\\Plugin\\Dependencies' => __DIR__ . '/../..' . '/includes/Framework/Plugin/Dependencies.php',
        'WooCommerce\\Facebook\\Framework\\Plugin\\Exception' => __DIR__ . '/../..' . '/includes/Framework/Plugin/Exception.php',
        'WooCommerce\\Facebook\\Framework\\Utilities\\AsyncRequest' => __DIR__ . '/../..' . '/includes/Framework/Utilities/AsyncRequest.php',
        'WooCommerce\\Facebook\\Framework\\Utilities\\BackgroundJobHandler' => __DIR__ . '/../..' . '/includes/Framework/Utilities/BackgroundJobHandler.php',
        'WooCommerce\\Facebook\\Handlers\\Connection' => __DIR__ . '/../..' . '/includes/Handlers/Connection.php',
        'WooCommerce\\Facebook\\Handlers\\WebHook' => __DIR__ . '/../..' . '/includes/Handlers/WebHook.php',
        'WooCommerce\\Facebook\\Integrations\\Bookings' => __DIR__ . '/../..' . '/includes/Integrations/Bookings.php',
        'WooCommerce\\Facebook\\Jobs\\AbstractChainedJob' => __DIR__ . '/../..' . '/includes/Jobs/AbstractChainedJob.php',
        'WooCommerce\\Facebook\\Jobs\\CleanupSkyvergeFrameworkJobOptions' => __DIR__ . '/../..' . '/includes/Jobs/CleanupSkyvergeFrameworkJobOptions.php',
        'WooCommerce\\Facebook\\Jobs\\DeleteProductsFromFBCatalog' => __DIR__ . '/../..' . '/includes/Jobs/DeleteProductsFromFBCatalog.php',
        'WooCommerce\\Facebook\\Jobs\\GenerateProductFeed' => __DIR__ . '/../..' . '/includes/Jobs/GenerateProductFeed.php',
        'WooCommerce\\Facebook\\Jobs\\JobManager' => __DIR__ . '/../..' . '/includes/Jobs/JobManager.php',
        'WooCommerce\\Facebook\\Jobs\\LoggingTrait' => __DIR__ . '/../..' . '/includes/Jobs/LoggingTrait.php',
        'WooCommerce\\Facebook\\Jobs\\ResetAllProductsFBSettings' => __DIR__ . '/../..' . '/includes/Jobs/ResetAllProductsFBSettings.php',
        'WooCommerce\\Facebook\\Lifecycle' => __DIR__ . '/../..' . '/includes/Lifecycle.php',
        'WooCommerce\\Facebook\\Locale' => __DIR__ . '/../..' . '/includes/Locale.php',
        'WooCommerce\\Facebook\\ProductSets\\Sync' => __DIR__ . '/../..' . '/includes/ProductSets/Sync.php',
        'WooCommerce\\Facebook\\ProductSync\\ProductExcludedException' => __DIR__ . '/../..' . '/includes/ProductSync/ProductExcludedException.php',
        'WooCommerce\\Facebook\\ProductSync\\ProductInvalidException' => __DIR__ . '/../..' . '/includes/ProductSync/ProductInvalidException.php',
        'WooCommerce\\Facebook\\ProductSync\\ProductValidator' => __DIR__ . '/../..' . '/includes/ProductSync/ProductValidator.php',
        'WooCommerce\\Facebook\\Product_Categories' => __DIR__ . '/../..' . '/includes/Product_Categories.php',
        'WooCommerce\\Facebook\\Products' => __DIR__ . '/../..' . '/includes/Products.php',
        'WooCommerce\\Facebook\\Products\\FBCategories' => __DIR__ . '/../..' . '/includes/Products/FBCategories.php',
        'WooCommerce\\Facebook\\Products\\Feed' => __DIR__ . '/../..' . '/includes/Products/Feed.php',
        'WooCommerce\\Facebook\\Products\\GoogleProductTaxonomy' => __DIR__ . '/../..' . '/includes/Products/GoogleProductTaxonomy.php',
        'WooCommerce\\Facebook\\Products\\Stock' => __DIR__ . '/../..' . '/includes/Products/Stock.php',
        'WooCommerce\\Facebook\\Products\\Sync' => __DIR__ . '/../..' . '/includes/Products/Sync.php',
        'WooCommerce\\Facebook\\Products\\Sync\\Background' => __DIR__ . '/../..' . '/includes/Products/Sync/Background.php',
        'WooCommerce\\Facebook\\Utilities\\Background_Handle_Virtual_Products_Variations' => __DIR__ . '/../..' . '/includes/Utilities/Background_Handle_Virtual_Products_Variations.php',
        'WooCommerce\\Facebook\\Utilities\\Background_Remove_Duplicate_Visibility_Meta' => __DIR__ . '/../..' . '/includes/Utilities/Background_Remove_Duplicate_Visibility_Meta.php',
        'WooCommerce\\Facebook\\Utilities\\DebugTools' => __DIR__ . '/../..' . '/includes/Utilities/DebugTools.php',
        'WooCommerce\\Facebook\\Utilities\\Heartbeat' => __DIR__ . '/../..' . '/includes/Utilities/Heartbeat.php',
        'WooCommerce\\Facebook\\Utilities\\Tracker' => __DIR__ . '/../..' . '/includes/Utilities/Tracker.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6825c407cbbd3941a1a327e91226c4ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6825c407cbbd3941a1a327e91226c4ef::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6825c407cbbd3941a1a327e91226c4ef::$classMap;

        }, null, ClassLoader::class);
    }
}
