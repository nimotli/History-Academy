{% extends "layouts/nohero.twig" %}

{% block title %}الدفع{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}
    <section class="py-5">
    {{ parent() }}
        <div class="container">
            <h1>الدفع</h1>
            <div class="row">
                <div class="col-md-6 my-4 p-3">
                <h5>انت تشتري {{live.name}}</h5>
                    <form>
                    <div class="radio">
                    <label><input type="radio" name="paymentAnalysis" value="automatic"> Paypal</label>
                    </div>
                    <div class="radio">
                    <label><input type="radio" name="paymentAnalysis" value="manual" checked> تحويل</label>
                    </div>
                    </form>
                </div>
                <div class="col-md-6 my-4 border p-3">
                    <div id="manual" >
                        <h3>المرجو ارسال {{live.price}} $ باستخدام المعلومات أسفله </h3>
                        <p><b>رقم الحساب البنكي:</b> {{sets.bank}}</p>
                        <p><b> وسترن يونيون:</b> {{sets.name}}</p>
                        <h3>بعد الدفع راسلنا عبر استمارة تواصل معنا أو عبر المعلومات أسفله</h3>
                        <p><b>البريد الإلكتروني:</b> {{sets.email}}</p>
                    </div>
                    <div id="automated" style="display:none;">
                        <h3>الثمن : {{live.price}} $</h3>
                        <a href="mvc/controllers/payementController.php?action=pay&type=live&id={{live.id}}"class="btn btn-warning"> ادفع الان</a>
                    </div>
                </div>
            </div>
            <div class="row border">
                <div class="col-md-6 my-4">
                
                </div>
            </div>
        </div>
    </section>
{% endblock %}