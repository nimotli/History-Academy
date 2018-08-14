{% extends "layouts/nohero.twig" %}

{% block title %}{{page['name']}}{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container">
            <div style="padding-top:80px;padding-bottom:50px;">
                <center><h1>{{ page['name'] | raw  }}</h1></center>
                <div>
                    {{ page['content'] | raw  }}
                </div>
            </div>
        </div>
    </div>

{% endblock %}
{% block footerinc %}
   {{ parent() }} 
{% endblock %}