@layout('layout')

@section('link')
<link rel="stylesheet" href="<?=base_url('public/account/css/style.css')?>">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 pt-5 mt-5">
            <form action="<?=base_url('account/do_login')?>" method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username">
                    <?=form_error('username',"<p class='error'>","</p>");?>
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" class="form-control" name="password">
                    <?=form_error('password',"<p class='error'>","</p>");?>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block">
                    <p class="pt-2">Forgot password <a href="<?=base_url('account/forgot')?>" class="text-dark">Click
                            Here</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
