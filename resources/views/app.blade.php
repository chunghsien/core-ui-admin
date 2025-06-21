<!DOCTYPE html>
<html lang="{{ $lang }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    @viteReactRefresh
    @vite('resources/ts/themes/core-ui-admin/App.tsx')
</head>

<body>
    <div id="admin-root"></div>
    <script>
        window.APP_LANG = "{{ $lang }}";
    </script>
</body>

</html>