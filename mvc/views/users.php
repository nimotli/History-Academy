{% extends "layouts/admin.twig" %}

{% block title %}admin{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>Users</h1>
            <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
            <a href="?page=user-create" class="btn btn-success float-right">Create User</a>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Second Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Type</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for user in users %}
                    <tr>
                        <td>{{ user.id}}</td>
                        <td>{{ user.email}}</td>
                        <td>{{ user.username}}</td>
                        <td>{{ user.name}}</td>
                        <td>{{ user.secondName}}</td>
                        <td>{{ user.address}}</td>
                        <td>{{ user.phone}}</td>
                        <td>{% if user.admin == 1 %}Admin {% else %} Client {%endif%}</td>
                        <td><a class="btn btn-primary" href="mvc/controllers/userController.php?action=delete&id={{ user.id }}">Update</a><a class="btn btn-danger"  onclick="deleteUser(event,{{ user.id }})">Delete</a></td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    <form action="mvc/controllers/userController.php" method="post" id="deleteUserForm">
        <input type="hidden" name="route" value="delete">
        <input type="hidden" name="id" value="" id="deleteUserId">
    </form>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{% endblock %}