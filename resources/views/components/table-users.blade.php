<div class="overflow-scroll">
    <table class="table table-hover ">
        <thead>
            <tr>
                <td scope="col">#</td>
                <td scope="col">Name</td>
                <td scope="col">Email</td>
                <td scope="col">Role</td>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td scope="col">{{ $user->id }}</td>
                    <td scope="col">

                        {{ $user->name }}

                    </td>

                    <td scope="col">
                        {{ $user->email }}
                    </td>
                    <td scope="col">
                        {{ $user->role->nom }}
                    </td>
                    

                    <td class="d-flex">
                        
                        @includeWhen($isAdmin, 'components.form-user', [
                        'user' => $user,
                        ])
                        @includeWhen($isAdmin, 'components.delete-user', [
                        'id' => $user->id,
                        ])
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
