# Wordpress on Docker (with Blackfire support)

## How to

> Everything related to Docker lives in the "web" directory.

Copy `.env.dist` file to `.env` file.

### Configure Blackfire

In `.env` file, complete these fields:

* `BLACKFIRE_CLIENT_ID`
* `BLACKFIRE_CLIENT_TOKEN`
* `BLACKFIRE_SERVER_ID`
* `BLACKFIRE_SERVER_TOKEN`

by your [Blackfire credentials](https://blackfire.io/my/settings/credentials) (you need to log in).


* Clone this repository. In the `web` folder, executes "make up" command using the terminal.
* Access "http://wp.docker.localhost:8000"
* The End.



* Clone this repository, in `web` folder do "make up"
* Access "http://wp.docker.localhost:8000"
* The End.


### Blackfire curl

=> Once Wordpress Web installation process is done, trigger a build for "http://wp.docker.localhost:8000/?p=1"

```
make blackfire "curl nginx/?p=1"
```

***Profil PHP file with blackfire***

```
docker-compose run php blackfire run php <php-file-to-tests.php>
```

On Mac

```
docker-compose run blackfire blackfire curl "nginx/?p=1"
```

=> trigger a build for "http://wp.docker.localhost:8000/?p=1"

> In case of double quotes issue, rely on docker-compose binary: ``docker-compose run blackfire blackfire curl '<your-curl-request>'``

### Domains

On Google Chrome, should works else add the virtual host:

Add
```
127.0.0.1 wp.docker.localhost
```

to your `/etc/hosts` (for linux, mac?) or `C:\Windows\System32\drivers\etc\hosts`

### Still stuck?

Read [this](https://wodby.com/docs/stacks/wordpress/local/#usage) please.
