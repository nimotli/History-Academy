
{% extends "layouts/admin.twig" %}
{% block title %}admin{% endblock %}

{% block head %}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
{% endblock %}

{% block content %}


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>ادارة موقع {{sets['siteName']}}</h1>
            <p>هذه المنصة تسمح لك بادارة محتوى الموقع</p>
            <p> - <code>#page-content-wrapper</code>.</p>
            
        </div>
    </div>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 

{% endblock %}