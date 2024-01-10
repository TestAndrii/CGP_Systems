<div>
    <div class="row">
        @if ($users->count())
        <table class="table table-bordered table-dark">
            <thead>
            <tr>
                <th>
                        Name
                </th>
                <th>
                        City
                </th>
                <th>
                        Images count
                </th>
            </tr>
            </thead>
            <tbody>

            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->city }}</td>
                <td>{{ $user->images_count }}</td>
            </tr>
            @endforeach

            </tbody>
        </table>
        @else
        <div class="alert alert-warning">
            Your query returned zero results.
        </div>
        @endif
    </div>

</div>