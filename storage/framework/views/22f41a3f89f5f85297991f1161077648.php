<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
    <meta name="author" content="PERSONAL" />
    <style type="text/css">
        html {
            font-family: Calibri, Arial, Helvetica, sans-serif;
            font-size: 11pt;
            background-color: white
        }

        a.comment-indicator:hover+div.comment {
            background: #ffd;
            position: absolute;
            display: block;
            border: 1px solid black;
            padding: 0.5em
        }

        a.comment-indicator {
            background: red;
            display: inline-block;
            border: 1px solid black;
            width: 0.5em;
            height: 0.5em
        }

        div.comment {
            display: none
        }

        table {
            border-collapse: collapse;
            page-break-after: always
        }

        .gridlines td {
            border: 1px dotted black
        }

        .gridlines th {
            border: 1px dotted black
        }

        .b {
            text-align: center
        }

        .e {
            text-align: center
        }

        .f {
            text-align: right
        }

        .inlineStr {
            text-align: left
        }

        .n {
            text-align: right
        }

        .s {
            text-align: left
        }

        td.style0 {
            vertical-align: bottom;
            border-bottom: none #000000;
            border-top: none #000000;
            border-left: none #000000;
            border-right: none #000000;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        th.style0 {
            vertical-align: bottom;
            border-bottom: none #000000;
            border-top: none #000000;
            border-left: none #000000;
            border-right: none #000000;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        td.style1 {
            vertical-align: bottom;
            text-align: center;
            border-bottom: none #000000;
            border-top: none #000000;
            border-left: none #000000;
            border-right: none #000000;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        th.style1 {
            vertical-align: bottom;
            text-align: center;
            border-bottom: none #000000;
            border-top: none #000000;
            border-left: none #000000;
            border-right: none #000000;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        td.style2 {
            vertical-align: bottom;
            text-align: center;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: 1px solid #000000 !important;
            border-right: 1px solid #000000 !important;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        th.style2 {
            vertical-align: bottom;
            text-align: center;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: 1px solid #000000 !important;
            border-right: 1px solid #000000 !important;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        td.style3 {
            vertical-align: bottom;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: 1px solid #000000 !important;
            border-right: 1px solid #000000 !important;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        th.style3 {
            vertical-align: bottom;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: 1px solid #000000 !important;
            border-right: 1px solid #000000 !important;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        td.style4 {
            vertical-align: bottom;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: 1px solid #000000 !important;
            border-right: 1px solid #000000 !important;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        th.style4 {
            vertical-align: bottom;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: 1px solid #000000 !important;
            border-right: 1px solid #000000 !important;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        td.style5 {
            vertical-align: bottom;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: 1px solid #000000 !important;
            border-right: 1px solid #000000 !important;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        th.style5 {
            vertical-align: bottom;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: 1px solid #000000 !important;
            border-right: 1px solid #000000 !important;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        td.style6 {
            vertical-align: bottom;
            text-align: left;
            padding-left: 0px;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: 1px solid #000000 !important;
            border-right: 1px solid #000000 !important;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        th.style6 {
            vertical-align: bottom;
            text-align: left;
            padding-left: 0px;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: 1px solid #000000 !important;
            border-right: 1px solid #000000 !important;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        td.style7 {
            vertical-align: bottom;
            text-align: center;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: 1px solid #000000 !important;
            border-right: none #000000;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        th.style7 {
            vertical-align: bottom;
            text-align: center;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: 1px solid #000000 !important;
            border-right: none #000000;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        td.style8 {
            vertical-align: bottom;
            text-align: center;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: none #000000;
            border-right: none #000000;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        th.style8 {
            vertical-align: bottom;
            text-align: center;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: none #000000;
            border-right: none #000000;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        td.style9 {
            vertical-align: bottom;
            text-align: center;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: none #000000;
            border-right: 1px solid #000000 !important;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        th.style9 {
            vertical-align: bottom;
            text-align: center;
            border-bottom: 1px solid #000000 !important;
            border-top: 1px solid #000000 !important;
            border-left: none #000000;
            border-right: 1px solid #000000 !important;
            color: #000000;
            font-family: 'Calibri';
            font-size: 11pt;
            background-color: white
        }

        table.sheet0 col.col0 {
            width: 84.72222125pt
        }

        table.sheet0 col.col1 {
            width: 98.27777665pt
        }

        table.sheet0 col.col2 {
            width: 42pt
        }

        table.sheet0 col.col3 {
            width: 42pt
        }

        table.sheet0 col.col4 {
            width: 33.21111073pt
        }

        table.sheet0 col.col5 {
            width: 31.17777742pt
        }

        table.sheet0 col.col6 {
            width: 52.18888829pt
        }

        table.sheet0 col.col7 {
            width: 31.17777742pt
        }

        table.sheet0 col.col8 {
            width: 92.17777672pt
        }

        table.sheet0 col.col9 {
            width: 88.78888787pt
        }

        table.sheet0 col.col10 {
            width: 58.28888822pt
        }

        table.sheet0 col.col11 {
            width: 42pt
        }

        table.sheet0 col.col12 {
            width: 42pt
        }

        table.sheet0 tr {
            height: 15pt
        }
    </style>
</head>

<body>
    <style>
        @page {
            margin-left: 0.7in;
            margin-right: 0.7in;
            margin-top: 0.75in;
            margin-bottom: 0.75in;
        }

        body {
            margin-left: 0.7in;
            margin-right: 0.7in;
            margin-top: 0.75in;
            margin-bottom: 0.75in;
        }
    </style>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <col class="col9">
        <col class="col10">
        <col class="col11">
        <col class="col12">
        <tbody>
            <tr class="row0">
                <td class="column0">&nbsp;</td>
                <td class="column1">&nbsp;</td>
                <td class="column2">&nbsp;</td>
                <td class="column3 style1 s style1" colspan="6">CAPAIAN KINERJA PEGAWAI TAHUN 2023</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row1">
                <td class="column0">&nbsp;</td>
                <td class="column1">&nbsp;</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row2">
                <td class="column0">&nbsp;</td>
                <td class="column1">&nbsp;</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row3">
                <td class="column0 style0 s">Satuan Organisasi :</td>
                <td class="column1 style0 s">BPS Kabupaten Klaten</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row4">
                <td class="column0 style0 s">Nama</td>
                <td class="column1 style0 s">Alfiah Yuni</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row5">
                <td class="column0 style0 s">Jabatan</td>
                <td class="column1 style0 s">STAF IPDS</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row6">
                <td class="column0 style0 s">Periode</td>
                <td class="column1 style0 s">Juli 2023</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row7">
                <td class="column0">&nbsp;</td>
                <td class="column1">&nbsp;</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row8">
                <td class="column0 style2 s style2" rowspan="2">No</td>
                <td class="column1 style2 s style2" colspan="3" rowspan="2">Uraian Kegiatan</td>
                <td class="column4 style2 s style2" rowspan="2">Satuan</td>
                <td class="column5 style2 s style2" colspan="3">Kuantitas</td>
                <td class="column8 style2 s style2" rowspan="2">Tingkat Kualitas ( % )</td>
                <td class="column9 style2 s style2" rowspan="2">Kode Butir Kegiatan</td>
                <td class="column10 style2 s style2" rowspan="2">Angka Kredit</td>
                <td class="column11 style2 s style2" colspan="2" rowspan="2">Keterangan</td>
            </tr>
            <tr class="row9">
                <td class="column5 style3 s">Target</td>
                <td class="column6 style3 s">Realisasi</td>
                <td class="column7 style3 s">%</td>
            </tr>
            <tr class="row10">
                <td class="column0 style4 f">1</td>
                <td class="column1 style2 s style2" colspan="3">Membagi dan Menilai CKP T</td>
                <td class="column4 style3 s">Paket</td>
                <td class="column5 style3 n">1</td>
                <td class="column6 style3 n">1</td>
                <td class="column7 style3 s">100.0</td>
                <td class="column8 style3 s">100.00</td>
                <td class="column9 style3 null"></td>
                <td class="column10 style3 null"></td>
                <td class="column11 style2 null style2" colspan="2"></td>
            </tr>
            <tr class="row11">
                <td class="column0 style3 null"></td>
                <td class="column1 style7 null style9" colspan="3"></td>
                <td class="column4 style3 null"></td>
                <td class="column5 style3 null"></td>
                <td class="column6 style3 null"></td>
                <td class="column7 style3 null"></td>
                <td class="column8 style3 null"></td>
                <td class="column9 style3 null"></td>
                <td class="column10 style3 null"></td>
                <td class="column11 style2 null style2" colspan="2"></td>
            </tr>
            <tr class="row12">
                <td class="column0 style3 null"></td>
                <td class="column1 style7 null style9" colspan="3"></td>
                <td class="column4 style3 null"></td>
                <td class="column5 style3 null"></td>
                <td class="column6 style3 null"></td>
                <td class="column7 style3 null"></td>
                <td class="column8 style3 null"></td>
                <td class="column9 style3 null"></td>
                <td class="column10 style3 null"></td>
                <td class="column11 style2 null style2" colspan="2"></td>
            </tr>
            <tr class="row13">
                <td class="column0 style3 null"></td>
                <td class="column1 style7 null style9" colspan="3"></td>
                <td class="column4 style3 null"></td>
                <td class="column5 style3 null"></td>
                <td class="column6 style3 null"></td>
                <td class="column7 style3 null"></td>
                <td class="column8 style3 null"></td>
                <td class="column9 style3 null"></td>
                <td class="column10 style3 null"></td>
                <td class="column11 style2 null style2" colspan="2"></td>
            </tr>
            <tr class="row14">
                <td class="column0 style3 null"></td>
                <td class="column1 style7 null style9" colspan="3"></td>
                <td class="column4 style3 null"></td>
                <td class="column5 style3 null"></td>
                <td class="column6 style3 null"></td>
                <td class="column7 style3 null"></td>
                <td class="column8 style3 null"></td>
                <td class="column9 style3 null"></td>
                <td class="column10 style3 null"></td>
                <td class="column11 style2 null style2" colspan="2"></td>
            </tr>
            <tr class="row15">
                <td class="column0 style6 s style6" colspan="10">Jumalh</td>
                <td class="column10 style5 null"></td>
                <td class="column11 style2 null style2" colspan="2"></td>
            </tr>
            <tr class="row16">
                <td class="column0 style6 s style6" colspan="7">Rata-rata</td>
                <td class="column7 style3 s">100.00</td>
                <td class="column8 style3 s">100.00</td>
                <td class="column9 style2 null style2" colspan="4" rowspan="2"></td>
            </tr>
            <tr class="row17">
                <td class="column0 style6 s style6" colspan="7">Capaian Kinerja Pegawai ( MAX 100% ) (Izin Keluar
                    Kantor : 0.00 )</td>
                <td class="column7 style2 s style2" colspan="2">100.00</td>
            </tr>
            <tr class="row18">
                <td class="column0">&nbsp;</td>
                <td class="column1">&nbsp;</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row19">
                <td class="column0 style0 s">Penilaian Kinerja</td>
                <td class="column1">&nbsp;</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row20">
                <td class="column0 style0 s">Tanggal:</td>
                <td class="column1">&nbsp;</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row21">
                <td class="column0">&nbsp;</td>
                <td class="column1">&nbsp;</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row22">
                <td class="column0 style1 s style1" colspan="3">Pegawai Yang Dinilai</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9 style1 s style1" colspan="3">Pejabat Penilai</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row23">
                <td class="column0">&nbsp;</td>
                <td class="column1">&nbsp;</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row24">
                <td class="column0">&nbsp;</td>
                <td class="column1">&nbsp;</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row25">
                <td class="column0">&nbsp;</td>
                <td class="column1">&nbsp;</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row26">
                <td class="column0 style1 s style1" colspan="3">Alfiah Yuni</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9 style1 s style1" colspan="3">Rudi Cahyono</td>
                <td class="column12">&nbsp;</td>
            </tr>
            <tr class="row27">
                <td class="column0 style1 n style1" colspan="3">19847481121</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9 style1 n style1" colspan="3">1291281239</td>
                <td class="column12">&nbsp;</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
<?php /**PATH F:\applicationLaravel\simanja-bpsKlaten\resources\views/layout_ckp.blade.php ENDPATH**/ ?>