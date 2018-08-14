{% extends "layouts/nohero.twig" %}

{% block title %}التحليل{% endblock %}

{% block head %}
{% endblock %}

{% block content %}
    <section class="py-5">
    {{ parent() }}
        <div class="container">
            <h2>التحليل</h2>
            <div class="row border">
                {% for image in images %}
                {% if image != '.' and image != '..' %}
                <div class="col-md-3">
                    <img src="storage/images/{{ analysis.id }}/{{image}}"  class="img-thumbnail">
                </div>
                {% endif %}
                {% endfor %}
            </div>
            <div class="col-12 my-3"><h5>التحليل النهائي</h5></div>
            {% for answer in answers %}
                <div class="row">
                    <div class="col-12 my-3">
                    <p>{{answer.answer}}</p>
                    </div>
                </div>
            {% endfor %}
            
        </div>
    </section>
{% endblock %}