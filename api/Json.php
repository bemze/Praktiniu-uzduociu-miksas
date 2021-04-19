<?php

class Json
{

    public function readData()
    {
        if (!file_exists(__DIR__ . '/duomenys.json')) {
            $data = json_encode([]);
            file_put_contents(__DIR__ . '/duomenys.json', $data);
        }
        $data = file_get_contents(__DIR__ . '/duomenys.json');
        return json_decode($data, 1);
    }

    public function writeData($duomenys)
    {
        $data = json_encode([$duomenys]);
        file_put_contents(__DIR__ . '/duomenys.json', $data);
    }
}
