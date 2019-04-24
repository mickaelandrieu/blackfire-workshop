# Wordpress on Docker (with Blackfire support)

## How to

### Configure Blackfire

In `web/docker-compose.yml` file, change:

* `BLACKFIRE_CLIENT_ID`
* `BLACKFIRE_CLIENT_TOKEN`
* `BLACKFIRE_SERVER_ID`
* `BLACKFIRE_SERVER_TOKEN`

by your Blackfire credentials.


* Clone this repository, in `web` folder do "make up"
* Access "http://wp.docker.localhost:8000"
* The End.


### Blackfire curl

```
make blackfire "curl nginx/?p=1"
```

=> trigger a build for "http://wp.docker.localhost:8000"

### Domains

On Google Chrome, should works else add the virtual host:

Add 
```
127.0.0.1 wp.docker.localhost
```

to your `/etc/hosts` (for linux, mac?) or `C:\Windows\System32\drivers\etc\hosts`

### Still stuck?

Read [this](https://wodby.com/docs/stacks/wordpress/local/#usage) please.