<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PZJKZXSP');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ozone Social | اوزون سوشال </title>
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <meta name="description" content="اوزون سوشال یا همان شبکه اجتماعی اوزون به زودی راه اندازی میشود.">
    <meta name="keywords" content="Ozone, Ozone Social , Ozonesocial, اوزون سوشال, شبکه اجتماعی اوزون">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZJKZXSP"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="container">
    <div class="logo"></div>
    <h3 class="titleTag" style="">به اوزون خوش آمدید</h3>
    <form action="{{route('register-user-store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="phone" class="label" style="text-align: right; color: cornsilk;">اینجا قراره اتفاق‌های هیجان‌انگیزی بیفته</label>
            <label for="phone" class="label" style="text-align: right; color: cornsilk; padding-bottom: 10px;">برای اینکه زودتر از بقیه باخبر بشی شماره موبایلت رو وارد کن</label>
            @if ($errors->has('phone'))
                    <input type="text" id="phone" value="{{old('phone')}}" class="input" name="phone" placeholder="شماره موبایل" autocomplete="off" style="border: 1px solid #FF7A74FF;">
                    <small class="span">{{$errors->first('phone')}}</small>
            @else
                    <input type="text" id="phone" class="input" name="phone" placeholder="شماره موبایل" autocomplete="off">
            @endif
        </div>
        @if(session('success') != null )
            <button type="submit" class="btn " disabled style="background-color: #00700f">{{session('success')}}</button>
        @else
            <button type="submit" class="btn ">ثبت شماره موبایل</button>
        @endif
    </form>
    <div class="social-links">
        <a href="https://www.linkedin.com/company/ozonesocial/" class="social-link"><img class="social-img" src="{{ asset('img/linkedin.png') }}" alt="LinkedIn"></a>
        <a href="https://www.instagram.com/ozonesocial.app/" class="social-link"><img class="social-img" src="{{ asset('img/instagram.png') }}" alt="Instagram"></a>
        <a href="https://twitter.com/Ozonesocial" class="social-link"><img class="social-img" src="{{ asset('img/twitter.png') }}" alt="Twitter"></a>
    </div>
</div>
</body>
</html>
