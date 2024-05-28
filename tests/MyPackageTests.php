<?php

use PHPUnit\Framework\TestCase;
use Ahammedsojon\DateTimeFormat\DateTimeFormat;

class DateTimeFormatTest extends TestCase {

    public function testFormatDateTime() {
        $dateTimeFormat = new DateTimeFormat();
        $dateString = '2024-05-28 14:00:00';
        $format = 'Y-m-d H:i:s';
        $formattedDate = $dateTimeFormat->formatDateTime($dateString, $format);
        $this->assertEquals('2024-05-28 14:00:00', $formattedDate);

        $format = 'd/m/Y';
        $formattedDate = $dateTimeFormat->formatDateTime($dateString, $format);
        $this->assertEquals('28/05/2024', $formattedDate);
    }

    public function testFormatFullDate() {
        $dateTimeFormat = new DateTimeFormat();
        $dateString = '2024-05-28 14:00:00';
        $formattedDate = $dateTimeFormat->formatFullDate($dateString);
        $this->assertEquals('Tuesday, May 28, 2024', $formattedDate);

        $dateString = '2024-12-01 14:00:00';
        $formattedDate = $dateTimeFormat->formatFullDate($dateString);
        $this->assertEquals('Sunday, December 1, 2024', $formattedDate);
    }

}
