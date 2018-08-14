{% extends "layouts/live.twig" %}

{% block title %}الفئات{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- live Content -->
<div class="container-fluid " style="height :100vh;">
    <div class="row border px-5 bg-dark">
            {% if as == 'tutor' %}
                <a class="btn btn-secondary text-white" href="mvc/controllers/liveController.php?action=show">رجوع</a>
            {% else %}
                <a class="btn btn-secondary text-white" href="?page=profile&id={{user['id']}}">رجوع</a>
            {% endif %}
                 <h5 class="ml-5 text-white">{{live.name}}</h5>
    </div>
    <div class="row h-100">
        <div class="col-lg-9 col-sm-12 ">
            <div class="row border p-2" style="height :85vh;overflow-y: scroll;" >
                <div class="col-12 " style="overflow-y: hidden;" id="tutorMsgsHolder">

                    <p id="lastMsgTutor" style="display:none;">-1</p>
                </div>
            </div>
            <div class="row border" style="height :15vh;">
                {% if as == 'tutor'%}
                    <div class="col-md-11 col-sm-12">
                        <textarea name="" id="tutorMsg" class="form-control h-100" style="resize: none;"></textarea>
                    </div>
                    <div class="col-md-1 col-sm-12 ">
                        <button class="btn btn-primary float-right" onclick="sendTutorMsg(event)">ارسال</button>
                    </div>
                {% endif %}
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 ">
            <div class="row border bg-dark text-white" style="height :85vh;overflow-y: scroll;">
                <div class="col-12 " style="overflow-y: hidden;" id="studentMsgsHolder">

                    <p id="lastMsgStudent" style="display:none;">-1</p>
                </div>
            </div>
            <div class="row border bg-dark text-white" style="height :15vh;">
                {% if as == 'student' and live.state!='done' %}
                    <div class="col-md-10 col-sm-12">
                        <textarea name="" id="studentMsg" class="form-control h-100"  style="resize: none;"></textarea>
                    </div>
                    <div class="col-md-2 col-sm-12 ">
                        <button class="btn btn-primary float-right" onclick="sendStudentMsg(event)">ارسال</button>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
<p id="userHolder" style="display:none;">{{user.id}}</p>
<p id="liveHolder" style="display:none;">{{live.id}}</p>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
{% endblock %}