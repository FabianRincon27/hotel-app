@if (Session::has('message'))
    <div class="alert alert-{{ Session::get('typealert') }} mt-3" role="alert" id="alert">
        <small>{{ Session::get('message') }}</small><br>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <small><b>&raquo;</b> {{ $error }}</small><br>
            @endforeach
        @endif
    </div>
    <script>
        setTimeout(() => {
            document.getElementById('alert').style.display = 'none';
        }, 5000);
    </script>
@endif
