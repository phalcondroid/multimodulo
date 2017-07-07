<h1>
    Lista de recursos
</h1>

<a class="btn btn-danger pull-right" href="{{ url("role/role/index") }}">
    <span class="glyphicon glyphicon-backward"></span>
</a>

<a class="btn btn-default pull-right" href="{{ url("role/resource/new/" ~ idRole) }}">
    <span class="glyphicon glyphicon-plus"></span>
</a>

<table class="table">
    <thead>
        <tr>
            <th>
                Resource
            </th>
            <th>
                Actions
            </th>
            <th>

            </th>
            <th>

            </th>
        </tr>
    </thead>
    <tbody>
        {% for item in resource %}
            <tr>
                <td>
                    {{ item.name }}
                </td>
                <td>
                    <a class="btn btn-default" href="{{ url("role/actions/index/" ~ item.id_resource) }}">
                        actions
                    </a>
                </td>
                <td>
                    <a class="btn btn-warning" href="{{ url("role/resource/edit/" ~ item.id_resource) }}">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger"href="{{ url("role/resource/delete/" ~ item.id_resource) }}">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
