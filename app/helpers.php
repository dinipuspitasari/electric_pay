<?php
    function getMonthNames($monthNumber) {
        $months = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        ];

        return $months[$monthNumber] ?? 'Invalid Month';
    }

    function status($status) {
        switch ((int) $status) {
            case 1:
                return 'Menunggu Pembayaran';
            case 2:
                return 'Sudah Bayar';    
            default:
                return '';
        }
    }