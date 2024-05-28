<?php

namespace AhammedSojon\DateTimeFormat;

class DateTimeFormat {
    public function formatDateTime($dateString, $format) {
        $date = new \DateTime($dateString);
        return $date->format($format);
    }

    public function formatFullDate($dateString) {
        $date = new \DateTime($dateString);
        return $date->format('l, F j, Y');
    }

}
