<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log in | {{ config('app.name') }}</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css?v=3.2.0">
<script nonce="019e8909-3c97-40dd-8cf8-5ae3685d2614">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0,z.referrerPolicy="origin",z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<a href="{{ url('/') }}"><b>Hotel</b> Pangandaran</a>
</div>

<div class="card">
<div class="card-body login-card-body">
<p class="login-box-msg">Masuk Untuk Memulai Sesi Anda</p>
<form action="?" method="post">
<div class="input-group mb-3">
<input type="text" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid':'' }}" placeholder="Username">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
@error('username')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="input-group mb-3">
<input type="password" name="password" class="form-control{{ $errors->has('username') ? ' is-invalid':'' }}" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
@error('password')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="row">
<div class="col-8">
<div class="icheck-primary">
<input type="checkbox" name="remember" id="remember">
<label for="remember">
Ingatkan Saya
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i>Log In</button>
</div>

</div>
</form>
</div>

</div>
</div>


<script src="/adminlte/plugins/jquery/jquery.min.js"></script>

<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>
