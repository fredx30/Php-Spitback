# PHP Spit-back

Open in phpstorm. Use dockerfile for php debug builds.

After starting this hosts a webservice on port 80 that returns all and any 
$_ type magic php vars. See $_Request, $_Get, $_Post, $_Server, $_Env.

Build image with 
`docker build . --tag php-spitback:latest`

Run image with `docker run --rm --publish 80:80/tcp php-spitback:latest`

Setup for debugging with xdebug. Mark a debug point in idea and start listening for debug points.