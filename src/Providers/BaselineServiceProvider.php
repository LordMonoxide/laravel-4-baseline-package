<?php namespace Baseline\Baseline\Providers;

use Illuminate\Support\ServiceProvider;

class BaselineServiceProvider extends ServiceProvider {
  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot() {
    $srcDir = __DIR__ . '/../';
    
    $this->package('baseline/baseline', 'baseline', $srcDir);
    
    include $srcDir . 'Http/routes.php';
    include $srcDir . 'Http/filters.php';
  }
  
  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register() {
    
  }
}