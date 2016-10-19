#!/bin/bash

base_build_str=toozick/

version=v1

build_types=(php-apache)


for item in "${build_types[@]}"
do
   :
   docker build -t ${base_build_str}${item}:${version} -f docker_files/${item}/Dockerfile .
done
