<?php
    namespace Sha\GetLastFiles;
    
    use Illuminate\Support\ServiceProvider;
    use Sha\GetLastFiles\Commands\GetLastFiles;

    class GetLastFilesServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->commands([
            GetLastFiles::class,
        ]);
    }

    public function register()
    {
        $this->app->singleton('files:new {path} {--select}', function () {
            return new GetLastFiles();
        });

        $this->commands([
            'files:new {path} {--select}',
        ]);
    }
   }
?>