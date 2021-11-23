<?php

    namespace App\Providers;

    use App\Contracts\Dao\Student\StudentDaoInterface;
    use App\Contracts\Services\Student\StudentServiceInterface;
    use App\Dao\Student\StudentDao;
    use App\Services\Student\StudentService;
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
            //Dao Registration
            $this->app->bind(StudentDaoInterface::class, StudentDao::class);

            //Service Registration
            $this->app->bind(StudentServiceInterface::class, StudentService::class);
        }

        /**
         * Bootstrap any application services.
         *
         * @return void
         */
        public function boot()
        {
            //
        }
    }
?>
