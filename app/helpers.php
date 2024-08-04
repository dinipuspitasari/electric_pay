<?php
/**
     * Mengembalikan nama bulan berdasarkan nomor bulan.
     *
     * @param int $monthNumber Nomor bulan (1-12)
     * @return string Nama bulan dalam bahasa Indonesia atau 'Invalid Month' jika nomor bulan tidak valid
     */
    function getMonthNames($monthNumber) {

        //array berisi nama bulan
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

        //mengembalikan nama bulan berdasarkan nomor bulan, atau 'Invalid Month' jika nomor bulan tidak ditemukan dalam array
        return $months[$monthNumber] ?? 'Invalid Month';
    }


     /**
     * Mengembalikan status pembayaran berdasarkan kode status.
     *
     * @param int $status Kode status pembayaran (1 atau 2)
     * @return string Deskripsi status pembayaran
     */


    function status($status) {
        // Menggunakan switch-case untuk menentukan deskripsi status berdasarkan kode status
        switch ((int) $status) {
            case 1:
                return 'Menunggu Pembayaran'; // Deskripsi untuk status menunggu pembayaran
            case 2:
                return 'Sudah Bayar'; // Deskripsi untuk status sudah bayar 
            default:
                return '';  // Mengembalikan string kosong jika kode status tidak dikenali
        }
    }