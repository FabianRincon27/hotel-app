<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>&copy; Hotel App</title>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <style>
        img {
            display: block;
            margin: 0 auto;
        }

        body {
            font-family: Nunito;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header justify-content-center">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="container d-flex justify-content-between">
                            <div class="float-start">
                                <h4 class="text-center fw-bold">Lista de hoteles</h4>
                            </div>
                            <div class="float-end">
                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#addHotel">
                                    Añadir Hotel
                                </button>
                                @include('modals.add')
                            </div>
                        </div>
                        <div class="container">
                            @include('alerts.alert')
                        </div>
                        <div class="container table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Nombre Del Hotel</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Ciudad</th>
                                        <th scope="col">NIT</th>
                                        <th scope="col">Número De Habitaciones</th>
                                        <th scope="col" colspan="2">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hotel as $d)
                                        <tr class="text-center">
                                            <td>{{ $d->name }}</td>
                                            <td>{{ $d->address }}</td>
                                            <td>{{ $d->city }}</td>
                                            <td>{{ $d->nit }}</td>
                                            <td>{{ $d->number_of_rooms }}</td>
                                            <td>
                                                <button class="btn btn-info btn-sm text-white" data-bs-toggle="modal"
                                                    data-bs-target="#editHotel{{ $d->id }}">
                                                    <i class='bx bxs-building'></i>
                                                </button>
                                                @include('modals.edit-hotel', $d)
                                            </td>
                                            <td>
                                                @switch($d->asigned_rooms)
                                                    @case(0)
                                                        <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#addRoomsHotel{{ $d->id }}">
                                                            <i class='bx bxs-hotel'></i>
                                                        </button>
                                                        @include('modals.rooms-hotel', $d)
                                                    @break

                                                    @case(1)
                                                        <button class="btn btn-primary btn-sm text-white" data-bs-toggle="modal"
                                                            data-bs-target="#EditRoomsHotel{{ $d->id }}">
                                                            <i class='bx bx-show-alt'></i>
                                                        </button>
                                                        @include('modals.view-rooms-hotel', $d)
                                                    @break
                                                @endswitch
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/js/hotel.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
