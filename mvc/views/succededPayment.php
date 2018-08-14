{% extends "layouts/nohero.twig" %}

{% block title %}تم الدفع{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}
    <section class="py-5">
    {{ parent() }}
        <div class="container">
            <h1>تم الدفع بنجاح</h1>
            <div class="m-4">
                <h4>تم الدفع بنجاح !</h4></br>
                <br>
                <h5>لقد دفعت {{amount}} ستجد المنتوج في صفحتك</h5> 
            </div>
        </div>
    </section>
{% endblock %}