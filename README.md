# service-session-client

How build

```shell
protoc --proto_path ${proto_path} \
    --php_out ${php_out_path} \
    --grpc_out ${grp_out_path} \
    --plugin=protoc-gen-grpc=${grpc_php_plugin_path} \
    ${proto_file}
```
