# Nextcloud Radio app
This experimental app uses the radio-browser.info api and offers radio stations right in your Nextcloud!

[![](https://onny.project-insanity.org/files/nextcloud-app-radio-screenshot.png)](https://onny.project-insanity.org/files/nextcloud-app-radio-screenshot.png)

## Maintainers
* [Jonas Heinrich](https://github.com/onny)

## Testing
Can be easily tested using Docker:
```
docker run -v /tmp/nextcloud-app-radio:/opt/nextcloud/apps/radio -d --name nextcloud -p 80:80 rootlogin/nextcloud
```
First part of -v is the path to the cloned or downloaded nextcloud radio app. Debug it with:
```
docker run -i -t e326cbb922aa /bin/bash
```
Where -t specifies the container id.
