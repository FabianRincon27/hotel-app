<div class="modal fade modal-lg" id="editHotel{{ $d->id }}" tabindex="-1" aria-labelledby="addHotelLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addHotelLabel">Editar Hotel <b>{{ $d->name }}</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('hotel-update', $d->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Ej: Hotel Nueva Luna" value="{{ $d->name }}">
                                <div id="errorName" class="form-text text-danger visually-hidden">Debe escribir un
                                    nombre para el hotel
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="address" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Ej: Carrera 23 # 65J 78" value="{{ $d->address }}">
                                <div id="errorAddress" class="form-text text-danger visually-hidden">Debe escribir una
                                    dirección para el
                                    hotel
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="city" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" id="city" name="city"
                                    placeholder="Ej: Bogotá, Cartagena, Barranquila , etc." value="{{ $d->city }}">
                                <div id="errorCity" class="form-text text-danger visually-hidden">Debe escribir una
                                    ciudad para el
                                    hotel
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="nit" class="form-label">NIT</label>
                                <input type="text" class="form-control" id="nit" name="nit"
                                    placeholder="Ej: 84563125-8" value="{{ $d->nit }}">
                                <div id="errorCity" class="form-text"> El número de NIT debe escribirlo sin
                                    el guión
                                    " - "
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="number_of_rooms" class="form-label">Número De Habitaciones</label>
                                <input type="number" class="form-control" id="number_of_rooms" name="number_of_rooms"
                                    placeholder="Ej: 56" value="{{ $d->number_of_rooms }}">
                                <div id="errorRooms" class="form-text text-danger visually-hidden">Debe escribir un
                                    número de
                                    habitaciones para el
                                    hotel
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-sm">Actualizar Hotel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
