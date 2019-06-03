<?php

// locale: basque (es)

use Moment\Moment;

return array(
    "months"        => explode('_', 'urtarrila_otsaila_martxoa_apirila_maiatza_ekaina_uztaila_abuztua_iraila_urria_azaroa_abendua'),
    "monthsShort"   => explode('_', 'urt._ots._mar._api._mai._eka._uzt._abu._ira._urr._aza._abe.'),
    "weekdays"      => explode('_', 'astelehena_asteartea_asteazkena_osteguna_ostirala_larunbata_igandea'),
    "weekdaysShort" => explode('_', 'al._ar._az._og._ol._lr._ig.'),
    "calendar"      => array(
        "sameDay"  => '[gaur]',
        "nextDay"  => '[bihar]',
        "lastDay"  => '[atzo]',
        "lastWeek" => '[aurreko] l',
        "sameElse" => 'l',
        "withTime" => function (Moment $moment) { return 'H:i[' . ($moment->getMinute() === 0 ? 'etan' : 'ean') . ']'; },
        "default"  => 'Y/m/d',
    ),
    "relativeTime"  => array(
        "future" => '%s barru',
        "past"   => 'duela %s',
        "s"      => 'segundo batzuk',
        "m"      => 'minutu bat',
        "mm"     => '%d minutu',
        "h"      => 'ordu bat',
        "hh"     => '%d ordu',
        "d"      => 'egun bat',
        "dd"     => '%d egun',
        "M"      => 'hilabete bat',
        "MM"     => '%d hilabete',
        "y"      => 'urte bat',
        "yy"     => '%d urte',
    ),
    "ordinal"       => function ($number)
    {
        return $number . '.';
    },
    "week"          => array(
        "dow" => 1, // Monday is the first day of the week.
        "doy" => 7  // The week that contains Jan 4th is the first week of the year.
    ),
);