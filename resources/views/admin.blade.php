<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no"
    />

    <title>{{$title}}</title>
    
    <link rel="stylesheet" href="/assets/admin/vendors.chunk.css?v={{$version}}"/>
    <link rel="stylesheet" href="/assets/admin/compoments.chunk.css?v={{$version}}"/>
    <link rel="stylesheet" href="/assets/admin/custom.css?v={{$version}}">
    <link href='/theme/GIF/ht4g.ico' rel='shortcut icon' type='image/x-icon' />
    
    <script>window.routerBase = "/";</script>
    <script>
        window.settings = {
            title: '{{$title}}',
            theme: {
                sidebar: '{{$theme_sidebar}}',
                header: '{{$theme_header}}',
                color: '{{$theme_color}}',
            },
            description:"techzpn",
            version: '{{$version}}',
            background_url: '{{$background_url}}'
        }
    </script>
</head>


<body>
<div id="root"></div>
<script src="/assets/admin/vendors.js?v={{$version}}"></script>
<script src="/assets/admin/compoments.js?v={{$version}}"></script>
<script src="/assets/admin/umi.js?v={{$version}}"></script>

</body>
</html>
