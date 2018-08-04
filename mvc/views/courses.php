{% extends "layouts/admin.twig" %}

{% block title %}admin{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- course Content -->
    <div id="course-content-wrapper">
        <div class="container-fluid">
            <h1>Courses</h1>
            <p>Buffer text.</p>
            <a href="mvc/controllers/courseController.php?action=create" class="btn btn-success float-right">Create course</a>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for course in courses %}
                    <tr>
                        <td>{{ course.id}}</td>
                        <td>{{ course.name}}</td>
                        <td>{{ course.description|length > 100 ? course.description|slice(0, 100) ~ '...' : course.description  }}</td>
                        <td>{{ categories[course.category] }}</td>
                        <td>{{ course.price}} $</td>
                        <td>
                            <a href="mvc/controllers/courseController.php?action=content&id={{ course.id }}" class="btn btn-secondary" >Content</a>
                            <a class="btn btn-primary" href="mvc/controllers/courseController.php?action=update&id={{ course.id }}">Update</a>
                            <a class="btn btn-danger"  onclick="deleteEntity(event,{{ course.id }})">Delete</a>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    <form action="mvc/controllers/courseController.php" method="post" id="deleteUserForm">
        <input type="hidden" name="route" value="delete">
        <input type="hidden" name="id" value="" id="deleteId">
    </form>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{% endblock %}