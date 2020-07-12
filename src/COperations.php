<?php
namespace jitendrajagtap;

class COperations {
    public function addition( ...$numbers ) {
        $acc = 0;
        foreach ($numbers as $n) {
            $acc += $n;
        }
        return $acc;
    }

}
?>