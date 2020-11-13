Following FreeCodeCamp's Laravel tutorial for Instagram clone at https://www.youtube.com/watch?reload=9&v=ImtZ5yENzgE but due to version difference (currently late 2020 tutorial is from May 2019) but keeping track of those deltas here:

1. make:auth no longer a valid artisan command, had to download laravel/ui and do something like php artisan ui:auth --vue IIRC
2. \App\\<model name> had been changed to \App\Models\\<model name> in Laravel
3. default route style seems to be different, so I imitated the default code, FreeCodeCamp's route used an annotation or something (@ sign instruction, might be confusing the terminology with Java), I stuck with the [Path\to\directory] style
4. currently having trouble with findOrFail for User with no Profile (getting Laravel debug screen instead of simple 404)
