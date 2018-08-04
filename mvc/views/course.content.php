{% extends "layouts/nohero.twig" %}

{% block title %}admin{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container">
            <div style="padding-top:80px;padding-bottom:50px;">
                <center><h1>course Parts</h1></center>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">What you will learn in this course</th>
                        </tr>
                    </thead>
                    {% for coursepart in courseParts %}
                        <tr><td scope="row"><a href="mvc/controllers/courseController.php?action=showCoursePart&id={{coursepart['id']}}">{{coursepart['name']}}</a></td></tr>
                    {% endfor %}
                </table>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
{% block footerinc %}
   {{ parent() }} 
{% endblock %}