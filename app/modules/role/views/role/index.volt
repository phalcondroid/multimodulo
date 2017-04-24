<h1>
    Lista de roles
</h1>

<a class="btn btn-default pull-right" href="{{ url("role/role/new") }}">
    <span class="glyphicon glyphicon-plus"></span>
</a>

<table class="table">
    <thead>
        <tr>
            <th>
                Role
            </th>
            <th>
                Resources
            </th>
            <th>

            </th>
            <th>

            </th>
        </tr>
    </thead>
    <tbody>
        {% for item in roles %}
            <tr>
                <td>
                    {{ item.role }}
                </td>
                <td>
                    <a class="btn btn-default" href="{{ url("role/resource/index/" ~ item.id_role) }}">
                        resource
                    </a>
                </td>
                <td>
                    <a class="btn btn-warning" href="{{ url("role/role/edit/" ~ item.id_role) }}">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger"href="{{ url("role/role/delete/" ~ item.id_role) }}">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
