
<?php

class BookingMapper {

    public static function map(Booking $booking, array $properties) {
        if (array_key_exists('id', $properties)) {
            $booking->setId($properties['id']);
        }
        if (array_key_exists('flightName', $properties)) {
            $booking->setFlightName($properties['flight_name']);
        }
        $flightDate = self::createDateTime($properties['flight_date']);
        if ($flightDate) {
            $booking->setFlightDate($flightDate);
        }
        $dateCreated = self::createDateTime($properties['date_created']);
        if ($dateCreated) {
            $booking->setDateCreated($dateCreated);
        }
        if (array_key_exists('userId', $properties)) {
            $booking->setUserId($properties['user_Id']);
        }
    }

    private static function createDateTime($input) {
        return DateTime::createFromFormat('Y-n-j H:i:s', $input);
    }

}