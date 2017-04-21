<form class="" action="{{ url("admin/index/index") }}" method="post">
    {% for elements in formInsert %}
        {{ elements }}<br>
    {% endfor %}
    <input type="submit" name="" value=" mandar ">
</form>
