<?php
namespace DesignPatterns\Creational\AbstractFactory;

class unix_json_writer implements json_writer {
    public function write(array $data, bool $formated): string{
        $options = 0;
        if ($formated){
            $options = JSON_PRETTY_PRINT;
        }
        return json_encode($data, $options);
    }
}
?>
