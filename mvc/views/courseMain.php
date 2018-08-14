{% extends "layouts/nohero.twig" %}

{% block title %}الدروس{% endblock %}

{% block head %}
{% endblock %}

{% block content %}

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container">
            <div style="padding-top:80px;padding-bottom:50px;">
                <center><h1>الدروس</h1></center>
                <div style="background-color:#fed136;" class="py-3 rounded">
                    <form action="">
                        <div class="col-md-4">
                            الفئة:
                            <select name="categories" id="categoriesFilterCourse" class="form-control my-2">
                                <option value="-1">------</option>
                                {% for category in categories %}
                                    <option value="{{ category['id'] }}">{{ category['name'] }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </form>
                </div>
                <div class="row py-3" id="courseHolder">
                    {% for course in courses %}
                        <div class="col-xl-4 my-2" >
                            <div class="card" style="width: 18rem;">
                                <div class="card-header bg-dark">
                                    <a href="mvc/controllers/courseController.php?action=courseParts&id={{course.id}}">{{course.name}}</a>
                                </div>
                                <div class="card-body">
                                    <p>{{ course.description|length > 100 ? course.description|slice(0, 100) ~ '...' : course.description  }}</p>
                                </div>
                                <div class=" bg-dark rounded-bottom pt-3" style>
                                    <center><p style="color:#fed136;">{{course.price}} $</p></center>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>

{% endblock %}
{% block footerinc %}
   {{ parent() }} 
{% endblock %}