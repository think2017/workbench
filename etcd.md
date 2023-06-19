
https://github.com/etcd-io/etcd/releases/download/v3.4.14/etcd-v3.4.14-linux-amd64.tar.gz

registry.qtt6.cn/qtt-bigdata/ps-online-new-v2.6.2-test:v2-20201209092649-metrics
registry.qtt6.cn/qtt-bigdata/ps-online-new-v2.6.2-test:v2-20201209092649-tx

etcd001=http://10.0.40.128:2380,etcd002=http://10.0.40.60:2380,etcd003=http://10.0.40.58:2380

ETCDCTL_API=3 etcdctl --endpoints=http://172.16.91.57:2379 get /innotech/recommender/psonline/rec/adctr-allmedia-merge-v3-afresh/model/base --prefix


ETCDCTL_API=3 etcdctl --write-out=table --endpoints=10.0.40.60:2379,10.0.40.128:2379,10.0.40.58:2379 endpoint health
ETCDCTL_API=3 etcdctl --write-out=table --endpoints=10.0.40.60:2379,10.0.40.128:2379,10.0.40.58:2379 member list
ETCDCTL_API=3 etcdctl --write-out=table --endpoints=10.0.40.60:2379,10.0.40.128:2379,10.0.40.58:2379 endpoint status

ETCDCTL_API=3 etcdctl --endpoints=http://172.16.91.57:2379 get /innotech/recommender/psonline/rec/adctr-allmedia-merge-v3-afresh/model/base
ETCDCTL_API=3 etcdctl --endpoints=http://172.16.91.57:2379 get /innotech/recommender/psonline/rec/adctr-allmedia-merge-v3-afresh/model/delta


ETCDCTL_API=3 etcdctl --endpoints=http://10.0.40.128:2379 get /innotech/recommender/psonline/rec/adctr-allmedia-merge-v3-afresh/model --prefix
ETCDCTL_API=3 etcdctl --endpoints=http://10.0.40.128:2379 get /innotech/recommender/psonline/rec/adctr-allmedia-merge-v3-afresh/model/base
ETCDCTL_API=3 etcdctl --endpoints=http://10.0.40.128:2379 get /innotech/recommender/psonline/rec/adctr-allmedia-merge-v3-afresh/model/delta

ETCDCTL_API=3 etcdctl --endpoints=http://10.0.40.128:2379 put /innotech/recommender/psonline/rec/adctr-allmedia-merge-v3-afresh/model/base '{"timestamp": 1686879018, "base_key": "2023-06-16", "split_count": 1, "is_rollback": true, "date": "2023-06-16-base", "path": "hdfs://inner-di-hdfs.1sapp.com:8020/algo/user/algobase/ps_split_new/data/adctr-allmedia-merge-v3-afresh/base/2023-06-16", "delta_key": "base", "id": "2023-06-16-base", "size": 326946103}'


ETCDCTL_API=3 etcdctl --endpoints=http://10.0.40.128:2379 put /innotech/recommender/psonline/rec/adctr-allmedia-merge-v3-afresh/model/delta '[{"timestamp": 1686879310, "base_key": "2023-06-16", "split_count": 1, "is_rollback": true, "date": "2023-06-16-pass_07_delta_07__pass_00_delta_00", "path": "hdfs://inner-di-hdfs.1sapp.com:8020/algo/user/algobase/ps_split_new/data/adctr-allmedia-merge-v3-afresh/delta/2023-06-16pass_07_delta_07__pass_00_delta_00", "delta_key": "pass_07_delta_07__pass_00_delta_00", "id": "2023-06-16-pass_07_delta_07__pass_00_delta_00", "size": 27076036}, {"size": 5548664, "timestamp": 1686881722, "base_key": "2023-06-16", "is_rollback": true, "date": "2023-06-16-pass_08_delta_08", "path": "hdfs://inner-di-hdfs.1sapp.com:8020/algo/user/algobase/ps_split_new/data/adctr-allmedia-merge-v3-afresh/delta/2023-06-16pass_08_delta_08", "delta_key": "pass_08_delta_08", "id": "2023-06-16-pass_08_delta_08", "split_count": 1}, {"timestamp": 1686884565, "base_key": "2023-06-16", "split_count": 1, "is_rollback": true, "date": "2023-06-16-pass_09_delta_09", "path": "hdfs://inner-di-hdfs.1sapp.com:8020/algo/user/algobase/ps_split_new/data/adctr-allmedia-merge-v3-afresh/delta/2023-06-16pass_09_delta_09", "delta_key": "pass_09_delta_09", "id": "2023-06-16-pass_09_delta_09", "size": 5271438}, {"size": 5652013, "timestamp": 1686887804, "delta_key": "pass_10_delta_10", "is_rollback": true, "date": "2023-06-16-pass_10_delta_10", "path": "hdfs://inner-di-hdfs.1sapp.com:8020/algo/user/algobase/ps_split_new/data/adctr-allmedia-merge-v3-afresh/delta/2023-06-16pass_10_delta_10", "base_key": "2023-06-16", "id": "2023-06-16-pass_10_delta_10", "split_count": 1}, {"timestamp": 1686891649, "base_key": "2023-06-16", "split_count": 1, "is_rollback": true, "date": "2023-06-16-pass_11_delta_11", "path": "hdfs://inner-di-hdfs.1sapp.com:8020/algo/user/algobase/ps_split_new/data/adctr-allmedia-merge-v3-afresh/delta/2023-06-16pass_11_delta_11", "delta_key": "pass_11_delta_11", "id": "2023-06-16-pass_11_delta_11", "size": 5863257}, {"size": 5909162, "timestamp": 1686894869, "delta_key": "pass_12_delta_12", "is_rollback": true, "date": "2023-06-16-pass_12_delta_12", "path": "hdfs://inner-di-hdfs.1sapp.com:8020/algo/user/algobase/ps_split_new/data/adctr-allmedia-merge-v3-afresh/delta/2023-06-16pass_12_delta_12", "base_key": "2023-06-16", "id": "2023-06-16-pass_12_delta_12", "split_count": 1}, {"size": 4988027, "timestamp": 1686898189, "base_key": "2023-06-16", "is_rollback": true, "date": "2023-06-16-pass_13_delta_13", "path": "hdfs://inner-di-hdfs.1sapp.com:8020/algo/user/algobase/ps_split_new/data/adctr-allmedia-merge-v3-afresh/delta/2023-06-16pass_13_delta_13", "delta_key": "pass_13_delta_13", "id": "2023-06-16-pass_13_delta_13", "split_count": 1}, {"size": 4899880, "timestamp": 1686901748, "base_key": "2023-06-16", "is_rollback": true, "date": "2023-06-16-pass_14_delta_14", "path": "hdfs://inner-di-hdfs.1sapp.com:8020/algo/user/algobase/ps_split_new/data/adctr-allmedia-merge-v3-afresh/delta/2023-06-16pass_14_delta_14", "delta_key": "pass_14_delta_14", "id": "2023-06-16-pass_14_delta_14", "split_count": 1}, {"size": 5351499, "timestamp": 1686905129, "base_key": "2023-06-16", "is_rollback": true, "date": "2023-06-16-pass_15_delta_15", "path": "hdfs://inner-di-hdfs.1sapp.com:8020/algo/user/algobase/ps_split_new/data/adctr-allmedia-merge-v3-afresh/delta/2023-06-16pass_15_delta_15", "delta_key": "pass_15_delta_15", "id": "2023-06-16-pass_15_delta_15", "split_count": 1}, {"size": 4988307, "timestamp": 1686908805, "base_key": "2023-06-16", "is_rollback": true, "date": "2023-06-16-pass_16_delta_16", "path": "hdfs://inner-di-hdfs.1sapp.com:8020/algo/user/algobase/ps_split_new/data/adctr-allmedia-merge-v3-afresh/delta/2023-06-16pass_16_delta_16", "delta_key": "pass_16_delta_16", "id": "2023-06-16-pass_16_delta_16", "split_count": 1}]'