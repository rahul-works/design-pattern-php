<?php

interface OutputInterface {
    public function load();
}


class SerializedArrayOutput implements OutputInterface {
    public function load() {
        $arrayOfData = "{test:SerializedArrayOutput}";
        return serialize($arrayOfData);
    }
}

class JsonStringOutput implements OutputInterface {
    public function load() {
        $arrayOfData = "{test:JsonStringOutput}";
        return json_encode($arrayOfData);
    }
}

class ArrayOutput implements OutputInterface {
    public function load() {
        $arrayOfData = "{test:ArrayOutput}";
        return $arrayOfData;
    }
}
$serialize = new SerializedArrayOutput();
print_r($serialize->load());

$json = new JsonStringOutput();
print_r($json->load());

$arr = new ArrayOutput();
print_r($arr->load());