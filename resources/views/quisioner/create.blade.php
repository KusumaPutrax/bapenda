<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>

<body>
    <div class="nav">
        <img src="{{ asset('img/logo.png')}}" alt="logo" class="logo">
        <h1>
            Badan Pendapatan Daerah
            <br /> Kabupaten Badung
        </h1>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <form method="POST" action="{{route('quisioner.store')}}" enctype="multipart/form-data">
        @csrf

        <div class="container">
            <fieldset>
                <div class="data-responden">
                    <h3>Data Responden</h3>
                    <hr>
                    <div class="form-group">
                        <label>
                            <h4>Jenis Kelamin / Gender: </h4>
                        </label>

                        <div class="radio">
                            <input type="radio" name="gender" value="pria" id="gender_pria">
                            <label for="gender_pria">Pria / Male</label>

                            <input type="radio" name="gender" value="wanita" id="gender_wanita">
                            <label for="gender_wanita">Wanita / Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>
                            <h4>Umur / Age</h4>
                        </label>
                        <div class="number">
                            <input type="number" name="age" id="age" required>
                            <label for="age">Tahun</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="eduucation">
                            <h4>Pendidikan / Last Education</h4>
                        </label>
                        <select name="education" required>
                            <option value="" disabled selected>Pilih</option>
                            <option value="SD / SMP">SD / SMP</option>
                            <option value="SMA / SMK / DIPLOMA">SMA / SMK / DIPLOMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="employment">
                            <h4>Pekerjaan / Employment</h4>
                        </label>
                        <select name="employment" required>
                            <option value="" disabled selected>Pilih</option>
                            <option value="PNS / TNI / Polri">PNS / TNI / Polri</option>
                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                            <option value="Wiraswasta / Usahawan">Wiraswasta / Usahawan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="data-unit-pelayanan">
                    <h3>Data Unit Pelayanan</h3>
                    <hr>
                </div>
                <div class="form-group">
                    <label>
                        <h4>Unit Tempat Kerja Mengurus Layanan Public</h4>
                    </label>

                    <select name="tempat_kerja" required>
                        <option value="" disabled selected>Pilih</option>
                        <option value="Bidang Data dan IT">Bidang Data dan IT</option>
                        <option value="Bidang Penetapan">Bidang Penetapan</option>
                        <option value="Bidang Penagihan">Bidang Penagihan</option>
                        <option value="UPTD Menggwi">UPTD Menggwi</option>
                        <option value="UPTD Kuta">UPTD Kuta</option>
                        <option value=" UPTD Kuta Utara"> UPTD Kuta Utara</option>
                        <option value="UPTD Kuta Selatan">UPTD Kuta Selatan</option>
                        <option value="UPTD Abiansemal & Petang">UPTD Abiansemal & Petang</option>
                    </select>

                </div>
                <div class="form-group">
                    <label>
                        <h4>Jenis Layanan / Type of Service</h4>
                    </label>
                    <select name="jenis_layanan" required>
                        <option value="" disabled selected>Pilih</option>
                        <option value="Permohonan Nomor Pokok wajib Pajak daerah (NPWPD)">Permohonan Nomor Pokok wajib Pajak daerah (NPWPD)</option>
                        <option value="Permohonan User Id Dan Password Sistem Online Pajak Daerah">Permohonan User Id Dan Password Sistem Online Pajak Daerah</option>
                        <option value="Pelaporan Surat Pemberitahuan Pajak Daerah (SPTPD)">Pelaporan Surat Pemberitahuan Pajak Daerah (SPTPD)</option>
                        <option value="Pelaporan Surat Pemberitahuan Pajak Daerah (SPTPD)">Pelaporan Surat Pemberitahuan Pajak Daerah (SPTPD)</option>
                        <option value="Permohonan Pengembalian Kelebihan Pembayaran Pajak (Kompensasi)">Permohonan Pengembalian Kelebihan Pembayaran Pajak (Kompensasi)</option>
                        <option value=" Permohonan Pengurangan/Penghapusan Sanksi Administratif Dan Pengurangan Atau Pembatalan Ketetapan Pajak Deerah"> Permohonan Pengurangan/Penghapusan Sanksi Administratif Dan Pengurangan Atau Pembatalan Ketetapan Pajak Deerah</option>
                        <option value="Permohonan Keberatan Pembayaran Pajak Daerah">Permohonan Keberatan Pembayaran Pajak Daerah</option>
                        <option value="Permohonan Porporasi Karcis/Permintaan Benda Berharga">Permohonan Porporasi Karcis/Permintaan Benda Berharga</option>
                        <option value="Permohonan Surat Perjanjian Angsuran/Penundaan Pembayanan Pajak Daerah">Permohonan Surat Perjanjian Angsuran/Penundaan Pembayanan Pajak Daerah</option>
                        <option value="Permohonan Pengesahan Subak">Permohonan Pengesahan Subak</option>
                        <option value="Permohonan Surat Pemberitahuan Pajak Terhutang (SPPT) PBB-P2">Permohonan Surat Pemberitahuan Pajak Terhutang (SPPT) PBB-P2</option>
                        <option value="Permohonan Pembetulan Surat Pemberitahuan Pajak Terhutang (PPT) PBB-P2">Permohonan Pembetulan Surat Pemberitahuan Pajak Terhutang (PPT) PBB-P2</option>
                        <option value="Permohonan Pembatalan/Penghapusan PBB P2">Permohonan Pembatalan/Penghapusan PBB P2</option>
                        <option value="Permohonan Pengurangan PBB-P2">Permohonan Pengurangan PBB-P2</option>
                        <option value="Permohonan Pembatalan Transaksi BPHTB">Permohonan Pembatalan Transaksi BPHTB</option>
                        <option value="Permohonan Pangembalian Kelebihan Pembayaran PBB-P2">Permohonan Pangembalian Kelebihan Pembayaran PBB-P2</option>
                    </select>
                </div>
            </fieldset>


            <fieldset>

                <div class="pendapatan-responden-tentang-pelayanan">
                    <h3>Pendapatan Responden Tentang Pelayanan</h3>
                    <hr>
                </div>
                <div class="form-group1">
                    <h4>A. Penilaian Terhadap Kualitas Pelayanan/Survei Persepsi Kualitas Pelayanan (SPKP)</h4>
                </div>
                <div class="form-group1">
                    <h4>1. Bagaimana pendapat saudara tentang informasi pelayanan yang tersedia melalui media elektronik maupun non elektronik?</h4>
                </div>

                <div class="form-group1">
                    <input type="radio" name="soal1_A" value="4">
                    <label for="">Sangat Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal1_A" value="3">
                    <label> Setuju </label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal1_A" value="2">
                    <label>Tidak Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal1_A" value="1">
                    <label>Sangat Tidak Setuju</label>
                </div>


                <div class="form-group">
                    <h4>2. Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan yang diinformasikan dengan persyaratan yang ditetapkan?</h4>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal2_A" value="4">
                    <label for="">Sangat Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal2_A" value="3">
                    <label> Setuju </label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal2_A" value="2">
                    <label>Tidak Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal2_A" value="1">
                    <label>Sangat Tidak Setuju</label>
                </div>


                <div class="form-group">
                    <h4>3. Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan yang diinformasikan dengan persyaratan yang ditetapkan?</h4>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal3_A" value="4">
                    <label for="">Sangat Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal3_A" value="3">
                    <label> Setuju </label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal3_A" value="2">
                    <label>Tidak Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal3_A" value="1">
                    <label>Sangat Tidak Setuju</label>
                </div>


                <div class="form-group">
                    <h4>4. Bagaimana pendapat saudara tentang kemudahan prosedur pelayanan di instansi ini?</h4>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal4_A" value="4">
                    <label for="">Sangat Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal4_A" value="3">
                    <label> Setuju </label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal4_A" value="2">
                    <label>Tidak Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal4_A" value="1">
                    <label>Sangat Tidak Setuju</label>
                </div>


                <div class="form-group">
                    <h4>5. Bagaimana pendapat saudara tentang tidak adanya tarif/biaya pelayanan yang dbayarkan (gratis) pada unit pelayanan yang ditetapkan? </h4>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal5_A" value="4">
                    <label for="">Sangat Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal5_A" value="3">
                    <label> Setuju </label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal5_A" value="2">
                    <label>Tidak Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal5_A" value="1">
                    <label>Sangat Tidak Setuju</label>
                </div>


                <div class="form-group">
                    <h4>6. Bagaimana pendapat saudara tentang sarana prasarana pendukung pelayanan/sistem pelayanan online yang disediakan unit layanan ini memberikan kenyamanan/mudah digunakan?</h4>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal6_A" value="4">
                    <label for="">Sangat Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal6_A" value="3">
                    <label> Setuju </label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal6_A" value="2">
                    <label>Tidak Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal6_A" value="1">
                    <label>Sangat Tidak Setuju</label>
                </div>

                <div class="form-group">
                    <h4>7. Bagaimana pendapat saudara tentang petugas pelayanan/sistem pelayanan online pada unit layanan ini merespon keperluan bapak/ibu dengan cepat?</h4>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal7_A" value="4">
                    <label for="">Sangat Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal7_A" value="3">
                    <label> Setuju </label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal7_A" value="2">
                    <label>Tidak Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal7_A" value="1">
                    <label>Sangat Tidak Setuju</label>
                </div>


                <div class="form-group">
                    <h4>8. Bagaimana pendapat saudara tentang petugas pelayanan/sistem pelayanan online pada unit layanan ini merespon keperluan bapak/ibu dengan cepat?</h4>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal8_A" value="4">
                    <label for="">Sangat Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal8_A" value="3">
                    <label> Setuju </label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal8_A" value="2">
                    <label>Tidak Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal8_A" value="1">
                    <label>Sangat Tidak Setuju</label>
                </div>

                <div class="form-group">
                    <h4>B. Penilaian Terhadap Persepsi Korupsi / Survei Persepsi Anti Korupsi (SPAK)</h4>
                </div>
                <div class="form-group1">
                    <h4>1. Tidak ada diskriminasi pelayanan pada unit layanan</h4>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal1_B" value="4">
                    <label for="">Sangat Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal1_B" value="3">
                    <label> Setuju </label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal1_B" value="2">
                    <label>Tidak Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal1_B" value="1">
                    <label>Sangat Tidak Setuju</label>
                </div>

                <div class="form-group1">
                    <h4>2. Tidak ada pelayanan di luar prosedur/kecurangan pelayanan pada unit layanan ini.</h4>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal2_B" value="4">
                    <label for="">Sangat Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal2_B" value="3">
                    <label> Setuju </label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal2_B" value="2">
                    <label>Tidak Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal2_B" value="1">
                    <label>Sangat Tidak Setuju</label>
                </div>

                <div class="form-group1">
                    <h4>3. Tidak ada penerimaan imbalan uang/barang/fasilitas diluar ketentuan yang berlaku pada unit layanan ini.</h4>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal3_B" value="4">
                    <label for="">Sangat Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal3_B" value="3">
                    <label> Setuju </label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal3_B" value="2">
                    <label>Tidak Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal3_B" value="1">
                    <label>Sangat Tidak Setuju</label>
                </div>

                <div class="form-group1">
                    <h4>4. Tidak ada pungutan liar (pungli) pada unit layanan ini.</h4>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal4_B" value="4">
                    <label for="">Sangat Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal4_B" value="3">
                    <label> Setuju </label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal4_B" value="2">
                    <label>Tidak Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal4_B" value="1">
                    <label>Sangat Tidak Setuju</label>
                </div>


                <div class="form-group1">
                    <h4>5. Tidak ada percalonan/perantara tidak resmi pada unit layanan ini.</h4>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal5_B" value="4">
                    <label for="">Sangat Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal5_B" value="3">
                    <label> Setuju </label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal5_B" value="2">
                    <label>Tidak Setuju</label>
                </div>
                <div class="form-group1">
                    <input type="radio" name="soal5_B" value="1">
                    <label>Sangat Tidak Setuju</label>
                </div>
                <div class="form-group1">
                    <label for="komentar">Komentar dan Saran</label><br>
                    <textarea id="komentar" name="komentar" placeholder="Tulis komentar di sini..."></textarea>
                </div>
            </fieldset>



            <button type="submit">Submit</button>
        </div>

    </form>
    <div class="content">
        <footer>
            <p>Copyright &copy; 2024 Pemerintah Kabupaten Badung All rights reserved.</p>
        </footer>
    </div>
</body>

</html>