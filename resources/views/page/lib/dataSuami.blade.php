<wizard-pane title="Data Suami">
    <section id="dataSuami">
        <div class="ui form">
            <div class="ui segment">
                <a class="ui ribbon label">Data Suami</a>
                <hr>
                <div class="fields">
                    <div class="field">
                        <label>NIK</label>

                        <div class="ui icon input">
                            <div class="ui corner labeled input">
                                <input type="text" name="suami[nik]" placeholder="NIK...">
                                <div class="ui corner label">
                                    <i class="asterisk icon"></i>
                                </div>
                            </div>
                            &nbsp;
                            <a class="ui button">
                                Cek
                            </a>
                        </div>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Nama Lengkap</label>
                    <div class="ui corner labeled input">
                        <input type="text" name="suami[nama]" placeholder="Nama Lengkap">
                        <div class="ui corner label">
                            <i class="asterisk icon"></i>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Nomor KK</label>
                        <div class="ui corner labeled input">
                            <input type="text" placeholder="Nomor KK" name="suami[kk]">
                            <div class="ui corner label">
                                <i class="asterisk icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Nomor Pasport</label>
                        <input placeholder="Nomor Pasport" name="suami[pasport]" type="text">
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Tempat Lahir</label>
                        <div class="ui corner labeled input">
                            <input type="text" placeholder="Tempat" name="suami[tmpLhr]">
                            <div class="ui corner label">
                                <i class="asterisk icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Tanggal Lahir</label>
                        <div class="ui right labeled left icon input">
                            <i class="calendar icon"></i>
                            <input type="text" name="suami[tglLhr]" class="birthday" value="" placeholder="Tanggal lahir"/>
                            <a class="ui corner label">
                                <i class="asterisk icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Alamat</label>
                    <input name="suami[alamat]" type="text">
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Provinsi</label>
                        <select onchange="getKab()" id="propinsi" class="ui fluid search dropdown" name="suami[prov]">
                            <option value="">Pilih Provinsi</option>
                            @foreach($provinsi as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="field">
                        <label>Kabupaten</label>
                        <select onchange="getKec()" id="kabupaten_list" class="ui fluid search dropdown" name="suami[kab]">
                            <option value="">Pilih Kabupaten</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Kecamatan</label>
                        <select onchange="getDesa()" id="kecamatan_list" class="ui fluid search dropdown" name="suami[kec]">
                            <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>
                </div>
                <div class="fields">
                    <div class="ten wide field">
                        <label>Kelurahan</label>
                        <select id="desa_list" class="ui fluid search dropdown" name="suami[kel]">
                            <option value="">Pilih Kelurahan</option>
                        </select>
                    </div>
                    <div class="two wide field">
                        <label>RT</label>
                        <input type="text" placeholder="RT" name="suami[rt]">
                    </div>
                    <div class="two wide field">
                        <label>RW</label>
                        <input type="text" placeholder="RW" name="suami[rw]">
                    </div>
                    <div class="two wide field">
                        <label>Kode POS</label>
                        <input type="text" placeholder="Kode POS" name="suami[kdPos]">
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Telepon</label>
                    <input name="suami[telp]" type="text">
                </div>
                <div class="two fields">
                    <div class="eight wide field">
                        <label>Pendidikan Terakhir</label>
                        <select class="ui fluid dropdown" name="suami[pendidikan]">
                            <option value="">Pendidikan</option>
                            @foreach($pendidikan as $p)
                                <option value="{{ $p->id }}">{{ $p->pendidikan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="eight wide field">
                        <label>Pekerjaan</label>
                        <input name="suami[job]" type="text">
                    </div>
                </div>
                <div class="three fields">
                    <div class="three wide field">
                        <label>Anak Ke</label>
                        <input name="suami[anakKe]" type="text">
                    </div>
                    <div class="five wide field">
                        <label>Agama</label>
                        <select class="ui fluid dropdown" name="suami[agama]">
                            <option value="">Agama</option>
                            @foreach($agama as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="three fields">
                    <div class="five wide field">
                        <label>Status Perkawinan</label>
                        <select class="ui fluid dropdown" name="suami[status]">
                            <option value="">Status</option>
                            @foreach($status as $p)
                                <option value="{{ $p->id }}">{{ $p->status }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="two wide field">
                        <label>Perkawinan Ke</label>
                        <input name="suami[kawinKe]" type="text">
                    </div>
                </div>
                <div class="three wide field">
                    <label>Kewarganegaraan</label>
                    <select class="ui fluid dropdown" name="suami[kwn]">
                        <option value="">Pilih Kelurahan</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                    </select>
                </div>
            </div>
            <div class="ui positive right labeled icon button" id="dataSuami_next">
                Tahap berikutnya<i class="arrow right icon"></i>
            </div>

            <div class="ui error message"></div>
        </div>
    </section>
    <section id="dataAyahSuami" style="display: none">
        <div class="ui form">
            <div class="ui segment">
                <a class="ui ribbon label">Data Ayah Dari Suami</a>
                <hr>
                <div class="fields">
                    <div class="field">
                        <label>NIK</label>
                        <div class="ui icon input">
                            <div class="ui corner labeled input">
                                <input type="text" placeholder="NIK" name="AyahSuami[nik]">
                                <div class="ui corner label">
                                    <i class="asterisk icon"></i>
                                </div>
                            </div>
                            &nbsp;
                            <a class="ui button">
                                Cek
                            </a>
                        </div>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Nama Lengkap</label>
                    <div class="ui corner labeled input">
                        <input type="text" placeholder="Nama Lengkap" name="AyahSuami[nama]">
                        <div class="ui corner label">
                            <i class="asterisk icon"></i>
                        </div>
                    </div>
                </div>
                <div class="five wide field">
                    <label>Agama</label>
                    <select class="ui fluid dropdown" name="AyahSuami[agama]">
                        <option value="">Agama</option>
                        @foreach($agama as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Tempat Lahir</label>

                        <div class="ui corner labeled input">
                            <input type="text" placeholder="Tempat Lahir" name="AyahSuami[tmpLhr]">

                            <div class="ui corner label">
                                <i class="asterisk icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Tanggal Lahir</label>

                        <div class="ui right labeled left icon input">
                            <i class="calendar icon"></i>
                            <input type="text" name="AyahSuami[tglLhr]" class="birthday" value=""
                                   placeholder="Tanggal lahir"/>
                            <a class="ui corner label">
                                <i class="asterisk icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Alamat</label>
                    <input name="AyahSuami[alamat]" type="text">
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Provinsi</label>
                        <select id="prov_ayah_suami" class="ui fluid search dropdown propinsi" name="AyahSuami[prov]">
                            <option value="">Pilih Provinsi</option>
                            @foreach($provinsi as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="field">
                        <label>Kabupaten</label>
                        <select id="kab_ayah_suami" class="ui fluid search dropdown" name="AyahSuami[kab]">
                            <option value="">Pilih Kabupaten</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Kecamatan</label>
                        <select id="kec_ayah_suami" class="ui fluid search dropdown" name="AyahSuami[kec]">
                            <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>
                </div>
                <div class="fields">
                    <div class="ten wide field">
                        <label>Kelurahan</label>
                        <select id="kel_ayah_suami" class="ui fluid search dropdown" name="AyahSuami[kel]">
                            <option value="">Pilih Kelurahan</option>
                        </select>
                    </div>
                    <div class="two wide field">
                        <label>RT</label>
                        <input type="text" placeholder="RT" name="AyahSuami[rt]">
                    </div>
                    <div class="two wide field">
                        <label>RW</label>
                        <input type="text" placeholder="RW" name="AyahSuami[rw]">
                    </div>
                    <div class="two wide field">
                        <label>Kode POS</label>
                        <input type="text" placeholder="Kode POS" name="AyahSuami[kdPos]">
                    </div>
                </div>
                <div class="two fields">
                    <div class="eight wide field">
                        <label>Telepon</label>
                        <input name="AyahSuami[telp]" type="text">
                    </div>
                    <div class="eight wide field">
                        <label>Pekerjaan</label>
                        <input name="AyahSuami[job]" type="text">
                    </div>
                </div>
            </div>
            <div class="ui positive labeled icon button" id="dataAyahSuami_back"><i class="arrow left icon"></i>Tahap
                sebelumnya
            </div>
            <div class="ui positive right labeled icon button" id="dataAyahSuami_next">Tahap berikutnya<i
                        class="arrow right icon"></i></div>
            <!-- Below tag is the placeholder/container for the error messages -->
            <div class="ui error message"></div>
        </div>
    </section>
    <section id="dataIbuSuami" style="display: none">
        <div class="ui form">
            <div class="ui segment">
                <a class="ui ribbon label">Data Ibu Dari Suami</a>
                <hr>
                <div class="fields">
                    <div class="field">
                        <label>NIK</label>

                        <div class="ui icon input">
                            <div class="ui corner labeled input">
                                <input type="text" placeholder="NIK" name="IbuSuami[nik]">

                                <div class="ui corner label">
                                    <i class="asterisk icon"></i>
                                </div>
                            </div>
                            &nbsp;
                            <a class="ui button">
                                Cek
                            </a>
                        </div>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Nama Lengkap</label>

                    <div class="ui corner labeled input">
                        <input type="text" placeholder="Nama Lengkap" name="IbuSuami[nama]">

                        <div class="ui corner label">
                            <i class="asterisk icon"></i>
                        </div>
                    </div>
                </div>
                <div class="five wide field">
                    <label>Agama</label>
                    <select class="ui fluid dropdown" name="IbuSuami[agama]">
                        <option value="">Agama</option>
                        @foreach($agama as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Tempat Lahir</label>

                        <div class="ui corner labeled input">
                            <input type="text" placeholder="Tempat Lahir" name="IbuSuami[tmpLhr]">

                            <div class="ui corner label">
                                <i class="asterisk icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Tanggal Lahir</label>

                        <div class="ui right labeled left icon input">
                            <i class="calendar icon"></i>
                            <input type="text" name="IbuSuami[tglLhr]" class="birthday" value=""
                                   placeholder="Tanggal lahir"/>
                            <a class="ui corner label">
                                <i class="asterisk icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Alamat</label>
                    <input name="IbuSuami[alamat]" type="text">
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Provinsi</label>
                        <select id="prov_ibu_suami" class="ui fluid search dropdown" name="IbuSuami[prov]">
                            <option value="">Pilih Provinsi</option>
                            @foreach($provinsi as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="field">
                        <label>Kabupaten</label>
                        <select id="kab_ibu_suami" class="ui fluid search dropdown" name="IbuSuami[kab]">
                            <option value="">Pilih Kabupaten</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Kecamatan</label>
                        <select id="kec_ibu_suami" class="ui fluid search dropdown" name="IbuSuami[kec]">
                            <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>
                </div>
                <div class="fields">
                    <div class="ten wide field">
                        <label>Kelurahan</label>
                        <select id="kel_ibu_suami" class="ui fluid search dropdown" name="IbuSuami[kel]">
                            <option value="">Pilih Kelurahan</option>
                        </select>
                    </div>
                    <div class="two wide field">
                        <label>RT</label>
                        <input type="text" placeholder="RT" name="IbuSuami[rt]">
                    </div>
                    <div class="two wide field">
                        <label>RW</label>
                        <input type="text" placeholder="RW" name="IbuSuami[rw]">
                    </div>
                    <div class="two wide field">
                        <label>Kode POS</label>
                        <input type="text" placeholder="Kode POS" name="IbuSuami[kdPos]">
                    </div>
                </div>
                <div class="two fields">
                    <div class="eight wide field">
                        <label>Telepon</label>
                        <input name="IbuSuami[telp]" type="text">
                    </div>
                    <div class="eight wide field">
                        <label>Pekerjaan</label>
                        <input name="IbuSuami[job]" type="text">
                    </div>
                </div>
            </div>
            <div class="ui positive labeled icon button" id="dataIbuSuami_back"><i class="arrow left icon"></i>Tahap sebelumnya</div>
            <div class="ui positive right labeled icon button" id="dataIbuSuami_next" wz-next>Kirim<i class="check icon"></i></div>
            <div class="ui error message"></div>
        </div>
    </section>
</wizard-pane>