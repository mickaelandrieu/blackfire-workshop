# Wordpress on Docker (with Blackfire support)

## How to

* Clone this repository, in `web` folder do "make up"
* Access "http://wp.docker.localhost:8000"
* The End.

## Configure Blackfire

In `web/docker-compose.yml` file, change:

* `BLACKFIRE_CLIENT_ID`
* `BLACKFIRE_CLIENT_TOKEN`
* `BLACKFIRE_SERVER_ID`
* `BLACKFIRE_SERVER_TOKEN`

by your Blackfire credentials.

### Blackfire curl


