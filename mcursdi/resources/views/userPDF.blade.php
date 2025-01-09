<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MCU RSDI</title>
    <meta name="author" content="user" />
    <style type="text/css">
        * {
            text-indent: 0;
        }

        h1 {
            color: black;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 13pt;
            margin: 0;
            padding: 0;
        }

        .s1 {
            color: black;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
            margin: 0;
            padding: 0;
        }

        .s2 {
            color: black;
            font-family: Wingdings;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
            margin: 0;
            padding: 0;
        }

        .s3 {
            color: black;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
            margin: 0;
            padding: 0;
        }

        p {
            color: black;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
            margin: 0;
            padding: 0;
        }

        .s4 {
            color: black;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s5 {
            color: black;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 8pt;
            vertical-align: 4pt;
            margin: 0;
            padding: 0;
        }

        .s6 {
            color: black;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
            margin: 0;
            padding: 0;
        }

        li {
            display: block;
        }

        #l1 {
            padding-left: 0pt;
            counter-reset: c1 1;
        }

        #l1>li>*:first-child:before {
            counter-increment: c1;
            content: counter(c1, upper-roman)". ";
            color: black;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        #l1>li:first-child>*:first-child:before {
            counter-increment: c1 0;
        }

        table,
        tbody {
            vertical-align: top;
            margin: 0;
            padding: 0;
        }

        .header {
            position: relative;
            left: 0;
            right: 0;
        }

        .footer {
            position: fixed;
            left: 0;
            right: 0;
        }

        .header {
            top: 0;
            height: 110px;
        }

        .footer {
            bottom: 0;
            height: 30px;
        }

        .ttd {
            bottom: 0;
            height: 100px;
            width: 150px;
        }

        @media print {
            .content {
                margin-bottom: 10%;
            }
        }

        /* Style for images */
        .header img {
            height: 110px;
            width: 100%;
            /* Adjust height as needed */
            vertical-align: middle;
        }

        .footer img {
            height: 30px;
            width: 100%;
            /* Adjust height as needed */
            vertical-align: middle;
        }

        .ttd img {
            height: 100px;
            width: 100px;
            /* Adjust height as needed */
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <!-- Header with Image -->
    <div class="header">
        <img src="{{ asset('images/HEADER.jpg') }}" alt="Logo Rumah Sakit">
    </div>

    <!-- Konten Utama -->
    <div class="content">
        <h1 style="text-indent: 0pt;text-align: center;">MEDICAL CHECK-UP</h1>
        <table style="border-collapse:collapse;" cellspacing="0">
            <tr style="height:14pt">
                <td
                    style="width:50pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        Hari
                    </p>
                </td>
                <td
                    style="width:14pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="text-indent: 0pt;line-height: 13pt;text-align: center;">:</p>
                </td>
                <td
                    style="width:211pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        @php
                            use Carbon\Carbon;

                            $hari = Carbon::parse($mcutransaksi->tanggal)
                                ->locale('id')
                                ->translatedFormat('l');
                        @endphp

                        {{ $hari }}
                </td>
                <td
                    style="width:80pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">No.
                        RM
                    </p>
                </td>
                <td
                    style="width:14pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="text-indent: 0pt;line-height: 13pt;text-align: center;">:</p>
                </td>
                <td
                    style="width:145pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">{{ $mcutransaksi->kd_rekmed }}</p>
                </td>
            </tr>
            <tr style="height:14pt">
                <td
                    style="width:50pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        Tanggal
                    </p>
                </td>
                <td
                    style="width:14pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="text-indent: 0pt;line-height: 13pt;text-align: center;">:</p>
                </td>
                <td
                    style="width:14pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">{{ $mcutransaksi->tanggal }}</p>

                </td>
                <td
                    style="width:80pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        Kelompok</p>
                </td>
                <td
                    style="width:14pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="text-indent: 0pt;line-height: 13pt;text-align: center;">:</p>
                </td>
                <td
                    style="width:145pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        {{ $mcutransaksi->kelompok }}</p>
                </td>
            </tr>
        </table>
        <ol id="l1">
            <li data-list-text="I.">
                <p class="s4" style="text-align: left;">IDENTITAS</p>
                <table style="border-collapse:collapse;" cellspacing="0">
                    <tr style="height:14pt">
                        <td
                            style="width:92pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Nama
                                lengkap
                            </p>
                        </td>
                        <td
                            style="width:14pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3" style="text-indent: 0pt;line-height: 13pt;text-align: center;">:</p>
                        </td>
                        <td
                            style="width:415pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">{{ $mcutransaksi->nama }} (
                                {{ $mcutransaksi->jns_kelamin }} )
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:92pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Tgl Lahir
                                / Umur</p>
                        </td>
                        <td
                            style="width:14pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3" style="text-indent: 0pt;line-height: 13pt;text-align: center;">:</p>
                        </td>
                        <td
                            style="width:415pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ \Carbon\Carbon::parse($mcutransaksi->tanggal_lahir)->format('d M Y') }} /
                                {{ $mcutransaksi->umur }}
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:92pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Alamat
                            </p>
                        </td>
                        <td
                            style="width:14pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3" style="text-indent: 0pt;line-height: 13pt;text-align: center;">:</p>
                        </td>
                        <td
                            style="width:415pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">{{ $mcutransaksi->alamat }}
                            </p>
                        </td>
                    </tr>

                    <tr style="height:14pt">
                        <td
                            style="width:92pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Tinggi
                                Badan
                            </p>
                        </td>
                        <td
                            style="width:14pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3" style="text-indent: 0pt;line-height: 13pt;text-align: center;">:</p>
                        </td>
                        <td
                            style="width:415pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->tinggi_badan }} cm</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:92pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Berat
                                Badan
                            </p>
                        </td>
                        <td
                            style="width:14pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3" style="text-indent: 0pt;line-height: 13pt;text-align: center;">:</p>
                        </td>
                        <td
                            style="width:415pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->berat_badan }} kg</p>
                        </td>
                    </tr>
                </table>
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </li>
            <li data-list-text="II.">
                <p class="s4" style="text-align: left;">ANAMNESA</p>
                <table style="border-collapse:collapse;" cellspacing="0">
                    <tr style="height:55pt">
                        <td
                            style="width:526pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 15pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                {{ $mcutransaksi->anamnesa }}</p>
                        </td>
                    </tr>
                </table>
                <p style="padding-left: 29pt;text-indent: 0pt;text-align: left;" />
            </li>
            <li data-list-text="III.">
                <p class="s4" style="padding-top: 12pt;text-align: left;">
                    RIWAYAT PENYAKIT
                    DAHULU</p>
                <table style="border-collapse:collapse;" cellspacing="0">
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3" style="text-indent: 0pt;line-height: 13pt;text-align: center;">NO</p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 27pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Jenis
                                Penyakit</p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 9pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Ya/
                                Tidak
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 30pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Waktu
                            </p>
                        </td>
                        <td
                            style="width:204pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3" style="text-indent: 0pt;line-height: 13pt;text-align: center;">
                                Keterangan
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 11pt;text-indent: 0pt;line-height: 13pt;text-align: center;">1
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Alergi
                            </p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->alergi ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->alergi_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->alergi_ket }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 11pt;text-indent: 0pt;line-height: 13pt;text-align: center;">2
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Asma
                                Bronkial</p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->asma ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->asma_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->asma_ket }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 11pt;text-indent: 0pt;line-height: 13pt;text-align: center;">3
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                Hipertensi
                            </p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->hipertensi ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->hipertensi_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->hipertensi_ket }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 11pt;text-indent: 0pt;line-height: 13pt;text-align: center;">4
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Diabetes
                                Mellitus</p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->dm ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->dm_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->dm_ket }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 11pt;text-indent: 0pt;line-height: 13pt;text-align: center;">5
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Jantung
                            </p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->jantung ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->jantung_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->jantung_ket }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 11pt;text-indent: 0pt;line-height: 13pt;text-align: center;">6
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Fraktur
                            </p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->jantung ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->jantung_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->jantung_ket }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 11pt;text-indent: 0pt;line-height: 13pt;text-align: center;">7
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                Gastritis/
                                Maag</p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->gastritis ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->gastritis_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->gastritis_ket }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 11pt;text-indent: 0pt;line-height: 13pt;text-align: center;">8
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Ginjal
                            </p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->ginjal ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->ginjal_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->ginjal_ket }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 11pt;text-indent: 0pt;line-height: 13pt;text-align: center;">9
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                Haemorrhoid
                            </p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->hamaerrhoid ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->hamaerrhoid_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->hamaerrhoid_ket }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: center;">10
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                Hepatitis
                            </p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->hepatitis ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->hepatitis_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->hepatitis_ket }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: center;">11
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Epilepsi
                            </p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->epilepsi ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->epilepsi_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->epilepsi_ket }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: center;">12
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">TBC</p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->tbc ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->tbc_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->tbc_ket }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: center;">13
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Hernia
                            </p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->hernia ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->hernia_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->hernia_ket }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: center;">14
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Herpes
                            </p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->herpes ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->herpes_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->herpes_ket }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: center;">15
                            </p>
                        </td>
                        <td
                            style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Operasi
                            </p>
                        </td>
                        <td
                            style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                {{ $mcutransaksi->operasi ? 'Ya' : 'Tidak' }}
                            </p>
                        </td>
                        <td
                            style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->operasi_waktu }}</p>
                        </td>
                        <td
                            style="width:176pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->operasi_ket }}</p>
                        </td>
                    </tr>
                </table>
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </li>
            <li data-list-text="IV.">
                <p class="s4" style="text-align: left;">PEMERIKSAAN FISIK
                </p>
                <table style="border-collapse:collapse;" cellspacing="0">
                    <tr style="height:14pt">
                        <td style="width:525pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                            colspan="3">
                            <p class="s4"
                                style="padding-left: 23pt;text-indent: 0pt;line-height: 13pt;text-align: left;">A.
                                Keadaan
                                Umum</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                Kesadaran
                            </p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                {{ $mcutransaksi->kesadaran }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Skala
                                Nyeri
                            </p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                {{ number_format($mcutransaksi->vas_score, 0) }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Tekanan
                                Darah</p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                {{ $mcutransaksi->tekanan_darah }} mmHg</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Nadi</p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                {{ $mcutransaksi->nadi }} kali/menit ( {{ $mcutransaksi->nadi_ket }} )</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                Respirasi
                            </p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                {{ $mcutransaksi->respirasi }} kali/menit ( {{ $mcutransaksi->respirasi_ket }} )</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Suhu</p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                {{ $mcutransaksi->suhu }} &deg;C ( {{ $mcutransaksi->suhu_ket }} )</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td style="width:482pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                            colspan="3">
                            <p class="s4"
                                style="padding-left: 23pt;text-indent: 0pt;line-height: 13pt;text-align: left;">B.
                                Kepala
                                Leher</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Ukuran
                                Kepala</p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                {{ $mcutransaksi->ukuran_kepala }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 14pt;text-align: left;">Mata</p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 14pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;padding-right: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->mata_kelainan ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->mata_kelainan ? ' , Ket: ' . $mcutransaksi->mata_ket : '' }}
                            </p>
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Buta
                                Warna :
                                {{ $mcutransaksi->buta_warna }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Hidung
                            </p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->kelainan_hidung ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_hidung ? ' , Ket: ' . $mcutransaksi->kelainan_hidung_ket : '' }}
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Mulut
                            </p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->kelainan_mulut ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_mulut ? ' , Ket: ' . $mcutransaksi->kelainan_mulut_ket : '' }}
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Telinga
                            </p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->kelainan_telinga ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_telinga ? ' , Ket: ' . $mcutransaksi->kelainan_telinga_ket : '' }}
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                Tenggorokan
                            </p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->kelainan_tenggorokan ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_tenggorokan ? ' , Ket: ' . $mcutransaksi->kelainan_tenggorokan_ket : '' }}
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Tiroid
                            </p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->kelainan_tiroid ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_tiroid ? ' , Ket: ' . $mcutransaksi->kelainan_tiroid_ket : '' }}
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">JVP</p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->kelainan_jvp ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_jvp ? ' , Ket: ' . $mcutransaksi->kelainan_jvp_ket : '' }}
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">KGB</p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->kelainan_kgb ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_kgb ? ' , Ket: ' . $mcutransaksi->kelainan_kgb_ket : '' }}
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td style="width:482pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                            colspan="3">
                            <p class="s4"
                                style="padding-left: 23pt;text-indent: 0pt;line-height: 13pt;text-align: left;">C.
                                Thorax
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Gerak
                            </p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                {{ $mcutransaksi->thorax_gerak }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                Deformitas
                            </p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                {{ $mcutransaksi->thorax_deformitas }}</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Bentuk
                            </p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                {{ $mcutransaksi->thorax_bentuk }}</p>
                        </td>
                    </tr>
                    <tr style="height:42pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 14pt;text-align: left;">Jantung
                            </p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 14pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 14pt;text-align: left;">Ictus
                                Cordis
                                : {{ $mcutransaksi->thorax_jantung_ictus_cordis ? 'Ada' : 'Tidak' }}</p>
                            <p class="s3"
                                style="padding-left: 5pt;padding-right: 117pt;text-indent: 0pt;line-height: 14pt;text-align: left;">
                                Bunyi Jantung : {{ $mcutransaksi->thorax_jantung_bunyi }}</p>
                            <p class="s3"
                                style="padding-left: 5pt;padding-right: 117pt;text-indent: 0pt;line-height: 14pt;text-align: left;">
                                Bising Jantung : {{ $mcutransaksi->thorax_jantung_bising }}</p>
                        </td>
                    </tr>
                    <tr style="height:42pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Paru</p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 14pt;text-align: left;">Palpasi
                                :
                                {{ $mcutransaksi->kelainan_thorax_paru_palpasi ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_thorax_paru_palpasi ? ' , Ket: ' . $mcutransaksi->thorax_paru_palpasi : '' }}
                            </p>
                            <p class="s3"
                                style="padding-left: 5pt;padding-right: 117pt;text-indent: 0pt;line-height: 14pt;text-align: left;">
                                Perkusi :
                                {{ $mcutransaksi->kelainan_thorax_paru_perkusi ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_thorax_paru_perkusi ? ' , Ket: ' . $mcutransaksi->thorax_paru_perkusi : '' }}
                            </p>
                            <p class="s3"
                                style="padding-left: 5pt;padding-right: 117pt;text-indent: 0pt;line-height: 14pt;text-align: left;">
                                Auskultasi :
                                {{ $mcutransaksi->kelainan_thorax_paru_auskultasi ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_thorax_paru_auskultasi ? ' , Ket: ' . $mcutransaksi->thorax_paru_auskultasi : '' }}
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td style="width:482pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                            colspan="3">
                            <p class="s4"
                                style="padding-left: 23pt;text-indent: 0pt;line-height: 13pt;text-align: left;">D.
                                Abdomen
                            </p>
                        </td>
                    </tr>
                    <tr style="height:111pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Perut</p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;padding-right: 5pt;text-indent: 0pt;text-align: left;">
                                Soefl (
                                @if ($mcutransaksi->perut_soefl)
                                    <img src="{{ asset('images/centang.png') }}" alt="centang" width="15"
                                        height="15">
                                @else
                                    <img src="{{ asset('images/silang.png') }}" alt="silang" width="15"
                                        height="15">
                                @endif )
                            </p>
                            <p class="s3"
                                style="padding-left: 5pt;padding-right: 5pt;text-indent: 0pt;text-align: left;">
                                Meteorismus
                                (
                                @if ($mcutransaksi->perut_meteorismus)
                                    <img src="{{ asset('images/centang.png') }}" alt="centang" width="15"
                                        height="15">
                                @else
                                    <img src="{{ asset('images/silang.png') }}" alt="silang" width="15"
                                        height="15">
                                @endif )
                            </p>
                            <p class="s3"
                                style="padding-left: 5pt;padding-right: 5pt;text-indent: 0pt;text-align: left;">
                                Massa
                                (
                                @if ($mcutransaksi->perut_massa)
                                    <img src="{{ asset('images/centang.png') }}" alt="centang" width="15"
                                        height="15">
                                @else
                                    <img src="{{ asset('images/silang.png') }}" alt="silang" width="15"
                                        height="15">
                                @endif )
                            </p>
                            <p class="s3"
                                style="padding-left: 5pt;padding-right: 5pt;text-indent: 0pt;text-align: left;">
                                Bising usus
                                (
                                @if ($mcutransaksi->perut_bising_usus)
                                    <img src="{{ asset('images/centang.png') }}" alt="centang" width="15"
                                        height="15">
                                @else
                                    <img src="{{ asset('images/silang.png') }}" alt="silang" width="15"
                                        height="15">
                                @endif )
                            </p>

                            <p class="s3" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">Hepar :
                                {{ $mcutransaksi->perut_hepar ? 'Teraba' : 'Tidak' }}</p>
                            <p class="s3"
                                style="padding-left: 5pt;padding-right: 168pt;text-indent: 0pt;text-align: justify;">
                                Lien :
                                {{ $mcutransaksi->perut_hepar ? 'Teraba' : 'Tidak' }}</p>
                            <p class="s3"
                                style="padding-left: 5pt;padding-right: 5pt;text-indent: 0pt;text-align: left;">
                                Appendiks : Mc. Burney sign
                                (
                                @if ($mcutransaksi->perut_appendiks_mcburney)
                                    <img src="{{ asset('images/centang.png') }}" alt="centang" width="15"
                                        height="15">
                                @else
                                    <img src="{{ asset('images/silang.png') }}" alt="silang" width="15"
                                        height="15">
                                @endif )
                            </p>
                            <p class="s3"
                                style="padding-left: 5pt;padding-right: 5pt;text-indent: 0pt;text-align: left;">
                                Appendiks : Rovsing SIgn
                                (
                                @if ($mcutransaksi->perut_appendiks_rovsing)
                                    <img src="{{ asset('images/centang.png') }}" alt="centang" width="15"
                                        height="15">
                                @else
                                    <img src="{{ asset('images/silang.png') }}" alt="silang" width="15"
                                        height="15">
                                @endif )
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td style="width:482pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                            colspan="3">
                            <p class="s4"
                                style="padding-left: 23pt;text-indent: 0pt;line-height: 13pt;text-align: left;">E.
                                Extremitas</p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                Deformitas
                            </p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->kelainan_ext_deformitas ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_ext_deformitas ? ' , Ket: ' . $mcutransaksi->ext_deformitas : '' }}
                            </p>
                        </td>
                    </tr>
                    <tr style="height:28pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;padding-right: 18pt;text-indent: 0pt;line-height: 14pt;text-align: left;">
                                Kelemahan anggota gerak</p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 14pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->kelainan_ext_kelemahan_anggota ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_ext_kelemahan_anggota ? ' , Ket: ' . $mcutransaksi->ext_kelemahan_anggota : '' }}
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Pitting
                                Oedem</p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->kelainan_ext_pitting_oedem ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_ext_pitting_oedem ? ' , Ket: ' . $mcutransaksi->ext_pitting_oedem : '' }}
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:121pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Varises
                            </p>
                        </td>
                        <td
                            style="width:22pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:339pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->kelainan_ext_varises ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_ext_varises ? ' , Ket: ' . $mcutransaksi->ext_varises : '' }}
                            </p>
                        </td>
                    </tr>
                    <tr style="height:14pt">
                        <td
                            style="width:132pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Tremor
                            </p>
                        </td>
                        <td
                            style="width:24pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s3"
                                style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:</p>
                        </td>
                        <td
                            style="width:365pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                {{ $mcutransaksi->kelainan_ext_tremor ? 'Ada Kelainan' : 'Tidak Ada Kelainan' }}
                                {{ $mcutransaksi->kelainan_ext_tremor ? ' , Ket: ' . $mcutransaksi->ext_tremor : '' }}
                            </p>
                        </td>
                    </tr>
                </table>
                <p style="padding-top: 1pt;text-indent: 0pt;text-align: left;"><br /></p>
            </li>
            <li data-list-text="G.">
                <p class="s4" style="text-align: left;">REKOMENDASI</p>
            </li>
            <table style="border-collapse:collapse;" cellspacing="0">
                <tr style="height:14pt">
                    <td
                        style="width:132pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3"
                            style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Status Kesehatan</p>
                    </td>
                    <td
                        style="width:24pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3"
                            style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">:
                        </p>
                    </td>
                    <td
                        style="width:365pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                            {{ $mcutransaksi->status_kesehatan }}</p>
                    </td>
                </tr>
                <tr style="height:29pt">
                    <td
                        style="width:132pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Rekomendasi</p>
                    </td>
                    <td
                        style="width:24pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">:</p>
                    </td>
                    <td
                        style="width:365pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                            {{ $mcutransaksi->rekomendasi }}</p>
                    </td>
                </tr>
            </table>
        </ol>
        <p style="text-indent: 0pt;text-align: left;">Pemeriksa</p>
        <div class="ttd" style="display: flex; justify-content: center; align-items: center;">
            <img src="{{ asset('storage/' . $mcutransaksi->dokter->ttd) }}" alt="ttd"
                style=" height: auto; display: block;">
        </div>
        <p class="s6" style=";text-indent: 0pt;text-align: left;">
            {{ $mcutransaksi->nama_dokter }}</p>
    </div>

    <!-- Footer with Image -->
    <div class="footer">
        <img src="{{ asset('images/FOOTER.jpg') }}" alt="Footer Logo">
    </div>


</body>

</html>
