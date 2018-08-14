{% extends "layouts/admin.twig" %}

{% block title %}الفئات{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- category Content -->
    <div id="category-content-wrapper">
        <div class="container-fluid">
            <h1>الفئات</h1>
            <p>ادارة الفئات</p>
            <a href="?page=category-create" class="btn btn-success float-right">فئة جديدة</a>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>الفئة</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for category in categories %}
                    <tr>
                        <td>{{ category.id}}</td>
                        <td>{{ category.name}}</td>
                        <td><a class="btn btn-primary" href="mvc/controllers/categoryController.php?action=update&id={{ category.id }}">تغيير</a><a class="btn btn-danger"  onclick="deleteEntity(event,{{ category.id }})">محو</a></td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    <form action="mvc/controllers/categoryController.php" method="post" id="deleteUserForm">
        <input type="hidden" name="route" value="delete">
        <input type="hidden" name="id" value="" id="deleteId">
    </form>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{% endblock %}