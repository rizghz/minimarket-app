#!/usr/bin/bash

( ps | grep php | awk {'print $1'} | xargs kill ) && \
( ps | grep apache | awk {'print $1'} | xargs kill ) && \
( ps | grep mysql | awk {'print $1'} | xargs kill )

rm net.log
