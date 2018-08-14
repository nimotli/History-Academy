{% extends "layouts/admin.twig" %}

{% block title %}دروس مباشرة{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- live Content -->
    <div id="live-content-wrapper">
        <div class="container-fluid">
            <h1 align="center">الدروس المباشرة</h1>
            <p align="center">ادارة الدروس المباشرة</p>
            <a href="?page=live-create" class="btn btn-success float-right">درس جديد</a>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>العنوان</th>
                        <th>الوصف</th>
                        <th>الموعد</th>
                        <th>الثمن</th>
                        <th>الحالة</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for live in lives %}
                    <tr>
                        <td>{{ live.id}}</td>
                        <td>{{ live.name}}</td>
                        <td>{{ live.description}}</td>
                        <td>{{ live.date}}</td>
                        <td>{{ live.price}} $</td>
                        <td>
                            {% if live.state == 'notDone' %}
                                لم تنجز بعد
                            {% else %}
                                انتها
                            {% endif %}
                        </td>
                        <td><a class="btn btn-warning" href="mvc/controllers/liveController.php?action=live-start&id={{ live.id }}&as=tutor">بدأ</a><a class="btn btn-secondary" href="mvc/controllers/liveController.php?action=live-start&id={{ live.id }}&as=student"> بدأ كمتتبع</a><a class="btn btn-primary" href="mvc/controllers/liveController.php?action=update&id={{ live.id }}">تغيير</a><a class="btn btn-success"  href="mvc/controllers/liveController.php?action=afct&id={{live.id}}">اضافة مستخدم</a><a class="btn btn-danger"  href="mvc/controllers/liveController.php?action=stop&id={{live.id}}">انهاء</a></td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    <form action="mvc/controllers/liveController.php" method="post" id="deleteUserForm">
        <input type="hidden" name="route" value="delete">
        <input type="hidden" name="id" value="" id="deleteId">
    </form>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{% endblock %}