{% extends "layouts/admin.twig" %}

{% block title %}TITILE{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- analysis Content -->
    <div id="analysis-content-wrapper">
        <div class="container-fluid">
            <h1>تحضبر التحليل</h1>
            <p>تحضير التحليل للدفع</p>
            <div class="row border">
                {% for image in images %}
                {% if image != '.' and image != '..' %}
                <div class="col-md-3">
                    <img src="storage/images/{{ analysis.id }}/{{image}}" alt="" class="img-thumbnail">
                </div>
                {% endif %}
                {% endfor %}
            </div>
            <div class="row m-3">
                <div class="col-md-6 border">
                    <p><b>أرسل من طرف :</b> {{ analysis.user }}</p>
                    <p><b>معلوماب اضافية :</b> {{ analysis.info }}</p>
                </div>
                <div class="col-md-6 border">
                    <form action="mvc/controllers/analysisController.php" method="post">
                        <p align="right"> الثمن</p><input type="number" name="price" class="form-control" required>
                        <input class="btn btn-primary" type="submit" value="Initialize">
                        <input type="hidden" name="route" value="initialize">
                        <input type="hidden" name="id" value="{{ analysis.id }}">
                    </form>
                </div>
                
            </div>
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