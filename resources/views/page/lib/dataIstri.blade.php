<wizard-pane title="Data Istri">
    <section id="dataIstri">
        <div class="ui form">
            <div class="ui segment">
                <a class="ui ribbon label">Data Istri</a>
                <hr>
                <div class="fields">
                    <div class="field">
                        <label>NIK</label>
                        <div class="ui icon input">
                            <div class="ui corner labeled input">
                                <input id="nikIstri" type="text" name="istri[nik]" placeholder="NIK...">
                                <div class="ui corner label">
                                    <i class="asterisk icon"></i>
                                </div>
                            </div>
                            &nbsp;
                            <button class="ui positive button" id="cek_nik_istri">Cek</button>
                        </div>
                        <label id="errorIstri" style="color: #912D2B"></label>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Nama Lengkap</label>
                    <div class="ui corner labeled input">
                        <input type="text" id="namaIstri" name="istri[nama]" placeholder="Nama Lengkap">
                        <div class="ui corner label">
                            <i class="asterisk icon"></i>
                        </div>
                    </div>
                </div>
                <div class="two fields sembunyi istri">
                    <div class="field">
                        <label>Nomor KK</label>
                        <div class="ui corner labeled input">
                            <input type="text" placeholder="Nomor KK" id="KKIstri" name="istri[kk]">
                            <div class="ui corner label">
                                <i class="asterisk icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Nomor Pasport</label>
                        <input placeholder="Nomor Pasport" id="passportIstri" name="istri[pasport]" type="text">
                    </div>
                </div>
                <div class="two fields sembunyi istri">
                    <div class="field">
                        <label>Tempat Lahir</label>
                        <div class="ui corner labeled input">
                            <input type="text" placeholder="Tempat" id="tmpLhrIstri" name="istri[tmpLhr]">
                            <div class="ui corner label">
                                <i class="asterisk icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Tanggal Lahir</label>
                        <div class="ui right labeled left icon input">
                            <i class="calendar icon"></i>
                            <input type="text" id="tglLhrIstri" name="istri[tglLhr]" class="birthday" value="" placeholder="Tanggal lahir"/>
                            <a class="ui corner label">
                                <i class="asterisk icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Alamat</label>
                    <input name="istri[alamat]" type="text">
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Provinsi</label>
                        <select id="propinsi_istri" class="ui fluid search dropdown" name="istri[prov]">
                            <option value="">Pilih Provinsi</option>
                            @foreach($provinsi as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="field">
                        <label>Kabupaten</label>
                        <select id="kabupaten_istri" class="ui fluid search dropdown" name="istri[kab]">
                            <option value="">Pilih Kabupaten</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Kecamatan</label>
                        <select id="kecamatan_istri" class="ui fluid search dropdown" name="istri[kec]">
                            <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>
                </div>
                <div class="fields">
                    <div class="ten wide field">
                        <label>Kelurahan</label>
                        <select id="desa_istri" class="ui fluid search dropdown" name="istri[kel]">
                            <option value="">Pilih Kelurahan</option>
                        </select>
                    </div>
                    <div class="two wide field">
                        <label>RT</label>
                        <input type="text" placeholder="RT" name="istri[rt]">
                    </div>
                    <div class="two wide field">
                        <label>RW</label>
                        <input type="text" placeholder="RW" name="istri[rw]">
                    </div>
                    <div class="two wide field">
                        <label>Kode POS</label>
                        <input type="text" placeholder="Kode POS" name="istri[kdPos]">
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Telepon</label>
                    <input name="istri[telp]" type="text">
                </div>
                <div class="two fields sembunyi istri">
                    <div class="eight wide field">
                        <label>Pendidikan Terakhir</label>
                        <select class="ui fluid dropdown pendidikan istri" name="istri[pendidikan]">
                            <option value="">Pendidikan</option>
                            @foreach($pendidikan as $p)
                                <option value="{{ $p->id }}">{{ $p->pendidikan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="eight wide field">
                        <label>Pekerjaan</label>
                        <input name="istri[job]" id="jobIstri" type="text">
                    </div>
                </div>
                <div class="three fields">
                    <div class="three wide field">
                        <label>Anak Ke</label>
                        <input name="istri[anakKe]" type="text">
                    </div>
                    <div class="five wide field sembunyi istri">
                        <label>Agama</label>
                        <select class="ui fluid dropdown agama istri" name="istri[agama]">
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
                        <select class="ui fluid dropdown status_kawin istri" name="istri[status]">
                            <option value="">Status</option>
                            @foreach($status as $p)
                                <option value="{{ $p->id }}">{{ $p->status }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="two wide field">
                        <label>Perkawinan Ke</label>
                        <input name="istri[kawinKe]" type="text">
                    </div>
                </div>
                <div class="three wide field sembunyi istri">
                    <label>Kewarganegaraan</label>
                    <select class="ui fluid dropdown kwn istri" name="istri[kwn]">
                        <option value="">Kewarganegaraan</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                    </select>
                </div>
            </div>
            <div class="ui positive right labeled icon button" id="dataIstri_next">
                Tahap berikutnya<i class="arrow right icon"></i>
            </div>

            <div class="ui error message"></div>
        </div>
    </section>
    <section id="dataAyahIstri" style="display: none">
        <div class="ui form">
            <div class="ui segment">
                <a class="ui ribbon label">Data Ayah Dari Istri</a>
                <hr>
                <div class="fields">
                    <div class="field">
                        <label>NIK</label>
                        <div class="ui icon input">
                            <div class="ui corner labeled input">
                                <input type="text" id="nikAyahIstri" placeholder="NIK" name="AyahIstri[nik]">
                                <div class="ui corner label">
                                    <i class="asterisk icon"></i>
                                </div>
                            </div>
                            &nbsp;
                            <button class="ui positive button" id="cek_nik_ayah_istri">Cek</button>
                        </div>
                        <label id="errorAyahIstri" style="color: #912D2B"></label>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Nama Lengkap</label>
                    <div class="ui corner labeled input">
                        <input type="text" id="namaAyahIstri" placeholder="Nama Lengkap" name="AyahIstri[nama]">
                        <div class="ui corner label">
                            <i class="asterisk icon"></i>
                        </div>
                    </div>
                </div>
                <div class="five wide field sembunyi Ayahistri">
                    <label>Agama</label>
                    <select class="ui fluid dropdown agama Ayahistri" name="AyahIstri[agama]">
                        <option value="">Agama</option>
                        @foreach($agama as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="two fields sembunyi Ayahistri">
                    <div class="field">
                        <label>Tempat Lahir</label>

                        <div class="ui corner labeled input">
                            <input type="text" id="tmpLhrAyahIstri" placeholder="Tempat Lahir" name="AyahIstri[tmpLhr]">

                            <div class="ui corner label">
                                <i class="asterisk icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Tanggal Lahir</label>

                        <div class="ui right labeled left icon input">
                            <i class="calendar icon"></i>
                            <input type="text" id="tglLhrAyahIstri" name="AyahIstri[tglLhr]" class="birthday" value=""
                                   placeholder="Tanggal lahir"/>
                            <a class="ui corner label">
                                <i class="asterisk icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Alamat</label>
                    <input name="AyahIstri[alamat]" type="text">
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Provinsi</label>
                        <select id="prov_ayah_istri" class="ui fluid search dropdown propinsi" name="AyahIstri[prov]">
                            <option value="">Pilih Provinsi</option>
                            @foreach($provinsi as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="field">
                        <label>Kabupaten</label>
                        <select id="kab_ayah_istri" class="ui fluid search dropdown" name="AyahIstri[kab]">
                            <option value="">Pilih Kabupaten</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Kecamatan</label>
                        <select id="kec_ayah_istri" class="ui fluid search dropdown" name="AyahIstri[kec]">
                            <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>
                </div>
                <div class="fields">
                    <div class="ten wide field">
                        <label>Kelurahan</label>
                        <select id="kel_ayah_istri" class="ui fluid search dropdown" name="AyahIstri[kel]">
                            <option value="">Pilih Kelurahan</option>
                        </select>
                    </div>
                    <div class="two wide field">
                        <label>RT</label>
                        <input type="text" placeholder="RT" name="AyahIstri[rt]">
                    </div>
                    <div class="two wide field">
                        <label>RW</label>
                        <input type="text" placeholder="RW" name="AyahIstri[rw]">
                    </div>
                    <div class="two wide field">
                        <label>Kode POS</label>
                        <input type="text" placeholder="Kode POS" name="AyahIstri[kdPos]">
                    </div>
                </div>
                <div class="two fields">
                    <div class="eight wide field">
                        <label>Telepon</label>
                        <input name="AyahIstri[telp]" type="text">
                    </div>
                    <div class="eight wide field sembunyi Ayahistri">
                        <label>Pekerjaan</label>
                        <input name="AyahIstri[job]" id="jobAyahIstri" type="text">
                    </div>
                </div>
            </div>
            <div class="ui positive labeled icon button" id="dataAyahIstri_back"><i class="arrow left icon"></i>Tahap
                sebelumnya
            </div>
            <div class="ui positive right labeled icon button" id="dataAyahIstri_next">Tahap berikutnya<i
                        class="arrow right icon"></i></div>
            <!-- Below tag is the placeholder/container for the error messages -->
            <div class="ui error message"></div>
        </div>
    </section>
    <section id="dataIbuIstri" style="display: none">
        <div class="ui form">
            <div class="ui segment">
                <a class="ui ribbon label">Data Ibu Dari Istri</a>
                <hr>
                <div class="fields">
                    <div class="field">
                        <label>NIK</label>
                        <div class="ui icon input">
                            <div class="ui corner labeled input">
                                <input type="text" id="nikIbuIstri" placeholder="NIK" name="IbuIstri[nik]">
                                <div class="ui corner label">
                                    <i class="asterisk icon"></i>
                                </div>
                            </div>
                            &nbsp;
                            <button class="ui positive button" id="cek_nik_ibu_istri">Cek</button>
                        </div>
                        <label id="errorIbuIstri" style="color: #912D2B"></label>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Nama Lengkap</label>
                    <div class="ui corner labeled input">
                        <input type="text" id="namaIbuIstri" placeholder="Nama Lengkap" name="IbuIstri[nama]">
                        <div class="ui corner label">
                            <i class="asterisk icon"></i>
                        </div>
                    </div>
                </div>
                <div class="five wide field sembunyi IbuIstri">
                    <label>Agama</label>
                    <select class="ui fluid dropdown agama IbuIstri" name="IbuIstri[agama]">
                        <option value="">Agama</option>
                        @foreach($agama as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="two fields sembunyi IbuIstri">
                    <div class="field">
                        <label>Tempat Lahir</label>

                        <div class="ui corner labeled input">
                            <input type="text" id="tmpLhrIbuIstri" placeholder="Tempat Lahir" name="IbuIstri[tmpLhr]">

                            <div class="ui corner label">
                                <i class="asterisk icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Tanggal Lahir</label>

                        <div class="ui right labeled left icon input">
                            <i class="calendar icon"></i>
                            <input type="text" id="tglLhrIbuIstri" name="IbuIstri[tglLhr]" class="birthday" value=""
                                   placeholder="Tanggal lahir"/>
                            <a class="ui corner label">
                                <i class="asterisk icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Alamat</label>
                    <input name="IbuIstri[alamat]" type="text">
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Provinsi</label>
                        <select id="prov_ibu_istri" class="ui fluid search dropdown propinsi" name="IbuIstri[prov]">
                            <option value="">Pilih Provinsi</option>
                            @foreach($provinsi as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="field">
                        <label>Kabupaten</label>
                        <select id="kab_ibu_istri" class="ui fluid search dropdown" name="IbuIstri[kab]">
                            <option value="">Pilih Kabupaten</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Kecamatan</label>
                        <select id="kec_ibu_istri" class="ui fluid search dropdown" name="IbuIstri[kec]">
                            <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>
                </div>
                <div class="fields">
                    <div class="ten wide field">
                        <label>Kelurahan</label>
                        <select id="kel_ibu_istri" class="ui fluid search dropdown" name="IbuIstri[kel]">
                            <option value="">Pilih Kelurahan</option>
                        </select>
                    </div>
                    <div class="two wide field">
                        <label>RT</label>
                        <input type="text" placeholder="RT" name="IbuIstri[rt]">
                    </div>
                    <div class="two wide field">
                        <label>RW</label>
                        <input type="text" placeholder="RW" name="IbuIstri[rw]">
                    </div>
                    <div class="two wide field">
                        <label>Kode POS</label>
                        <input type="text" placeholder="Kode POS" name="IbuIstri[kdPos]">
                    </div>
                </div>
                <div class="two fields">
                    <div class="eight wide field">
                        <label>Telepon</label>
                        <input name="IbuIstri[telp]" type="text">
                    </div>
                    <div class="eight wide field sembunyi IbuIstri">
                        <label>Pekerjaan</label>
                        <input name="IbuIstri[job]" id="jobIbuIstri" type="text">
                    </div>
                </div>
            </div>
            <div class="ui positive labeled icon button" id="dataIbuIstri_back"><i class="arrow left icon"></i>Tahap
                sebelumnya
            </div>
            <div class="ui positive right labeled icon button" id="dataIbuIstri_next" wz-next >Tahap berikutnya<i
                        class="arrow right icon"></i></div>
            <!-- Below tag is the placeholder/container for the error messages -->
            <div class="ui error message"></div>
        </div>
    </section>
</wizard-pane>