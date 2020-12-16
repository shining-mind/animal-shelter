<?php

declare(strict_types=1);

if (!function_exists('trans_plural')) {
    /**
     * @param string $key
     * @param int $count
     * @return string
     */
    function trans_plural(string $key, int $count)
    {
        $cases = [2, 0, 1, 1, 1, 2];
        $case = ($count % 100 > 4 && $count %100 < 20) ? 2 : $cases[min($count % 10, 5)];
        return trans("$key.$case", ['count' => $count]);
    }
}
