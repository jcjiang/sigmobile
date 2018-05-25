# local viewing/editing

in terminal, go to grav/ directory, run the following command: 

php -S localhost:8080 system/router.php 

then view in the browser: http://localhost:8080/

# recompiling scss 

if the template (page layout, etc) is changed in any way, we'd need to re-compile the scss/css file. 

to do so, go to grav-admin/user/themes/antimatter/ directory and run the following command: 

scss --watch scss:css-compiled

# clean up caches

the command to clean cache: 

grav-admin/bin/grav clear-cache

can also clean cache in the admin webpage. 

