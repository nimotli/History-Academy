{% extends "layouts/admin.twig" %}

{% block title %}الصفحات{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>الصفحات</h1>
            <p>ادارة الصفحات</p>
            <a href="?page=page-create" class="btn btn-success float-right">صفحة جديدة</a>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>العنوان</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for page in pages %}
                    <tr>
                        <td>{{ page.id}}</td>
                        <td>{{ page.name}}</td>
                        <td><a class="btn btn-primary" href="mvc/controllers/pageController.php?action=update&id={{ page.id }}">تغيير</a><a class="btn btn-danger"  onclick="deleteEntity(event,{{ page.id }})">محو</a></td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    <form action="mvc/controllers/pageController.php" method="post" id="deleteUserForm">
        <input type="hidden" name="route" value="delete">
        <input type="hidden" name="id" value="" id="deleteId">
    </form>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{% endblock %}