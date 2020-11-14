Following FreeCodeCamp's Laravel tutorial for Instagram clone at https://www.youtube.com/watch?reload=9&v=ImtZ5yENzgE but due to version difference (currently late 2020 tutorial is from May 2019) but keeping track of those deltas here:

1. make:auth no longer a valid artisan command, had to download laravel/ui and do something like php artisan ui:auth --vue IIRC
2. \App\\\<model_name.php> had been changed to \App\Models\\\<model_name.php> in Laravel
3. seems the get method changed, instead of second parameter of 'Profile@index' or whatever it's something more like [Path\to\dir], 'index' using two parameters.
4. in order to mass-save() with tinker like the instructor did, I made the Profile fields "fillable" and left a comment indicating possible future deletion.
5. SOLVED: having trouble with findOrFail for User with no Profile (getting Laravel debug screen instead of simple 404) SOLUTION: even disabling debug mode I got 500 responses instead of 404 so I hacked it out two separate ways A: threw in a bunch of a ? b : c statements to guard against accessing profile fields for profileless users which worked, so I took that out and tried to find a way to do things on the database level and changed the default Register controller to save the created user in a variable then create a profile from that object before returning the user object. So instead of getting 404s for users with no profiles now all users automatically get a profile with their id as the foreign key. So now 500 will be the correct error if findOrFail returns it (though much more unlikely).