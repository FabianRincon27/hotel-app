<div class="modal fade modal-lg" id="EditRoomsHotel{{ $d->id }}" tabindex="-1" aria-labelledby="addHotelLabel"
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
                        <h6 class="modal-title">Cantidad De Habitaciones:
                            <span class="badge bg-info"><b>{{ $d->number_of_rooms }}</b></span>
                            <input type="hidden" value="{{ $d->number_of_rooms }}" id="num_rooms">
                        </h6>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="amount" class="form-label">Cantidad</label>
                            <input type="text" class="form-control" id="amount[]" name="amount[]" min="1"
                                max="{{ $d->number_of_rooms }}" value="{{ $d->rooms[0]->amount }}" readonly>
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
                            {!! Form::select('accommodation[]', ['0' => 'SENCILLA', '1' => 'DOBLE'], $d->rooms[0]->accommodation, [
                                'class' => 'form-select',
                                'disabled',
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
                            <input type="text" class="form-control" id="amount[]" name="amount[]" min="1"
                                max="{{ $d->number_of_rooms }}" value="{{ $d->rooms[1]->amount }}" readonly>
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
                            {!! Form::select('accommodation[]', ['2' => 'TRIPLE', '3' => 'CUÁDRUPLE'], $d->rooms[1]->accommodation, [
                                'class' => 'form-select',
                                'disabled',
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
                            <input type="text" class="form-control" id="amount[]" name="amount[]" min="1"
                                max="{{ $d->number_of_rooms }}" value="{{ $d->rooms[2]->amount }}" readonly>
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
                            {!! Form::select(
                                'accommodation[]',
                                ['0' => 'SENCILLA', '1' => 'DOBLE', '2' => 'TRIPLE'],
                                $d->rooms[2]->accommodation,
                                [
                                    'class' => 'form-select',
                                    'disabled',
                                ],
                            ) !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
