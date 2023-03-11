<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ isset($title) ? $title.' | '.config('app.name') : config('app.name') }}</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
@stack('css')

<link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css?v=3.2.0">
<script nonce="7b60afde-86bb-4a61-b9bc-30a7675df993">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0,z.referrerPolicy="origin",z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('layouts.inc_admin.navbar')

@include('layouts.inc_admin.sidebar')

<div class="content-wrapper">

<div class="content-header">
<div class="container-fluid mb-2">
@yield('content-header')
</div>
</div>


<div class="content">
<div class="container-fluid">
@yield('content')

</div>

</div>
</div>

</div>


<aside class="control-sidebar control-sidebar-dark">

<div class="p-3">
<h5>Title</h5>
<p>Sidebar content</p>
</div>
</aside>


<footer class="main-footer">

<div class="float-right d-none d-sm-inline">
Version 1.0.1
</div>

<strong>Copyright &copy; 2022 Arianti Nurul Kholfi.</strong> All rights reserved.
</footer>
</div>

@yield('modal')

<script src="/adminlte/plugins/jquery/jquery.min.js"></script>

<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>
@stack('js')
</body>
</html>
