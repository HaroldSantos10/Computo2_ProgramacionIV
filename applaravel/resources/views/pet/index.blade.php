Listado de mascotas

<a href="{{ url('pet/create') }}">Nuevo Registro</a>
<table>
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($pets as $pet)
        <tr>
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->age }}</td>
            
            <form action="{{ url('/pet/'.$pet->id) }}" method="post">
   
                @csrf
                {{ method_field('DELETE')}}     <!-- define el metodo que se necesita -->
                <td>
                    <a href="{{ route('pet.edit', $pet->id) }}">Editar</a>
                    <input type="submit" onclick="return confirm('¿Desea eliminar el registro?')" value="Eliminar">
                </td>

            </form>
        </tr>

        @endforeach
    </tbody>
</table>