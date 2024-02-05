<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {block name="title"}{/block}</title>
    <link rel="stylesheet" type="text/css" href="{base_url()}/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {block name="styles"}{/block}
</head>

<body>
    {include file="templates/header.tpl"}
        <section id="content">
        <h1>
            {block name="content-title"}{/block}
        </h1>
        {block name="content"}{/block}
        </section>

    {include file="templates/footer.tpl"}

    {block name="js"} {/block}
</body>

</html>