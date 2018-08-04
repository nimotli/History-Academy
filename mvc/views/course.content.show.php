{% extends "layouts/admin.twig" %}

{% block title %}TITILE{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- coursePart Content -->
    <div id="coursePart-content-wrapper">
        <div class="container-fluid">
            <h1>Course Part</h1>
            <p>Buffer text.</p>
            <a href="mvc/controllers/courseController.php?action=content-create&id={{ courseId }}" class="btn btn-success float-right">Create coursePart</a>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for coursePart in courseParts %}
                    <tr>
                        <td>{{ coursePart.id}}</td>
                        <td>{{ coursePart.name}}</td>
                        <td>{{ coursePart.description|length > 100 ? coursePart.description|slice(0, 100) ~ '...' : coursePart.description  }}</td>
                        <td>
                            <a class="btn btn-primary" href="mvc/controllers/courseController.php?action=updateContent&id={{ coursePart.id }}">Update</a>
                            <a class="btn btn-danger"  onclick="deleteEntity(event,{{ coursePart.id }})">Delete</a>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    <form action="mvc/controllers/courseController.php" method="post" id="deleteUserForm">
        <input type="hidden" name="route" value="deletecontent">
        <input type="hidden" name="id" value="" id="deleteId">
        <input type="hidden" name="course" value="{{ courseId }}">
    </form>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{% endblock %}