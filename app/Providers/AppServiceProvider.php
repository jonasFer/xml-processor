<?php

namespace App\Providers;

use App\Domain\Repository\BaseRepositoryInterface;
use App\Domain\Repository\PersonRepositoryInterface;
use App\Domain\Repository\ShipOrderRepositoryInterface;
use App\Domain\Services\BaseServiceInterface;
use App\Domain\Services\PersonServiceInterface;
use App\Domain\Services\ShipOrderServiceInterface;
use App\Models\Xml\XmlPeople;
use App\Models\Xml\XmlShiporder;
use App\Observers\PersonObserver;
use App\Observers\ShipOrderObserver;
use App\Repositorys\BaseRepository;
use App\Repositorys\PersonRepository;
use App\Repositorys\ShipOrderRepository;
use App\Services\BaseService;
use App\Services\PersonService;
use App\Services\ShipOrderService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseServiceInterface::class, BaseService::class);
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(PersonServiceInterface::class, PersonService::class);
        $this->app->bind(ShipOrderServiceInterface::class, ShipOrderService::class);
        $this->app->bind(PersonRepositoryInterface::class, PersonRepository::class);
        $this->app->bind(ShipOrderRepositoryInterface::class, ShipOrderRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        XmlPeople::observe(PersonObserver::class);
        XmlShiporder::observe(ShipOrderObserver::class);
    }
}
