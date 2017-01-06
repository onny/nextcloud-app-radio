# Nextcloud Radio app
This experimental app uses the radio-browser.info api and offers radio stations right in your Nextcloud!

[![](https://onny.project-insanity.org/files/nextcloud-app-radio-screenshot2.png)](https://onny.project-insanity.org/files/nextcloud-app-radio-screenshot2.png)

## Maintainers
* [Jonas Heinrich](https://github.com/onny)

## Installation

 * **Using git:** In your `nextcloud/apps/` directory, run `git clone https://git.project-insanity.org/onny/nextcloud-app-radio.git radio`. Then go to the Apps manager tab in your Nextcloud web interface, and enable the Radio app.
 * **Using the zip archive:** Download the latest [tar.bz2 archive](https://git.project-insanity.org/onny/nextcloud-app-radio/repository/archive.tar.bz2?ref=master), extract the directory inside your `nextcloud/apps/` directory, and rename it to `radio`. For stable releases, you can also download one of the [releases](https://git.project-insanity.org/onny/nextcloud-app-radio/) tar.bz2 archives. Then go to the Apps manager tab in your Nextcloud web interface, and enable the Radio app.
 * **Using package manager:** For ArchLinux, there is an [AUR package](https://aur.archlinux.org/packages/nextcloud-app-radio-git/) available.

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
