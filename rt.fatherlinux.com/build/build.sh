#!/bin/bash

podman build \
-v /srv/rt.fatherlinux.com/code/rt-4.4.4/:/root/rt-4.4.4:Z \
-v /srv/rt.fatherlinux.com/code/cpan/:/root/.cpan:Z \
-v /srv/rt.fatherlinux.com/config/MyConfig.pm:/root/.cpan/CPAN/MyConfig.pm \
-t localhost/rt:4.4.4 -f Containerfile-rt4
