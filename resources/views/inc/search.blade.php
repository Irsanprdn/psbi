<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="my-3">
                <p class="text-base font-weight-bold mb-0"> Status</p>
                <input type="hidden" id="statusval">
                <div class="form-check d-none">
                    <input class="form-check-input status-checkbox" type="checkbox" value="" data-id="status" name="status-checkbox" id="Semua" checked onclick="selectOnlyThis(this)">
                    <label class="form-check-label" for="Semua">
                        Semua
                    </label>
                </div>
                @foreach( $dataStatus as $ds )
                <div class="form-check d-none">
                    <input class="form-check-input status-checkbox" type="checkbox" value="{{ $ds->data_name }}" data-id="status" name="status-checkbox" id="{{ $ds->data_name }}" onclick="selectOnlyThis(this)">
                    <label class="form-check-label" for="{{ $ds->data_name }}">
                        {{ $ds->data_name }}
                    </label>
                </div>
                @endforeach
                <select data-id="status" class="form-control" name="status-checkbox" id="status" onchange="selectOnlyThis(this)">
                    <option value="" selected>Semua</option>
                    @foreach( $dataStatus as $ds )
                    <option value="{{ $ds->data_name }}">{{ $ds->data_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-3">
                <p class="text-base font-weight-bold mb-0"> Hasil Jangkauan</p>
                <input type="hidden" id="hjval">
                <div class="form-check d-none">
                    <input class="form-check-input hasil-jangkauan-checkbox" name="hasil-jangkauan-checkbox" type="checkbox" value="" data-id="hasil-jangkauan" id="Semua" onclick="selectOnlyThis(this)" checked>
                    <label class="form-check-label" for="Semua">
                        Semua
                    </label>
                </div>
                @foreach( $dataHJ as $dhj )
                <div class="form-check d-none">
                    <input class="form-check-input hasil-jangkauan-checkbox" name="hasil-jangkauan-checkbox" type="checkbox" value="{{ $dhj->data_name }}" data-id="hasil-jangkauan" id="{{ $dhj->data_name }}" onclick="selectOnlyThis(this)">
                    <label class="form-check-label" for="{{ $dhj->data_name }}">
                        {{ $dhj->data_name }}
                    </label>
                </div>
                @endforeach
                <select data-id="hasil-jangkauan" class="form-control" name="hasil-jangkauan-checkbox" id="hasil-jangkauan" onchange="selectOnlyThis(this)">
                    <option value="" selected>Semua</option>
                    @foreach( $dataHJ as $dhj )
                    <option value="{{ $dhj->data_name }}">{{ $dhj->data_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-9">
            <div id="preloader2" class="d-none"></div>
            <div id="penampung-pencarian">
            </div>
        </div>
    </div>


</div>