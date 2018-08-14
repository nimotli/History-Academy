{% extends "layouts/nohero.twig" %}

{% block title %}الملف الشخصي{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}
    <section class="py-5">
    {{ parent() }}
        <div class="container">
            <h1 align="right">الملف الشخصي</h1>
            <div class="row">
                <div class="col-md-6 my-4">
                    <div class="card" >
                        <div class="card-header bg-dark  text-white" align="right">
                            الدروس المملوكة
                        </div>
                        <div class="card-body">
                                {% for course in courses %}
                                <p align="right"><a href="mvc/controllers/courseController.php?action=courseParts&id={{ course['id'] }}">{{ course['name'] }}</a></p>
                                {% endfor %}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-4">
                    <div class="card" >
                        <div class="card-header bg-dark text-white" align="right">
                            طلبات التحليل المرسلة
                        </div>
                        <div class="card-body">
                                {% for analy in analysis %}
                                    {% if analy.state == 'pending' %}
                                        <p align="right">طلب التحليل رقم {{analy.id}} تتم مراجعته</p>
                                    {% endif %}
                                    {% if analy.state == 'waiting for payement' %}
                                        <p align="right"><a href="mvc/controllers/analysisController.php?action=pay&id={{analy.id}}">طلب التحليل رقم<b></b> {{analy.id}} ينتضر الدفع</a></p>
                                    {% endif %}
                                    {% if analy.state == 'paid' %}
                                    <p align="right">{{analy.id}} جاري العمل على طلب التحليل رقم</p>
                                    {% endif %}
                                    {% if analy.state == 'closed' %}
                                        <p align="right"><a href="mvc/controllers/analysisController.php?action=view&id={{analy.id}}">طلب التحليل رقم <b></b> {{analy.id}} قد أجيب عنه</a></p>
                                    {% endif %}
                                {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border">
                <div class="col-md-6 my-4" align="right">
                    <b>اسم المستخدم : </b>{{accountData.username}}</br></br>
                    <b>البريد الإلكتروني : </b>{{accountData.email}}</br></br>
                    <b>الإسم : </b>{{accountData.name}}</br></br>
                    <b>النسب : </b>{{accountData.secondName}}</br></br>
                    <b>رقم الهاتف : </b>{{accountData.phone}}</br></br>
                    <b>العنوان : </b>{{accountData.address}}
                </div>
                <div class="col-md-6 my-4" align="right">
                    <div class="card" >
                        <div class="card-header bg-dark  text-white" align="right">
                            الدروس المباشرة المملوكة
                        </div>
                        <div class="card-body">
                            {% for live in lives %}
                                <p align="right"><a href="mvc/controllers/liveController.php?action=live-start&id={{ live.id }}&as=student">{{ live['name'] }} - {{ live['date']}}</a> </p>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}