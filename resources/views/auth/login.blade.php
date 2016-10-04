@include('includes.stylesheets')
<div class="ch-container">
    <div class="row">
        <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to Admin Panel</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
            {{Form:: open(array('route'=>'admin.login','class'=>'form-horizontal', 'method'=>'post')) }}
                @include('includes.login_form')
            <p class="center col-md-5">
        	{{ Form:: submit('Login',['class'=>'btn btn-primary'])}}
    		</p>
            {{ Form:: close()}}
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->
</div><!--/.fluid-container-->