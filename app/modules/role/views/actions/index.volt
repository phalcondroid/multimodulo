<h1>
    Lista de actions
</h1>

<a class="btn btn-danger pull-right" href="{{ url("role/resource/index/" ~ resource.id_role) }}">
    <span class="glyphicon glyphicon-backward"></span>
</a>

<a class="btn btn-default pull-right" href="{{ url("role/actions/new/" ~ resource.id_resource) }}">
    <span class="glyphicon glyphicon-plus"></span>
</a>

<table class="table">
    <thead>
        <tr>
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
        {% for item in actions %}
            <tr>
                <td>
                    {{ item.action }}
                </td>
                <td>
                    <a class="btn btn-warning" href="{{ url("role/actions/edit/" ~ item.id_action) }}">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger"href="{{ url("role/actions/delete/" ~ item.id_action) }}">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
