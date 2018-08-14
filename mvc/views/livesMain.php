{% extends "layouts/nohero.twig" %}

{% block title %}الدروس المباشرة{% endblock %}

{% block head %}
{% endblock %}

{% block content %}

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container">
            <div style="padding-top:80px;padding-bottom:50px;">
                <center><h1>الدروس المباشرة</h1></center>
                
                <div class="row py-3" id="liveHolder">
                    {% for live in lives %}
                        <div class="col-xl-4 my-2" >
                            <div class="card" style="width: 18rem;">
                                <div class="card-header bg-dark">
                                    <a href="mvc/controllers/liveController.php?action=liveParts&id={{live.id}}">{{live.name}}</a>
                                </div>
                                <div class="card-body">
                                    <p>{{ live.description|length > 100 ? live.description|slice(0, 100) ~ '...' : live.description  }}</p>
                                </div>
                                <div class=" bg-dark rounded-bottom pt-3" style>
                                    <center><p class="text-white">{{live.date}}</p><p style="color:#fed136;">{{live.price}} $</p></center>
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