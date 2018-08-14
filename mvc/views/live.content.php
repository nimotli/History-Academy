{% extends "layouts/nohero.twig" %}

{% block title %}درس مباشر{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container">
            <div style="padding-top:80px;padding-bottom:50px;">
                <center><h1>درس مباشر</h1></center>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">موضوع الدرس</th>
                        </tr>
                    </thead>
                </table>
                
                <p class="py-4 m-4"> {{ live['description'] }}</p>
                    {% if live['price'] == 0 %}
                        <center class="py-3"><a href="mvc/controllers/liveController.php?action=affect&id={{live.id}}&user={{session.logedinUser['id']}}"class="btn btn-warning">احصل عليه بالمجان</a></center>
                    {% else %}
                        <center class="py-3"><a href="mvc/controllers/liveController.php?action=pay&id={{live.id}}"class="btn btn-warning">اشتري الدرس ب {{live['price']}} $</a></center>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

{% endblock %}
{% block footerinc %}
   {{ parent() }} 
{% endblock %}