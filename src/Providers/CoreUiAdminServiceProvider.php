<?php

namespace Pinpin\CoreUiAdmin\Providers;

use Illuminate\Support\ServiceProvider;

class CoreUiAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // 註冊前端資源
        $this->loadViewsFrom(base_path('packages/pinpin/core-ui-admin/resources/views'), 'core-ui-admin');
    }

    public function register()
    {
        // 註冊配置
        if (file_exists(dirname(__DIR__, 2) . '/config/core-ui-admin.php')) {
            $this->mergeConfigFrom(dirname(__DIR__, 2) . '/config/core-ui-admin.php', 'core-ui-admin');
        }
    }
}
