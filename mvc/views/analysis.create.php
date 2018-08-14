{% extends "layouts/nohero.twig" %}

{% block title %}تحليل{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}
    <section class="py-5">
    {{ parent() }}
        <div class="container">
            <h1 align="right">التحليل</h1>
            <form method="post" action="mvc/controllers/analysisController.php" enctype="multipart/form-data" >
                <div class="form-group">
                     <p align="right">نوع التحليل</p> <select name="type" class="form-control" required>
                        <option value="coin">Coin</option>
                        <option value="artifact">Artifact</option>
                    </select>
                </div>
                <div class="form-group">
                    <p align="right">معلومات اضافية</p> <textarea name="info" id="" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                     <p align="right">صور</p> <input type="file" name="images[]" id="" class="form-control" multiple="multiple" required>
                </div>
                <input type="submit" class="btn btn-primary" value="ارسال">
                <input type="hidden" name="route" value="analysis-create">
            </form>
        </div>
    </section>
{% endblock %}