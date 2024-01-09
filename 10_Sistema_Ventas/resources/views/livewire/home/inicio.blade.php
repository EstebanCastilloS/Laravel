<div>
    <h1>Componente de Inicio</h1>

    <x-card cardTitle="card Title" cardFooter="card Footer">
        <x-slot:cardTools>
            <a href="" class="btn btn-primary">Crear</a>
        </x-slot:cardTools>

        <x-table>
            <x-slot:thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </x-slot>

            <tr>
                <td>1</td>
                <td>Esteban</td>
                <td>Castillo</td>
                <td>
                    <a href="" class="btn btn-primary">Editar</a>
                    <a href="" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>

        </x-table>

    </x-card>
</div>
