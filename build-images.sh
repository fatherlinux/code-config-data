#!/usr/bin/bash

# Build UBI 8 PHP image
podman build -f Containerfile-ubi8-httpd-php -t localhost/ubi8-httpd-php

# Build UBI 9 PHP image
podman build -f Containerfile-ubi9-httpd-php -t localhost/ubi9-httpd-php

# Build UBI 8 Perl image
podman build -t localhost/httpd-perl -f Containerfile-ubi8-httpd-perl
