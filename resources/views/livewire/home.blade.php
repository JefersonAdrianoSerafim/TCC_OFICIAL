
<div class="">
        <h1 class="">Lista de usuários</h1>

        @if($users->isEmpty())
            <p> Sem usuários encontrados </p>
        @else
            <table class="tableUsers">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Ações</th>
                        <th> 

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class ="">{{ $loop->iteration }}</td>
                        <td>{{ $user->name_user }}</td>
                        <td>
                            <a href="{{ route('user.show', parameters: $user->id )}}" class="">View</a>
                            <a href="{{ route('user.edit', $user->id )}}" class="">Edit</a>
                            <form action="{{ route('user.destroy', $user->id )}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="">Delete</button>
                            </form>
                            <a href="{{ route('user.create')}}" class="">Criar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
