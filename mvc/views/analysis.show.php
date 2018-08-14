{% extends "layouts/admin.twig" %}

{% block title %}تحليل{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- analysis Content -->
    <div id="analysis-content-wrapper">
        <div class="container-fluid">
            <h1>التحاليل</h1>
            <p>ادارة التحاليل</p>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>رقم</th>
                        <th>المستخدم</th>
                        <th>معلومات</th>
                        <th>الحالة</th>
                        <th>الثمن</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for analysis in analysiss %}
                    <tr>
                        <td>{{ analysis.id}}</td> 
                        <td>{{ users[analysis.user]}}</td>
                        <td>{{ analysis.info|length > 100 ? analysis.info|slice(0, 100) ~ '...' : analysis.info  }}</td>
                        <td>{{ analysis.state  }}</td>
                        <td>{{ analysis.price  }}</td>
                        <td>
                        {% if analysis.state == 'pending' %}
                            <a class="btn btn-primary text-white" href="mvc/controllers/analysisController.php?action=initialize&id={{ analysis.id }}">تهييء</a>
                        {% endif %}
                        {% if analysis.state == 'waiting for payement' %}
                        <a class="btn btn-primary text-white" href="mvc/controllers/analysisController.php?action=initialize&id={{ analysis.id }}">تغيير الثمن</a>
                        <a class="btn btn-danger text-white"  href="mvc/controllers/analysisController.php?action=stop&id={{ analysis.id }}">ايقاف</a>
                        <a class="btn btn-success text-white"  href="mvc/controllers/analysisController.php?action=paid&id={{ analysis.id }}">تم الدفع</a>
                        {% endif %}
                        {% if analysis.state == 'paid' %}
                            <a class="btn btn-primary text-white"  href="mvc/controllers/analysisController.php?action=answer&id={{ analysis.id }}">ارسال تحليل</a>
                            <a class="btn btn-success text-white"  href="mvc/controllers/analysisController.php?action=unpay&id={{ analysis.id }}">ازالة الدفع</a>
                        {% endif %}
                        {% if analysis.state == 'closed' %}
                            <a class="btn btn-primary text-white"  href="mvc/controllers/analysisController.php?action=answer&id={{ analysis.id }}">اضافة تحليل</a>
                        {% endif %}
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    <form action="mvc/controllers/analysisController.php" method="post" id="deleteUserForm">
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