@include('shared.html')

@include('shared.head', ['pageTitle' => 'Edytuj wycieczkę'])

<body>
@include('shared.navbar')

<div class="container mt-5 mb-5">
    @include('shared.session-error')
    @include('shared.validation-error')

    <div class="row text-center">
        <h1>Edytuj wycieczkę</h1>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <form method="POST" action="{{ route('trips.update', $trip->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group mb-2">
                    <label for="name" class="form-label">Nazwa</label>
                    <input id="name" name="name" type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name', $trip->name) }}">
                </div>

                <div class="form-group mb-2">
                    <label for="start_date" class="form-label">Data rozpoczęcia</label>
                    <input id="start_date" name="start_date" type="date"
                        class="form-control @error('start_date') is-invalid @enderror"
                        value="{{ old('start_date', $trip->start_date) }}">
                </div>

                <div class="form-group mb-2">
                    <label for="end_date" class="form-label">Data zakończenia</label>
                    <input id="end_date" name="end_date" type="date"
                        class="form-control @error('end_date') is-invalid @enderror"
                        value="{{ old('end_date', $trip->end_date) }}">
                </div>

                <div class="form-group mb-4">
                    <label for="country_id" class="form-label">Kraj</label>
                    <select name="country_id" id="country_id" class="form-select @error('country_id') is-invalid @enderror">
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}"
                                {{ old('country_id', $trip->country_id) == $country->id ? 'selected' : '' }}>
                                {{ $country->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Zapisz zmiany">
                </div>
            </form>
        </div>
    </div>
</div>

@include('shared.footer')
</body>
</html>
