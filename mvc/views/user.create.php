{% extends "layouts/admin.twig" %}

{% block title %}admin{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>Create a new user</h1>
            <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
            <form method="post" action="mvc/controllers/userController.php">
                <div class="form-group">
                    username :<input name="username" type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    password :<input name="password" type="password" class="form-control">
                </div>
                <div class="form-group">
                    Confirm password :<input type="password" name="confirm-password" class="form-control">
                </div>
                <div class="form-group">
                    email :<input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    first name :<input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    second name :<input type="text" name="secondName" class="form-control">
                </div>
                <div class="form-group">
                    address :<input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    phone number :<input type="text" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    type :<select name="type" class="form-control">
                        <option value="1">Admin</option>
                        <option value="0">Client</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="register">
                <input type="hidden" name="route" value="user-create">
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{% endblock %}