<div>

    <x-card cardTitle="Listado Categorias" cardFooter="">
        <x-slot:cardTools>
            <a href="" class="btn btn-primary">Crear Categoría</a>
        </x-slot:cardTools>

        <x-table>
            <x-slot:thead>
                <th>Id</th>
                <th>Nombre</th>
                <th width="3%">Ver</th>
                <th width="3%">Editar</th>
                <th width="3%">Eliminar</th>
            </x-slot>

            <tr>
                <td>1</td>
                <td>Esteban</td>
                <td>
                    <a href="" class="btn btn-success">
                        <i class="far fa-eye"></i>
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-primary">
                        <i class="far fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>
            </tr>

        </x-table>

    </x-card>
</div>
