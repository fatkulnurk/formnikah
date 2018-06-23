<html>
<head>
    <title>Loading ...</title>
    <meta http-equiv="refresh" content="1; url=http://localhost/imknikah/view/" />
</head>
</html>
<?php
session_start();
if(isset($_GET['form'])){
    if($_GET['form'] == "n1"){

        $_SESSION["n1_status"] = "sudah";

        $_SESSION["n1_namalengkap"] = $_GET["namalengkap"];
        $_SESSION["n1_jeniskelamin"] = $_GET["jeniskelamin"];
        $_SESSION["n1_tempattanggallahir"] = $_GET["tempattanggallahir"];
        $_SESSION["n1_warganegara"] = $_GET["warganegara"];
        $_SESSION["n1_agama"] = $_GET["agama"];
        $_SESSION["n1_pekerjaan"] = $_GET["pekerjaan"];
        $_SESSION["n1_tempattinggal"] = $_GET["tempattinggal"];
        $_SESSION["n1_binti"] = $_GET["binti"];
        $_SESSION["n1_keteranganpria"] = $_GET["keteranganpria"];
        $_SESSION["n1_keteranganwanita"] = $_GET["keteranganwanita"];
        $_SESSION["n1_namapasangandulu"] = $_GET["namapasangandulu"];

    }elseif ($_GET['form'] == "n2"){

        $_SESSION["n2_status"] = "sudah";

        $_SESSION["n2_namalengkap"] = $_GET["namalengkap"];
        $_SESSION["n2_tempattinggal"] = $_GET["tempattinggal"];
        $_SESSION["n2_tempattanggallahir"] = $_GET["tempattanggallahir"];
        $_SESSION["n2_warganegara"] = $_GET["warganegara"];
        $_SESSION["n2_agama"] = $_GET["agama"];
        $_SESSION["n2_pekerjaan"] = $_GET["pekerjaan"];

        $_SESSION["n2_seorangnamalengkap"] = $_GET["seorangnamalengkap"];
        $_SESSION["n2_seorangtempattinggal"] = $_GET["seorangtempattinggal"];
        $_SESSION["n2_seorangtempattanggallahir"] = $_GET["seorangtempattanggallahir"];
        $_SESSION["n2_seorangwarganegara"] = $_GET["seorangwarganegara"];
        $_SESSION["n2_seorangagama"] = $_GET["seorangagama"];
        $_SESSION["n2_seorangpekerjaan"] = $_GET["seorangpekerjaan"];

        $_SESSION["n2_wanitanamalengkap"] = $_GET["wanitanamalengkap"];
        $_SESSION["n2_wanitatempattinggal"] = $_GET["wanitatempattinggal"];
        $_SESSION["n2_wanitatempattanggallahir"] = $_GET["wanitatempattanggallahir"];
        $_SESSION["n2_wanitawarganegara"] = $_GET["wanitawarganegara"];
        $_SESSION["n2_wanitagama"] = $_GET["wanitagama"];
        $_SESSION["n2_wanitapekerjaan"] = $_GET["wanitapekerjaan"];


    }elseif ($_GET['form'] == "n3"){

        $_SESSION["n3_status"] = "sudah";

        $_SESSION["n3_csnamalengkap"] = $_GET["csnamalengkap"];
        $_SESSION["n3_csbin"] = $_GET["csbin"];
        $_SESSION["n3_csttl"] = $_GET["csttl"];
        $_SESSION["n3_cswarganegara"] = $_GET["cswarganegara"];
        $_SESSION["n3_csagama"] = $_GET["csagama"];
        $_SESSION["n3_cspekerjaan"] = $_GET["cspekerjaan"];
        $_SESSION["n3_cstempattinggal"] = $_GET["cstempattinggal"];

        $_SESSION["n3_cinamalengkap"] = $_GET["cinamalengkap"];
        $_SESSION["n3_cibinti"] = $_GET["cibinti"];
        $_SESSION["n3_cittl"] = $_GET["cittl"];
        $_SESSION["n3_ciwarganegara"] = $_GET["ciwarganegara"];
        $_SESSION["n3_ciagama"] = $_GET["ciagama"];
        $_SESSION["n3_cipekerjaan"] = $_GET["cipekerjaan"];
        $_SESSION["n3_citempattinggal"] = $_GET["citempattinggal"];

    }elseif ($_GET['form'] == "n4"){

        $_SESSION["n4_status"] = "sudah";

        $_SESSION["n4_ayahnamalengkap"] = $_GET["ayahnamalengkap"];
        $_SESSION["n4_ayahtempattinggal"] = $_GET["ayahtempattinggal"];
        $_SESSION["n4_ayahttl"] = $_GET["ayahttl"];
        $_SESSION["n4_ayahwarganegara"] = $_GET["ayahwarganegara"];
        $_SESSION["n4_ayahagama"] = $_GET["ayahagama"];
        $_SESSION["n4_ayahpekerjaan"] = $_GET["ayahpekerjaan"];

        $_SESSION["n4_ibunamalengkap"] = $_GET["ibunamalengkap"];
        $_SESSION["n4_ibutempattinggal"] = $_GET["ibutempattinggal"];
        $_SESSION["n4_ibuttl"] = $_GET["ibuttl"];
        $_SESSION["n4_ibuwarganegara"] = $_GET["ibuwarganegara"];
        $_SESSION["n4_ibuagama"] = $_GET["ibuagama"];
        $_SESSION["n4_ibupekerjaan"] = $_GET["ibupekerjaan"];

        $_SESSION["n4_senamalengkap"] = $_GET["senamalengkap"];
        $_SESSION["n4_setempattinggal"] = $_GET["setempattinggal"];
        $_SESSION["n4_settl"] = $_GET["settl"];
        $_SESSION["n4_sewarganegara"] = $_GET["sewarganegara"];
        $_SESSION["n4_seagama"] = $_GET["seagama"];
        $_SESSION["n4_sepekerjaan"] = $_GET["sepekerjaan"];
        $_SESSION["n4_sejeniskelamin"] = $_GET["sejeniskelamin"];

    }elseif ($_GET['form'] == "n5"){

        $_SESSION["n5_status"] = "sudah";

        $_SESSION["n5_ayahnamalengkap"] = $_GET["ayahnamalengkap"];
        $_SESSION["n5_ayahtl"] = $_GET["ayahtl"];
        $_SESSION["n5_ayahttl"] = $_GET["ayahttl"];
        $_SESSION["n5_ayahwarganegara"] = $_GET["ayahwarganegara"];
        $_SESSION["n5_ayahagama"] = $_GET["ayahagama"];
        $_SESSION["n5_ayahpekerjaan"] = $_GET["ayahpekerjaan"];

        $_SESSION["n5_ibunamalengkap"] = $_GET["ibunamalengkap"];
        $_SESSION["n5_ibutl"] = $_GET["ibutl"];
        $_SESSION["n5_ibuttl"] = $_GET["ibuttl"];
        $_SESSION["n5_ibuwarganegara"] = $_GET["ibuwarganegara"];
        $_SESSION["n5_ibuagama"] = $_GET["ibuagama"];
        $_SESSION["n5_ibupekerjaan"] = $_GET["ibupekerjaan"];

        $_SESSION["n5_darinamalengkap"] = $_GET["darinamalengkap"];
        $_SESSION["n5_daritl"] = $_GET["daritl"];
        $_SESSION["n5_darittl"] = $_GET["darittl"];
        $_SESSION["n5_dariwarganegara"] = $_GET["dariwarganegara"];
        $_SESSION["n5_dariagama"] = $_GET["dariagama"];
        $_SESSION["n5_daripekerjaan"] = $_GET["daripekerjaan"];

        $_SESSION["n5_dengannamalengkap"] = $_GET["dengannamalengkap"];
        $_SESSION["n5_dengantl"] = $_GET["dengantl"];
        $_SESSION["n5_denganttl"] = $_GET["denganttl"];
        $_SESSION["n5_denganwarganegara"] = $_GET["denganwarganegara"];
        $_SESSION["n5_denganagama"] = $_GET["denganagama"];
        $_SESSION["n5_denganpekerjaan"] = $_GET["denganpekerjaan"];

    }elseif ($_GET['form'] == "n6"){

        $_SESSION["n6_status"] = "sudah";
        $_SESSION["n6_meninggal_namalengkap"] = $_GET["meninggal_namalengkap"];
        $_SESSION["n6_meninggal_bin"] = $_GET["meninggal_bin"];
        $_SESSION["n6_meninggal_ttl"] = $_GET["meninggal_ttl"];
        $_SESSION["n6_meninggal_warganegara"] = $_GET["meninggal_warganegara"];
        $_SESSION["n6_meninggal_agama"] = $_GET["meninggal_agama"];
        $_SESSION["n6_meninggal_pekerjaan"] = $_GET["meninggal_pekerjaan"];
        $_SESSION["n6_meninggal_ttt"] = $_GET["meninggal_ttt"];
        $_SESSION["n6_meninggal_date"] = $_GET["meninggal_date"];
        $_SESSION["n6_meninggal_tempat"] = $_GET["meninggal_tempat"];
        $_SESSION["n6_psg_namalengkap"] = $_GET["psg_namalengkap"];
        $_SESSION["n6_psg_binti"] = $_GET["psg_binti"];
        $_SESSION["n6_psg_ttl"] = $_GET["psg_ttl"];
        $_SESSION["n6_psg_warganegara"] = $_GET["psg_warganegara"];
        $_SESSION["n6_psg_agama"] = $_GET["psg_agama"];
        $_SESSION["n6_psg_pekerjaan"] = $_GET["psg_pekerjaan"];
        $_SESSION["n6_psg_tempattinggal"] = $_GET["psg_tempattinggal"];

    }elseif ($_GET['form'] == "n7"){

        $_SESSION["n7_status"] = "sudah";

        $_SESSION["n7_caloncowok"] = $_GET["caloncowok"];
        $_SESSION["n7_caloncewek"] = $_GET["caloncewek"];
        $_SESSION["n7_tgl"] = $_GET["tgl"];
        $_SESSION["n7_hari"] = $_GET["hari"];
        $_SESSION["n7_jam"] = $_GET["jam"];
        $_SESSION["n7_maskawin"] = $_GET["maskawin"];
        $_SESSION["n7_dibayar"] = $_GET["dibayar"];
        $_SESSION["n7_bertempat"] = $_GET["bertempat"];
        $_SESSION["n7_no5"] = "*) Surat Izin Orang tua";
        $_SESSION["n7_no6"] = "Surat Keterangan Kematian suami/istri";
        $_SESSION["n7_no7"] = $_GET["no7"];

    }
}else{
    echo "<h1>PARAMETER SALAH</h1>";
}
