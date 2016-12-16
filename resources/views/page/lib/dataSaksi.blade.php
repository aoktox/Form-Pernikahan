<wizard-pane title="Data Saksi">
    <section id="Data_Saksi_I">
        <div class="ui form">
            <div class="ui segment">
                <a class="ui ribbon label">Data Saksi I</a>
                <hr>
                <div class="fields">
                    <div class="field">
                        <label>NIK</label>
                        <div class="ui icon input">
                            <div class="ui corner labeled input">
                                <input type="text" placeholder="NIK" id="nikSaksi1" name="SaksiI[nik]">
                                <div class="ui corner label">
                                    <i class="asterisk icon"></i>
                                </div>
                            </div>
                            &nbsp;
                            <a class="ui positive button" data-asal="Saksi1" id="cek_nik_Saksi1">Cek</a>
                        </div>
                        <label id="errorSaksi1" style="color: #912D2B"></label>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Nama Lengkap</label>
                    <div class="ui corner labeled input">
                        <input type="text" placeholder="Nama Lengkap" name="SaksiI[nama]" id="namaSaksi1">
                        <div class="ui corner label">
                            <i class="asterisk icon"></i>
                        </div>
                    </div>
                </div>
                <div class="five wide field sembunyi Saksi1">
                    <label>Agama</label>
                    <select class="ui fluid dropdown agama Saksi1" name="SaksiI[agama]">
                        <option value="">Agama</option>
                        @foreach($agama as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="two fields sembunyi Saksi1">
                    <div class="field">
                        <label>Tempat Lahir</label>
                        <div class="ui corner labeled input">
                            <input type="text" placeholder="Tempat Lahir" name="SaksiI[tmpLhr]" id="tmpLhrSaksi1">
                            <div class="ui corner label">
                                <i class="asterisk icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Tanggal Lahir</label>
                        <div class="ui right labeled left icon input">
                            <i class="calendar icon"></i>
                            <input type="text" name="SaksiI[tglLhr]" class="birthday" value="" placeholder="Tanggal lahir" id="tglLhrSaksi1" />
                            <a class="ui corner label">
                                <i class="asterisk icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Alamat</label>
                    <input name="SaksiI[alamat]" type="text">
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Provinsi</label>
                        <select id="prov_saksi_1" class="ui fluid search dropdown" name="SaksiI[prov]">
                            <option value="">Pilih Provinsi</option>
                            @foreach($provinsi as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="field">
                        <label>Kabupaten</label>
                        <select id="kab_saksi_1" class="ui fluid search dropdown" name="SaksiI[kab]">
                            <option value="">Pilih Kabupaten</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Kecamatan</label>
                        <select id="kec_saksi_1" class="ui fluid search dropdown" name="SaksiI[kec]">
                            <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>
                </div>
                <div class="fields">
                    <div class="ten wide field">
                        <label>Kelurahan</label>
                        <select id="kel_saksi_1" class="ui fluid search dropdown" name="SaksiI[kel]">
                            <option value="">Pilih Kelurahan</option>
                        </select>
                    </div>
                    <div class="two wide field">
                        <label>RT</label>
                        <input type="text" placeholder="RT" name="SaksiI[rt]">
                    </div>
                    <div class="two wide field">
                        <label>RW</label>
                        <input type="text" placeholder="RW" name="SaksiI[rw]">
                    </div>
                    <div class="two wide field">
                        <label>Kode POS</label>
                        <input type="text" placeholder="Kode POS" name="SaksiI[kdPos]">
                    </div>
                </div>
                <div class="two fields">
                    <div class="eight wide field">
                        <label>Telepon</label>
                        <input name="SaksiI[telp]" type="text">
                    </div>
                    <div class="eight wide field sembunyi Saksi1">
                        <label>Pekerjaan</label>
                        <input name="SaksiI[job]" type="text" id="jobSaksi1">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Data_Saksi_II">
        <div class="ui form">
            <div class="ui segment">
                <a class="ui ribbon label">Data Saksi II</a>
                <hr>
                <div class="fields">
                    <div class="field">
                        <label>NIK</label>
                        <div class="ui icon input">
                            <div class="ui corner labeled input">
                                <input type="text" placeholder="NIK" id="nikSaksi2" name="SaksiII[nik]">
                                <div class="ui corner label">
                                    <i class="asterisk icon"></i>
                                </div>
                            </div>
                            &nbsp;
                            <a class="ui positive button" data-asal="Saksi2" id="cek_nik_Saksi2">Cek</a>
                        </div>
                        <label id="errorSaksi2" style="color: #912D2B"></label>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Nama Lengkap</label>
                    <div class="ui corner labeled input">
                        <input type="text" placeholder="Nama Lengkap" name="SaksiII[nama]" id="namaSaksi2">
                        <div class="ui corner label">
                            <i class="asterisk icon"></i>
                        </div>
                    </div>
                </div>
                <div class="five wide field sembunyi Saksi2">
                    <label>Agama</label>
                    <select class="ui fluid dropdown agama Saksi2" name="SaksiII[agama]">
                        <option value="">Agama</option>
                        @foreach($agama as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="two fields sembunyi Saksi2">
                    <div class="field">
                        <label>Tempat Lahir</label>
                        <div class="ui corner labeled input">
                            <input type="text" placeholder="Tempat Lahir" name="SaksiII[tmpLhr]" id="tmpLhrSaksi2">
                            <div class="ui corner label">
                                <i class="asterisk icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Tanggal Lahir</label>
                        <div class="ui right labeled left icon input">
                            <i class="calendar icon"></i>
                            <input type="text" name="SaksiII[tglLhr]" class="birthday" value="" placeholder="Tanggal lahir" id="tglLhrSaksi2"/>
                            <a class="ui corner label">
                                <i class="asterisk icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="eight wide field">
                    <label>Alamat</label>
                    <input name="SaksiII[alamat]" type="text">
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Provinsi</label>
                        <select id="prov_saksi_2" class="ui fluid search dropdown" name="SaksiII[prov]">
                            <option value="">Pilih Provinsi</option>
                            @foreach($provinsi as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="field">
                        <label>Kabupaten</label>
                        <select id="kab_saksi_2" class="ui fluid search dropdown" name="SaksiII[kab]">
                            <option value="">Pilih Kabupaten</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Kecamatan</label>
                        <select id="kec_saksi_2" class="ui fluid search dropdown" name="SaksiII[kec]">
                            <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>
                </div>
                <div class="fields">
                    <div class="ten wide field">
                        <label>Kelurahan</label>
                        <select id="kel_saksi_2" class="ui fluid search dropdown" name="SaksiII[kel]">
                            <option value="">Pilih Kelurahan</option>
                        </select>
                    </div>
                    <div class="two wide field">
                        <label>RT</label>
                        <input type="text" placeholder="RT" name="SaksiII[rt]">
                    </div>
                    <div class="two wide field">
                        <label>RW</label>
                        <input type="text" placeholder="RW" name="SaksiII[rw]">
                    </div>
                    <div class="two wide field">
                        <label>Kode POS</label>
                        <input type="text" placeholder="Kode POS" name="SaksiII[kdPos]">
                    </div>
                </div>
                <div class="two fields">
                    <div class="eight wide field">
                        <label>Telepon</label>
                        <input name="SaksiII[telp]" type="text">
                    </div>
                    <div class="eight wide field sembunyi Saksi2">
                        <label>Pekerjaan</label>
                        <input name="SaksiII[job]" type="text" id="jobSaksi2">
                    </div>
                </div>
            </div>
            <div class="ui positive right labeled icon button" wz-next>Tahap berikutnya<i class="check icon"></i></div>
        </div>
    </section>
</wizard-pane>