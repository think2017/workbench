#!/bin/bash
ETCD_VER=v3.3.4
ETCD_DIR=etcd-download
DOWNLOAD_URL=https://github.com/coreos/etcd/releases/download

# Download
mkdir ${ETCD_DIR}
cd ${ETCD_DIR}
wget ${DOWNLOAD_URL}/${ETCD_VER}/etcd-${ETCD_VER}-linux-amd64.tar.gz 
tar -xzvf etcd-${ETCD_VER}-linux-amd64.tar.gz

# install
cd etcd-${ETCD_VER}-linux-amd64
cp etcdctl /usr/local/bin/
