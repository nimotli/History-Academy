{% extends "layouts/nohero.twig" %}

{% block title %}محتوى الدرس{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container">
            <div style="padding-top:80px;padding-bottom:50px;">
                <center><h1>محتوى الدرس</h1></center>
                <p class="py-4 m-4"> {{ course['description'] }}</p>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        {% if type == 'visit' %}
                        <th scope="col">الأشياء التي ستتعل في هذا الدرس</th>
                        {% else %}
                        <th scope="col">محتوى الدرس</th>
                        {% endif %}
                        </tr>
                    </thead>
                    {% for coursepart in courseParts %}
                        {% if type == 'visit' %}
                        <tr><td scope="row">{{coursepart['name']}}</td></tr>
                        {% else %}
                        <tr><td scope="row"><a href="mvc/controllers/courseController.php?action=showCoursePart&id={{coursepart['id']}}">{{coursepart['name']}}</a></td></tr>
                        {% endif %}
                    {% endfor %}
                </table>
                    {% if type == 'visit' %}
                    <center class="py-3"><a href="mvc/controllers/courseController.php?action=pay&id={{course.id}}"class="btn btn-warning">اشتري الدرس ب {{course['price']}} $</a></center>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

{% endblock %}
{% block footerinc %}
   {{ parent() }} 
{% endblock %}