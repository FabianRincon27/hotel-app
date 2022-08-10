<div class="modal fade modal-lg" id="addRoomsHotel{{ $d->id }}" tabindex="-1" aria-labelledby="addHotelLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addHotelLabel">Registro De Habitaciones Para
                    <b>{{ $d->name }}</b>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mt-2">
                    <div class="col-lg-12 text-start">
                        <h6 class="modal-title">Cantidad De Cuartos a Asignar:
                            <span class="badge bg-info"><b>{{ $d->number_of_rooms }}</b></span>
                            <input type="hidden" value="{{ $d->number_of_rooms }}" id="num_rooms">
                        </h6>
                    </div>
                </div>
                <form action="{{ route('rooms-post', $d->id) }}" method="POST" id="form_rooms" class="mt-4"
                    autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="amount" class="form-label">Cantidad</label>
                                <input type="text" class="form-control" id="amount_first" name="amount[]"
                                    min="1" max="{{ $d->number_of_rooms }}">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="type" class="form-label">Tipo De Habitación</label>
                                <input type="text" class="form-control" id="type[]" name="type[]" readonly
                                    value="ESTANDAR">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="accommodation" class="form-label">Acomodación</label>
                                {!! Form::select('accommodation[]', ['0' => 'SENCILLA', '1' => 'DOBLE'], null, [
                                    'class' => 'form-select',
                                ]) !!}
                                <hr class="d-block d-sm-block d-md-block d-xxl-none d-xl-none">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="amount"
                                    class="form-label d-block d-sm-block d-md-block d-xxl-none d-xl-none">Cantidad</label>
                                <input type="text" class="form-control" id="amount_second" name="amount[]"
                                    min="1" max="{{ $d->number_of_rooms }}">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="type"
                                    class="form-label d-block d-sm-block d-md-block d-xxl-none d-xl-none">Tipo De
                                    Habitación</label>
                                <input type="text" class="form-control" id="type[]" name="type[]" readonly
                                    value="JUNIOR">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="accommodation"
                                    class="form-label d-block d-sm-block d-md-block d-xxl-none d-xl-none">Acomodación</label>
                                {!! Form::select('accommodation[]', ['2' => 'TRIPLE', '3' => 'CUÁDRUPLE'], null, [
                                    'class' => 'form-select',
                                ]) !!}

                            </div>
                            <hr class="d-block d-sm-block d-md-block d-xxl-none d-xl-none">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="amount"
                                    class="form-label d-block d-sm-block d-md-block d-xxl-none d-xl-none">Cantidad</label>
                                <input type="text" class="form-control" id="amount_third" name="amount[]"
                                    min="1" max="{{ $d->number_of_rooms }}">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="type"
                                    class="form-label d-block d-sm-block d-md-block d-xxl-none d-xl-none">Tipo De
                                    Habitación</label>
                                <input type="text" class="form-control" id="type[]" name="type[]" readonly
                                    value="SUITE">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="accommodation"
                                    class="form-label d-block d-sm-block d-md-block d-xxl-none d-xl-none">Acomodación</label>
                                {!! Form::select('accommodation[]', ['0' => 'SENCILLA', '1' => 'DOBLE', '2' => 'TRIPLE'], null, [
                                    'class' => 'form-select',
                                ]) !!}

                            </div>
                        </div>
                    </div>
            </div>
            <div id="errorCount" class="form-text text-danger visually-hidden">La cantidad de habitaciones no coincide
                con el registro
            </div>
            <br>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm" id="btn_room" onclick="to_asign()">Guardar
                    Habitaciones</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
