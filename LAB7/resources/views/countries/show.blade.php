@include('shared.html')

@include('shared.head', ['pageTitle' => 'Kraj'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">
        <div class="row mb-1">
            <h1>Kraj</h1>
        </div>
        @include('shared.session-error')

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nazwa</th>
                    <th scope="col">Kod</th>
                    <th scope="col">Waluta</th>
                    <th scope="col">Powierzchnia</th>
                    <th scope="col">Język</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><a href="{{ route('countries.show', $country) }}">{{ $country->id }}</a></th>
                    <td>{{ $country->name }}</td>
                    <td>{{ $country->code }}</td>
                    <td>{{ $country->currency }}</td>
                    <td>{{ $country->area }} km²</td>
                    <td>{{ $country->language }}</td>
                    <td><a href="{{ route('countries.edit', $country) }}">Edycja</a></td>
                </tr>
            </tbody>
        </table>

    </div>

    @include('shared.footer')
</body>

</html>
