{% extends "layouts/nohero.twig" %}

{% block title %}فقرة الدرس{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container">
            <div style="padding-top:80px;padding-bottom:50px;">
                <center><h1>{{ coursePart['name'] }}</h1></center>
                <div class="py-3">
                    {{ coursePart['content'] | raw }}
                </div>
                <a href="mvc/controllers/courseController.php?action=courseParts&id={{ coursePart['course'] }}">الرجوع الى الدرس</a>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
{% block footerinc %}
   {{ parent() }} 
{% endblock %}