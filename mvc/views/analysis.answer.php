{% extends "layouts/admin.twig" %}

{% block title %}تحليل{% endblock %}

{% block head %}
<link rel="stylesheet" href="assets/css/lightbox.min.css">
{% endblock %}

{% block content %}
    <section class="py-5">
    {{ parent() }}
        <div class="container">
            <h1>التحليل</h1>
            <div class="row border">
                {% for image in images %}
                {% if image != '.' and image != '..' %}
                <div class="col-md-3">
                    <a href="storage/images/{{ analysis.id }}/{{image}}" data-lightbox="image-1"><img src="storage/images/{{ analysis.id }}/{{image}}"  class="img-thumbnail"></a>
                </div>
                {% endif %}
                {% endfor %}
            </div>
            <form method="post" action="mvc/controllers/analysisController.php" enctype="multipart/form-data" class="pt-5">
                <div class="form-group">
                    التحليل : <textarea name="answer" id="" class="form-control" required></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="ارسال">
                <input type="hidden" name="route" value="answer">
                <input type="hidden" name="analysis" value="{{ analysis.id }}">
            </form>
        </div>
    </section>
    {% block footerinc %}
        <script src="assets/js/lightbox.min.js"></script>
    {% endblock %}
{% endblock %}