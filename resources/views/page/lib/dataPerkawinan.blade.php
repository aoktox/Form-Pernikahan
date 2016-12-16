<wizard-pane title="Data Perkawinan">
    <section id="Data_Perkawinan">
        <div class="ui form">
            <div class="ui segment">
                <a class="ui ribbon label">Data Perkawinan</a>
                <hr>
                <div class="inline field">
                    <label>Tanggal Pemberkatan Perkawinan</label>
                    <div class="ui right labeled left icon input">
                        <i class="calendar icon"></i>
                        <input type="text" name="DataPerkawinan[tglPemberkatan]" class="tanggalPicker" placeholder="Tanggal Pemberkatan" />
                        <a class="ui corner label">
                            <i class="asterisk icon"></i>
                        </a>
                    </div>
                </div>
                <div class="inline field">
                    <label>Tanggal Pencatatan Perkawinan</label>
                    <div class="ui right labeled left icon input">
                        <i class="calendar icon"></i>
                        <input type="text" name="DataPerkawinan[tglPencatatan]" class="tanggalPicker" placeholder="Tanggal Pencatatan" />
                        <a class="ui corner label">
                            <i class="asterisk icon"></i>
                        </a>
                    </div>
                </div>
                <div class="inline field">
                    <label>Pukul</label>
                    <div class="ui right labeled left icon input">
                        <i class="alarm icon"></i>
                        <input type="text" name="DataPerkawinan[jam]" placeholder="Pukul" />
                        <a class="ui corner label">
                            <i class="asterisk icon"></i>
                        </a>
                    </div>
                </div>
                <div class="inline field field">
                    <label>Nama Organisasi Penghayat Kepercayaan</label>
                    <div class="ui input">
                        <input type="text" name="DataPerkawinan[org]">
                    </div>
                </div>
                <div class="inline field field">
                    <label>Tempat Pemberkatan</label>
                    <div class="ui input">
                        <input type="text" placeholder="Tempat Pemberkatan" name="DataPerkawinan[tmpBerkat]">
                    </div>
                </div>
                <div class="inline field field">
                    <label>Tempat Pencatatan</label>
                    <div class="ui input">
                        <input type="text" placeholder="Tempat Pencatatan" name="DataPerkawinan[tmpCatat]">
                    </div>
                </div>
                <div class="inline field field">
                    <label>Nama Badan Peradilan</label>
                    <div class="ui input">
                        <input type="text" placeholder="Nama Badan Peradilan" name="DataPerkawinan[badanPeradilan]">
                    </div>
                </div>
                <div class="inline field field">
                    <label>Nomor Putusan Penetapan Pengadilan</label>
                    <div class="ui input">
                        <input type="text" name="DataPerkawinan[noPutusan]">
                    </div>
                </div>
                <div class="inline field field">
                    <label>Tanggal Putusan Penetapan Pengadilan</label>
                    <div class="ui right labeled left icon input">
                        <i class="calendar icon"></i>
                        <input type="text" name="DataPerkawinan[tglPutusan]" class="tanggalPicker" placeholder="Tanggal Penetapan" />
                        <a class="ui corner label">
                            <i class="asterisk icon"></i>
                        </a>
                    </div>
                </div>
                <div class="inline field field">
                    <label>Nama Pemuka Agama / Pghyt Kepercayaan</label>
                    <div class="ui input">
                        <input type="text" name="DataPerkawinan[PemukaAgama]" placeholder="Nama Pemuka Agama">
                    </div>
                </div>
                <div class="inline field field">
                    <label>Ijin Perwakilan bagi WNA / Nomor</label>
                    <div class="ui input">
                        <input type="text" name="DataPerkawinan[IjinPerwakilan]">
                    </div>
                </div>
                <div class="inline field field">
                    <label>Jumlah Anak Yang Telah Diakui dan Disahkan</label>
                    <div class="ui input">
                        <input type="text" placeholder="Jumlah Anak" name="DataPerkawinan[jlhAnak]">
                    </div>
                </div>
                <div class="inline field">
                    <div class="two fields">
                        <div class="field">
                            <label>Pelapor</label>
                            <select class="ui fluid dropdown" name="DataPerkawinan[Pelapor]">
                                <option value="">Pelapor</option>
                                <option value="Suami">Suami</option>
                                <option value="Istri">Istri</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Agama / Penghayat Kepercayaan</label>
                            <select class="ui fluid dropdown" name="DataPerkawinan[agama]">
                                <option value="">Agama</option>
                                @foreach($agama as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui positive right labeled icon button" id="dataKawin_next" wz-next>Lanjtkan<i class="check icon"></i></div>
        </div>
    </section>
</wizard-pane>