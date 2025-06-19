<?php

namespace Pinpin\CoreUiAdmin\Providers;

use App\Support\PackageOptionLoader;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    protected $optionLoader;

    public function __construct($app)
    {
        parent::__construct($app);
        $this->optionLoader = new PackageOptionLoader('pinpin', 'core-ui-admin');
    }

    public function boot()
    {
        if (! $this->app->bound('array-loader')) {
            throw new \RuntimeException(
                "[ThemeServiceProvider] Laravel Container 尚未註冊 'array-loader'，請確認 AppServiceProvider 已綁定 ArrayFileLoader。"
            );
        }

        // 註冊 Blade View 路徑
        $this->loadViewsFrom(base_path('packages/pinpin/core-ui-admin/resources/views'), 'core-ui-admin');
    }
    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__, 2) . '/config/core-ui-admin.php', 'core-ui-admin');
    }
}
